<div class="shopping-cart">
    <h2>Shopping Cart</h2>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(count($items) > 0)
        <div class="cart-table">
            <div class="cart-header">
                <span>Product</span>
                <span>Price</span>
                <span>Quantity</span>
                <span>Total</span>
                <span>Action</span>
            </div>
            @foreach($items as $id => $item)
                <div class="cart-item">
                    <span>{{ $item['name'] }}</span>
                    <span>${{ number_format($item['price'], 2) }}</span>
                    <span>
                        <input type="number" wire:model.lazy="items.{{ $id }}.quantity" wire:change="updateQuantity('{{ $id }}', $event.target.value)" min="1">
                    </span>
                    <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    <span>
                        <button wire:click="removeItem('{{ $id }}')">Remove</button>
                    </span>
                </div>
            @endforeach
        </div>
        <div class="cart-summary">
            <strong>Total: ${{ number_format($this->calculateTotal(), 2) }}</strong>
        </div>
        <div class="cart-actions">
            <button wire:click="clearCart">Clear Cart</button>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif


    <style>
        .shopping-cart {
            font-family: Arial, sans-serif;
        }
        .cart-table {
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .cart-header, .cart-item {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            padding: 10px;
            background: #f8f8f8;
        }
        .cart-item {
            background: #fff;
            border-top: 1px solid #ddd;
            transition: transform 0.3s;
        }
        .cart-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .cart-header {
            font-weight: bold;
        }
        .cart-summary {
            padding: 10px;
            text-align: right;
        }
        .cart-actions {
            padding: 10px;
            text-align: right;
        }
        .cart-actions button {
            background: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .cart-actions button:hover {
            background: #d32f2f;
        }
    </style>
</div>


