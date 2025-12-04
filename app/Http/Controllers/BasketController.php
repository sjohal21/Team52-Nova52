<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    // View basket
    public function index()
    {
        $basketId = session('basket_id');

        if (!$basketId) {
            return view('basket',['items' => [], 'total' => 0, 'count' => 0]);
        }

        $basket = Basket::with('items.product')->find($basketId);

        if (!$basket) {
            return view('basket',['items' => [], 'total' => 0, 'count' => 0]);
        }

        return view('basket',['items' => $basket->items, 'total' => $basket->totalPrice(), 'count' => $basket->totalItems()]);
    }

    // Add item to basket
    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get or create basket
        $basketId = session('basket_id');

        if (!$basketId) {
            $basket = Basket::create([]);
            session(['basket_id' => $basket->id]);
        } else {
            $basket = Basket::findOrFail($basketId);
        }

        // Check if product exists
        $product = Product::findOrFail($validated['product_id']);

        // Check stock availability
        if ($product->stock_level < $validated['quantity']) {
            return redirect('/basket')->with('error','Not enough stock available. Only ' . $product->stock_level . ' items in stock.');
        }

        // Check if item already in basket
        $basketItem = BasketItem::where('basket_id', $basket->id)
            ->where('product_id', $validated['product_id'])
            ->first();

        if ($basketItem) {
            // Update quantity
            $newQuantity = $basketItem->quantity + $validated['quantity'];

            // Check if new total exceeds stock
            if ($product->stock_level < $newQuantity) {
                return redirect('basket')->with('error','Not enough stock available. Only ' . $product->stock_level . ' items in stock.');
            }

            $basketItem->quantity = $newQuantity;
            $basketItem->save();
        } else {
            // Create new basket item
            BasketItem::create([
                'basket_id' => $basket->id,
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'],
            ]);
        }

        return redirect('/basket')->with('success', 'Product added to basket successfully!');
    }

    // Update item quantity
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $basketItem = BasketItem::findOrFail($id);

        // Check stock availability
        if ($basketItem->product->stock_level < $validated['quantity']) {
            return redirect('/basket')->with('error','Not enough stock available. Only ' . $basketItem->product->stock_level . ' items in stock.');
        }

        $basketItem->quantity = $validated['quantity'];
        $basketItem->save();

        return redirect('basket')->with('message','Basket updated');
    }

    // Remove item from basket
    public function remove($id)
    {
        $basketItem = BasketItem::findOrFail($id);
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
