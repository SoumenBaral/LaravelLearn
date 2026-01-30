<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/10 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-book-open text-2xl text-purple-400"></i>
                    <span class="text-xl font-bold text-white">BookShelf</span>
                </div>
                <a href="{{ route('books.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold rounded-lg shadow-lg hover:from-purple-600 hover:to-pink-600 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-plus mr-2"></i>
                    Add Book
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-purple-400 mb-4">
                My Book Collection
            </h1>
            <p class="text-gray-400 text-lg">Discover and manage your favorite reads</p>
            <div class="mt-4 flex justify-center">
                <div class="h-1 w-24 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
            </div>
        </div>

        @if($books->count() > 0)
            <!-- Stats Bar -->
            <div class="flex justify-center mb-8">
                <div class="bg-white/5 backdrop-blur-sm rounded-full px-6 py-3 border border-white/10">
                    <span class="text-purple-400 font-semibold">
                        <i class="fas fa-layer-group mr-2"></i>
                        {{ $books->count() }} {{ Str::plural('Book', $books->count()) }} in Collection
                    </span>
                </div>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($books as $book)
                    <div class="group bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 overflow-hidden hover:bg-white/10 hover:border-purple-500/50 transform hover:-translate-y-2 transition-all duration-300 shadow-xl hover:shadow-purple-500/20">
                        <!-- Book Cover Placeholder -->
                        <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <i class="fas fa-book text-6xl text-white/30 group-hover:scale-110 transition-transform duration-300"></i>
                            <div class="absolute top-3 right-3">
                                <span class="bg-white/20 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full">
                                    <i class="fas fa-bookmark mr-1"></i> Novel
                                </span>
                            </div>
                        </div>

                        <!-- Book Info -->
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-white mb-2 truncate group-hover:text-purple-400 transition-colors">
                                {{ $book->title }}
                            </h3>
                            <p class="text-gray-400 flex items-center mb-4">
                                <i class="fas fa-user-pen mr-2 text-pink-400"></i>
                                {{ $book->author }}
                            </p>

                            <!-- Action Buttons -->
                            <div class="flex space-x-2 pt-3 border-t border-white/10">
                                <a href="{{ route('books.show', $book->id) }}"
                                   class="flex-1 text-center py-2 px-3 bg-purple-500/20 text-purple-400 rounded-lg hover:bg-purple-500 hover:text-white transition-all duration-300">
                                    <i class="fas fa-eye mr-1"></i> View
                                </a>
                                <a href="{{ route('books.edit', $book->id) }}"
                                   class="flex-1 text-center py-2 px-3 bg-blue-500/20 text-blue-400 rounded-lg hover:bg-blue-500 hover:text-white transition-all duration-300">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure you want to delete this book?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full py-2 px-3 bg-red-500/20 text-red-400 rounded-lg hover:bg-red-500 hover:text-white transition-all duration-300">
                                        <i class="fas fa-trash mr-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="flex flex-col items-center justify-center py-20">
                <div class="bg-white/5 backdrop-blur-sm rounded-full p-8 mb-6 border border-white/10">
                    <i class="fas fa-books text-6xl text-purple-400"></i>
                </div>
                <h2 class="text-2xl font-bold text-white mb-3">No Books Yet</h2>
                <p class="text-gray-400 mb-8 text-center max-w-md">
                    Your bookshelf is empty. Start building your collection by adding your first book!
                </p>
                <a href="{{ route('books.create') }}"
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-xl shadow-lg hover:from-purple-600 hover:to-pink-600 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-plus-circle mr-3 text-xl"></i>
                    Add Your First Book
                </a>
            </div>
        @endif
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

    <!-- Success/Error Messages -->
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
