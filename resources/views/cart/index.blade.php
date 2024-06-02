<x-app-layout>
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>
        @if (count($cartItems) > 0)
            @php $total = 0; @endphp
            <div class="bg-white shadow-md rounded-lg px-6 py-3">
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="py-2">Product Name</th>
                            <th class="py-2">Quantity</th>
                            <th class="py-2">Price</th>
                            <th class="py-2">Total</th>
                            <th class="py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            @php
                                $productTotal = $item['quantity'] * $item->product['price'];
                                $total += $productTotal;
                            @endphp
                            <tr class="border-t">
                                <td class="py-4">{{ $item->product->name }}</td>
                                <td class="py-4 flex items-center">
                                    <form action="{{ route('cart.update', $item['id']) }}" method="POST"
                                        class="flex items-center">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}"
                                            class="bg-gray-200 text-gray-700 px-2 py-1 rounded hover:bg-gray-300 transition">-</button>
                                        <span class="mx-2">{{ $item['quantity'] }}</span>
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}"
                                            class="bg-gray-200 text-gray-700 px-2 py-1 rounded hover:bg-gray-300 transition">+</button>
                                    </form>
                                </td>
                                <td class="py-4">${{ number_format($item->product['price'], 2) }}</td>
                                <td class="py-4">${{ number_format($productTotal, 2) }}</td>
                                <td class="py-4">
                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3 text-right">
                    <h2 class="text-xl font-bold">Total: ${{ number_format($total, 2) }}</h2>
                </div>

                <!-- Payment Gateway Selection and Checkout Button -->
                <div class="flex justify-end">
                    <div class="mt-6 w-full md:w-1/4 align-right">
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="payment_gateway" class="block text-lg font-medium text-gray-700">Select Payment Gateway:</label>
                                <select id="payment_gateway" name="payment_gateway" class="mt-1 block w-full p-2 border rounded-md">
                                    <option value="gateway1">Payment Gateway 1</option>
                                    <option value="gateway2">Payment Gateway 2</option>
                                </select>
                            </div>
                            <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600 transition">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <p class="text-lg">Your cart is empty.</p>
        @endif
    </div>
</x-app-layout>
