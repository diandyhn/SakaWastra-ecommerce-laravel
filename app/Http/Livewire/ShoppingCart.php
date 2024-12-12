<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ShoppingCart extends Component
{
    public $items = [];

    protected $listeners = ['addToCart'];

    public function mount()
    {
        // Ambil item dari tabel cart_items untuk user yang sedang login
        if (Auth::check()) {
            $this->items = CartItem::with('product')
                ->where('user_id', Auth::id())
                ->get()
                ->toArray();
        }
    }

    public function render()
    {
        return view('livewire.shopping-cart', ['items' => $this->items])->layout('layouts.app');
    }

    public function addToCart($productId, $quantity = 1)
    {
        // Cek apakah produk ada di database
        $product = Product::find($productId);

        if (!$product) {
            $this->addError('product', 'Product not found');
            return;
        }

        // Validasi kuantitas
        if (!is_int($quantity) || $quantity < 1) {
            $this->addError('quantity', 'Quantity must be a positive integer');
            return;
        }

        // Cek apakah user sudah login
        if (!Auth::check()) {
            $this->addError('auth', 'You need to be logged in to add items to the cart.');
            return;
        }

        // Cari item di database
        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Jika item sudah ada di keranjang, update kuantitasnya
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Jika item belum ada, buat baru
            CartItem::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'price' => $product->price, // Gunakan harga dari database
                'quantity' => $quantity,
            ]);
        }

        // Refresh items
        $this->mount();

        // Emit event untuk memperbarui keranjang jika diperlukan
        $this->emit('cartUpdated');
        session()->flash('message', 'Product added to cart successfully!');
    }


    public function updateQuantity($productId, $quantity)
    {
        // Validasi kuantitas
        if ($quantity < 1) {
            $this->addError('quantity', 'Quantity must be a positive integer');
            return;
        }

        // Update quantity di database
        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }

        // Refresh items
        $this->mount();
        $this->emit('cartUpdated');
    }

    public function removeItem($productId)
    {
        // Hapus item dari keranjang di database
        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        // Refresh items
        $this->mount();
    }

    public function clearCart()
    {
        // Hapus semua item dari keranjang di database
        CartItem::where('user_id', Auth::id())->delete();

        // Kosongkan items di komponen Livewire
        $this->items = [];
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return round($total, 2);
    }
}

