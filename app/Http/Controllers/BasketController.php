<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    // View basket
    public function index()
    {
        $basketId = session('basket_id',1);

        if (!$basketId) {
            return view('basket',['items' => [], 'total' => 0, 'count' => 0]);
        }
        $basket = Basket::with('items.product')->find($basketId);

        if (!$basket) {
            return view('basket',['items' => [], 'total' => 0, 'count' => 0]);
        }
        // Create variable where it contains all items associated with the basket using BasketItems
        $basketItems = BasketItem::where('basket_id',$basketId)->with('product')->get();
        return view('basket',['items' => $basketItems, 'total' => $basket->totalPrice(), 'count' => $basket->totalItems()]);
    }

    // Add item to basket
    public function add(Request $request)
    {

        error_log("Adding item...");
        error_log($request->product_id);
        error_log($request->amount);
        $validated = $request->validate([
            'product_id' => 'required',
            'amount' => 'required',
        ]);
        error_log("Validated!");
        // Get or create basket
        $basketId = session('basket_id');
        if (!$basketId) {
                $basket = Basket::create(['user_id' => Auth::id()]);
                session(['basket_id' => $basket->id]);
                error_log("Created basket.");
        } else {
            $basket = Basket::findOrFail($basketId);
            error_log("Updating basket...");
        }

        // Check if product exists
        $product = Product::findOrFail($validated['product_id']);

        // Check stock availability
        if ($product->stock_level < $validated['amount']) {
            return redirect('/basket')->with('error','Not enough stock available. Only ' . $product->stock_level . ' items in stock.');
        }

        // Check if item already in basket
        $basketItem = BasketItem::where('basket_id', $basket->id)
            ->where('product_id', $validated['product_id'])
            ->first();

        if ($basketItem) {
            // Update quantity
            $newQuantity = $basketItem->amount + $validated['amount'];

            // Check if new total exceeds stock
            if ($product->stock_level < $newQuantity) {
                return redirect('/basket')->with('error','Not enough stock available. Only ' . $product->stock_level . ' items in stock.');
            }

            $basketItem->quantity = $newQuantity;
            $basketItem->save();
        } else {
            // Create new basket item
            BasketItem::create([
                'basket_id' => $basket->id,
                'product_id' => $validated['product_id'],
                'amount' => $validated['amount'],
            ]);
            return redirect('/basket')->with('success', 'Product added to basket successfully!');
        }

    }

    // Update item quantity
    public function update(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|integer|min:1',
            'product_id' => 'required|exists:products,id',
        ]);

        $basketItem = BasketItem::findOrFail($validated['product_id']);

        // Check stock availability
        if ($basketItem->product->stock_level < $validated['amount']) {
            return redirect('/basket')->with('error','Not enough stock available. Only ' . $basketItem->product->stock_level . ' items in stock.');
        }

        $basketItem->amount = $validated['amount'];
        $basketItem->save();

        return redirect('/basket')->with('message','Basket updated');
    }

    // Remove item from basket
    public function remove(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);
        $basketItem = BasketItem::findOrFail($validated['product_id']);
        $basketItem->delete();

        return redirect('/basket')->with('success', 'Product removed from basket successfully!');
    }

    // Clear entire basket
    public function clear(Request $request)
    {
        $basketId = session('basket_id');
        if ($basketId) {
            $basket = Basket::find($basketId);
            if ($basket) {
                $basket->items()->delete();
                $basket->delete();
                session()->forget('basket_id');
            }
        }

        return redirect('/basket')->with('success', 'Basket removed');
    }
}
