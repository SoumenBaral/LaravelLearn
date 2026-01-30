<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/10 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('books.index') }}" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                    <i class="fas fa-book-open text-2xl text-purple-400"></i>
                    <span class="text-xl font-bold text-white">BookShelf</span>
                </a>
                <a href="{{ route('books.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-white/10 text-white font-semibold rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Books
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl mb-6 shadow-lg shadow-purple-500/30">
                <i class="fas fa-plus text-3xl text-white"></i>
            </div>
            <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-purple-400 mb-3">
                Add New Book
            </h1>
            <p class="text-gray-400">Add a new book to your collection</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-8 shadow-xl">
            <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-semibold text-purple-400 mb-2">
                        <i class="fas fa-heading mr-2"></i>Book Title
                    </label>
                    <input type="text"
                           name="title"
                           id="title"
                           value="{{ old('title') }}"
                           placeholder="Enter book title..."
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 @error('title') border-red-500 @enderror"
                           required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-400 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Author Field -->
                <div>
                    <label for="author" class="block text-sm font-semibold text-purple-400 mb-2">
                        <i class="fas fa-user-pen mr-2"></i>Author Name
                    </label>
                    <input type="text"
                           name="author"
                           id="author"
                           value="{{ old('author') }}"
                           placeholder="Enter author name..."
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 @error('author') border-red-500 @enderror"
                           required>
                    @error('author')
                        <p class="mt-2 text-sm text-red-400 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Submit Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit"
                            class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-xl shadow-lg hover:from-purple-600 hover:to-pink-600 transform hover:scale-[1.02] transition-all duration-300">
                        <i class="fas fa-save mr-2"></i>
                        Save Book
                    </button>
                    <a href="{{ route('books.index') }}"
                       class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-white/10 text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-times mr-2"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        <!-- Tips Section -->
        <div class="mt-8 bg-purple-500/10 border border-purple-500/20 rounded-xl p-6">
            <h3 class="text-purple-400 font-semibold mb-3 flex items-center">
                <i class="fas fa-lightbulb mr-2"></i>Tips
            </h3>
            <ul class="text-gray-400 text-sm space-y-2">
                <li class="flex items-start">
                    <i class="fas fa-check text-green-400 mr-2 mt-1"></i>
                    Use the full title of the book for better organization
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-400 mr-2 mt-1"></i>
                    Include the author's full name (First Last)
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-auto py-8 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-500">
                <i class="fas fa-heart text-pink-500 mx-1"></i>
                Built with Laravel & Tailwind CSS
            </p>
        </div>
    </footer>
</body>
</html>
