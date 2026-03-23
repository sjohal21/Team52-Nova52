<?php
namespace App\Http\Controllers;
use App\Models\AdminLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    public function show() {
        //Get all of the users from the users table and order them by name
        $users = User::query()
          ->orderBy('name')
          ->get();
        return view('admin.users',['users' => $users]);
    }

    public function getUserDetails(string $id)
    {
        Log::info($id);
        $user = User::where('id',$id)->first();
        return view('admin.userdetail',['user' => $user]);
    }


    public function promote(Request $request) {
        //makes sure that a valid user id exists for the user
        $request->validate([
        'user_id' => 'required','integer','exists:users,id'
        ]);

        //if the user doesnt exist an error is thrown
        $user = User::findOrFail('id', $request->user_id);

        //change customer to an admin
        if ($user->role !== 'Admin') {
            $user->role = 'Admin';
            $user->save();
        }
        AdminLog::create([
            'user_id' => $user -> id,
            'action' => $user -> name . 'was promoted to Admin'
        ]);

        return redirect('/admin/users')->with('success','User has been successfully promoted!');
    }

    public function demote(Request $request) {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $user = User::findOrFail($request->user_id);

        //prevents current user from demoting themselves
        if($user->id === auth()->id()) {
            $url = "/admin/users/{$user->id}";
            error_log($url);
            return redirect($url)->withErrors(['error' => 'You cannot demote yourself']);
        }

        //change admin user to customer
        if ($user->role == 'Admin') {
            $user->role = 'customer';
            $user->save();
        }
        Adminlog::create([
            'user_id' => $user -> id,
            'action' => $user -> name . "was demoted from Admin"
        ]);
        return redirect('/admin/users')->with('success','User has been successfully demoted');
    }
}
