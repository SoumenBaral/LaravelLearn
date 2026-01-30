<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit {{ $book->title }} - BookShelf</title>
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
                <div class="flex items-center space-x-3">
                    <a href="{{ route('books.show', $book->id) }}"
                       class="inline-flex items-center px-4 py-2 bg-white/10 text-white font-semibold rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-eye mr-2"></i>
                        View Book
                    </a>
                    <a href="{{ route('books.index') }}"
                       class="inline-flex items-center px-4 py-2 bg-white/10 text-white font-semibold rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-arrow-left mr-2"></i>
                        All Books
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl mb-6 shadow-lg shadow-blue-500/30">
                <i class="fas fa-pen-to-square text-3xl text-white"></i>
            </div>
            <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-400 to-blue-400 mb-3">
                Edit Book
            </h1>
            <p class="text-gray-400">Update the details of your book</p>
        </div>

        <!-- Current Book Info Badge -->
        <div class="flex justify-center mb-8">
            <div class="bg-white/5 backdrop-blur-sm rounded-full px-6 py-3 border border-white/10 inline-flex items-center">
                <i class="fas fa-book text-purple-400 mr-3"></i>
                <span class="text-gray-400">Editing:</span>
                <span class="text-white font-semibold ml-2">{{ $book->title }}</span>
                <span class="text-gray-500 mx-2">by</span>
                <span class="text-pink-400">{{ $book->author }}</span>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-8 shadow-xl">
            <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-semibold text-blue-400 mb-2">
                        <i class="fas fa-heading mr-2"></i>Book Title
                    </label>
                    <input type="text"
                           name="title"
                           id="title"
                           value="{{ old('title', $book->title) }}"
                           placeholder="Enter book title..."
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('title') border-red-500 @enderror"
                           required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-400 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Author Field -->
                <div>
                    <label for="author" class="block text-sm font-semibold text-blue-400 mb-2">
                        <i class="fas fa-user-pen mr-2"></i>Author Name
                    </label>
                    <input type="text"
                           name="author"
                           id="author"
                           value="{{ old('author', $book->author) }}"
                           placeholder="Enter author name..."
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 @error('author') border-red-500 @enderror"
                           required>
                    @error('author')
                        <p class="mt-2 text-sm text-red-400 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Meta Info -->
                <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                    <div class="flex flex-wrap gap-4 text-sm">
                        <div class="flex items-center text-gray-400">
                            <i class="fas fa-calendar-plus text-purple-400 mr-2"></i>
                            Created: <span class="text-white ml-1">{{ $book->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="flex items-center text-gray-400">
                            <i class="fas fa-clock text-pink-400 mr-2"></i>
                            Last Updated: <span class="text-white ml-1">{{ $book->updated_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit"
                            class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold rounded-xl shadow-lg hover:from-blue-600 hover:to-cyan-600 transform hover:scale-[1.02] transition-all duration-300">
                        <i class="fas fa-save mr-2"></i>
                        Update Book
                    </button>
                    <a href="{{ route('books.show', $book->id) }}"
                       class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-white/10 text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-times mr-2"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        <!-- Danger Zone -->
        <div class="mt-8 bg-red-500/10 border border-red-500/20 rounded-xl p-6">
            <h3 class="text-red-400 font-semibold mb-3 flex items-center">
                <i class="fas fa-triangle-exclamation mr-2"></i>Danger Zone
            </h3>
            <p class="text-gray-400 text-sm mb-4">
                Once you delete a book, there is no going back. Please be certain.
            </p>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book? This action cannot be undone.')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-500/20 text-red-400 font-semibold rounded-lg border border-red-500/30 hover:bg-red-500 hover:text-white transition-all duration-300">
                    <i class="fas fa-trash-alt mr-2"></i>
                    Delete This Book
                </button>
            </form>
        </div>

        <!-- Quick Navigation -->
        <div class="mt-8 flex justify-center">
            <div class="bg-white/5 backdrop-blur-sm rounded-full px-6 py-3 border border-white/10 inline-flex items-center space-x-4">
                <a href="{{ route('books.index') }}" class="text-purple-400 hover:text-white transition-colors flex items-center">
                    <i class="fas fa-list mr-2"></i> All Books
                </a>
                <span class="text-white/20">|</span>
                <a href="{{ route('books.create') }}" class="text-pink-400 hover:text-white transition-colors flex items-center">
                    <i class="fas fa-plus mr-2"></i> Add New
                </a>
            </div>
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

    <!-- Success Message -->
    @if(session('success'))
        <div id="toast" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3 animate-bounce">
            <i class="fas fa-check-circle text-xl"></i>
            <span>{{ session('success') }}</span>
        </div>
        <script>
            setTimeout(() => document.getElementById('toast').style.display = 'none', 3000);
        </script>
    @endif
</body>
</html>
