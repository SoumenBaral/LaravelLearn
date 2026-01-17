<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Validation Demo</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
   <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900
            flex items-center justify-center px-4 py-10">

    <form method="POST" action="{{ route('product.store') }}"
          class="w-full max-w-xl bg-white/95 backdrop-blur
                 rounded-2xl shadow-2xl p-8 space-y-6">

        @csrf

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800">
                🛒 Create New Product
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Add product details carefully
            </p>
        </div>

        <!-- Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Product Name
            </label>
            <input value="{{ old('name') }}" type="text" name="name"
                placeholder="Enter product name"
                class="w-full rounded-lg border border-gray-300
                       px-4 py-2.5 text-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500 transition" />
        </div>
        @error('name')
        
            <div class="text-red-800">
                {{ $message }}
            </div>
        @enderror
        <!-- Description -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Description
            </label>
            <textarea name="description" rows="3"
                placeholder="Write product description..."
                class="w-full rounded-lg border border-gray-300
                       px-4 py-2.5 text-sm resize-none
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500 transition"></textarea>
        </div>
        @error('description')
        
            <div class="text-red-800">
                {{ $message }}
            </div>
        @enderror
        <!-- Price & Quantity -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Price -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Price ($)
                </label>
                <input value="{{ old('price') }}" type="number" step="0.01" name="price"
                    placeholder="0.00"
                    class="w-full rounded-lg border border-gray-300
                           px-4 py-2.5 text-sm
                           focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500 transition" />
            
                            @error('price')
                                <div class="text-red-800">
                                    {{ $message }}
                                </div>
                            @enderror
            </div>
           
            <!-- Quantity -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Quantity
                </label>
                <input  value="{{ old('quantity') }}" type="number" name="quantity"
                    placeholder="0"
                    class="w-full rounded-lg border border-gray-300
                           px-4 py-2.5 text-sm
                           focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500 transition" />
            </div>
        </div>
        @error('quantity')
                <div class="text-red-800">
                    {{ $message }}
                </div>
            @enderror
        <!-- Stock Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                Stock Status
            </label>

            <div class="flex gap-4">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="stock" value="1" class="accent-indigo-600">
                    <span class="text-sm text-gray-700">In Stock</span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input  type="radio" name="stock" value="0" class="accent-red-600">
                    <span class="text-sm text-gray-700">Out of Stock</span>
                </label>
            </div>
        </div>
            @error('stock')
                <div class="text-red-800">
                    {{ $message }}
                </div>
            @enderror
        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-indigo-600 hover:bg-indigo-700
                   text-white font-semibold py-3 rounded-lg
                   transition-all duration-200
                   shadow-lg hover:shadow-indigo-500/40
                   active:scale-[0.98]">
            🚀 Save Product
        </button>

    </form>
</div>

</body>
</html>