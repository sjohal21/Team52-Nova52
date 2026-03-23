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

        $query = User::query();

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('id','like',"%{search}%")
                ->orWhere('name','like',"%{search}%")
                ->orWhere('email','like',"%{search}%")
                ->orWhere('phone_number','like',"%{search}%")
                ->orWhere('role','like',"%{search}%");
            });

            if ($request->filled('role') && $request->role !== 'all') {
                $query->where('role',$request->role);
            }
        }

        $users = $query->orderBy('name')
        ->get();
        
        return view('admin.users',[
            'users' => $users,
            'search' => $request->search ?? '',
            'selectedRole' => $ $request->role ?? 'all'
            ]);
    }

    public function createUserPage() {
        return view('admin.createuser');
    }

    public function createUser(Request $request) {

        $validated = $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|min:8|confirmed', 
         'phone_number' =>'required|string|max:20',
         'address' => 'nullable|string|max:255',
         'role' => 'required|string|in:admin,customer'
        ]);

        $user = User::create([
         'name' => $validated['name'],
         'email' => $validated['email'],
         'password' => Hash::make($validated['password']),
         'phone_number' => $validated['phone_number'] ?? null,
         'address' => $validated['address'] ?? null,
         'role' => $validated['role'],
         'must_changed_password' => true,
        ]);

        AdminLog::create([
            'user_id' => auth()->id(),
            'action' => 'Created user '. $user->name . ' (#' . $user->id . ')',
        ]);
    }

    public function getUserDetails(string $id)
    {
        Log::info($id);
        $user = User::where('id',$id)->first();
        return view('admin.userdetail',['user' => $user]);
    }

    public function updateUser(Request $request, string $id) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email' . $id,
        'password' => 'required|min:8|confirmed', 
        'phone_number' =>'required|string|max:20',
        'address' => 'nullable|string|max:255',
        'role' => 'required|string|in:admin,customer'
        ]);

        $user = User::findOrFail($id);
        $oldRole = $user->role;

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone_number = $validated['phone_number'] ?? null;
        $user->address = $validated['address'] ?? null;
        $user->role = $validated['role'];
        $user->save();

        AdminLog::create([
            'user_id' => auth()->id(),
            'action' => 'Updated user '. $user->name . ' (#' . $user->id . ') from role' . $oldRole . 'to' . $user->role,
        ]);

        return redirect()->route('admin.users.detail', $user->id)
        ->with('success','User details successfully updated');


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
        // TODO: ADD LOG
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
        // TODO: ADD LOG
        Adminlog::create([
            'user_id' => $user -> id,
            'action' => $user -> name . "was demoted from Admin"
        ]);
        return redirect('/admin/users')->with('success','User has been successfully demoted');
    }
}
