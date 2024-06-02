<x-app-layout>
    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-6">Product Listing</h1>
        <p class="text-lg mb-8">Browse our wide range of products and find the best deals. Click 'Buy Now' to purchase
            your favorite items.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="border rounded-lg shadow-lg p-4 flex flex-col items-center">
                    <img src="{{ asset('storage/images/' . $product->image_url) }}" alt="{{ $product->title }}"
                        class="w-full h-48 object-cover mb-4 rounded">
                    <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                    <p class="text-lg font-bold mb-4">${{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('cart.add', $product->id) }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Add to Cart</a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
