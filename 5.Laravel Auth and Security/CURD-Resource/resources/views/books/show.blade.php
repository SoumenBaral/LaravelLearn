<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $book->title }} - BookShelf</title>
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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Book Details Card -->
        <div class="bg-white/5 backdrop-blur-sm rounded-3xl border border-white/10 overflow-hidden shadow-2xl">
            <!-- Book Header with Cover -->
            <div class="relative">
                <!-- Gradient Background -->
                <div class="h-64 bg-gradient-to-br from-purple-600 via-pink-500 to-purple-700 relative overflow-hidden">
                    <!-- Decorative Elements -->
                    <div class="absolute inset-0 opacity-20">
                        <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-3xl"></div>
                        <div class="absolute bottom-10 right-10 w-40 h-40 bg-pink-300 rounded-full blur-3xl"></div>
                    </div>
                    <!-- Book Icon -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                            <i class="fas fa-book text-7xl text-white/80"></i>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge -->
                <div class="absolute top-4 right-4">
                    <span class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <i class="fas fa-star text-yellow-300 mr-1"></i> Featured
                    </span>
                </div>
            </div>

            <!-- Book Information -->
            <div class="p-8 sm:p-10">
                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-purple-400 mb-4">
                    {{ $book->title }}
                </h1>

                <!-- Author -->
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-500 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="text-gray-400 text-sm">Written by</p>
                        <p class="text-xl font-semibold text-white">{{ $book->author }}</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent my-8"></div>

                <!-- Book Meta Info -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                        <p class="text-gray-400 text-sm mb-1">
                            <i class="fas fa-calendar-plus mr-2 text-purple-400"></i>Added
                        </p>
                        <p class="text-white font-semibold">{{ $book->created_at->format('M d, Y') }}</p>
                    </div>
                    <div class="bg-white/5 rounded-xl p-4 border border-white/10">
                        <p class="text-gray-400 text-sm mb-1">
                            <i class="fas fa-clock mr-2 text-pink-400"></i>Updated
                        </p>
                        <p class="text-white font-semibold">{{ $book->updated_at->format('M d, Y') }}</p>
                    </div>
                    <div class="bg-white/5 rounded-xl p-4 border border-white/10 col-span-2 sm:col-span-1">
                        <p class="text-gray-400 text-sm mb-1">
                            <i class="fas fa-hashtag mr-2 text-blue-400"></i>Book ID
                        </p>
                        <p class="text-white font-semibold">#{{ $book->id }}</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('books.edit', $book->id) }}"
                       class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold rounded-xl shadow-lg hover:from-blue-600 hover:to-cyan-600 transform hover:scale-[1.02] transition-all duration-300">
                        <i class="fas fa-edit mr-2"></i>
                        Edit Book
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure you want to delete this book? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-red-500 to-pink-500 text-white font-bold rounded-xl shadow-lg hover:from-red-600 hover:to-pink-600 transform hover:scale-[1.02] transition-all duration-300">
                            <i class="fas fa-trash-alt mr-2"></i>
                            Delete Book
                        </button>
                    </form>
                </div>
            </div>
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
