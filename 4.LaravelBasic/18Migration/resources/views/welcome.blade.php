<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-900 text-white font-sans">

<div class="container mx-auto px-4 py-8">

    <div class="mb-4 text-gray-400">
        Showing {{ count($Posts) }} Posts
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($Posts as $post)
            <div class="group relative rounded-2xl p-[1px]
                        bg-gradient-to-br from-indigo-500/40 via-sky-500/40 to-purple-500/40
                        hover:from-indigo-500 hover:to-purple-600 transition-all duration-500">

                <!-- Glow -->
                <div class="absolute -inset-1 rounded-2xl
                            bg-gradient-to-r from-indigo-500 to-purple-600
                            blur-xl opacity-0 group-hover:opacity-40 transition duration-500">
                </div>

                <!-- Card -->
                <div class="relative h-full rounded-2xl bg-[#0B1220]/90
                            backdrop-blur-xl border border-white/10
                            p-6 flex flex-col gap-4">

                    <!-- Header -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-xl
                                    bg-gradient-to-br from-indigo-500 to-purple-600
                                    shadow-lg group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2" />
                            </svg>
                        </div>

                        <h3 class="text-lg font-semibold group-hover:text-indigo-400 transition">
                            {{ $post->title }}
                        </h3>
                    </div>

                    <!-- Body -->
                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-3">
                        {{ $post->body }}
                    </p>

                    <p class="text-xs text-gray-400">
                        Category: {{ $post->category->name }}
                    </p>

                    <!-- Footer -->
                    <div class="mt-auto flex items-center justify-between pt-4 border-t border-white/10">

                        <span class="text-xs text-gray-400">
                            {{ $post->created_at->diffForHumans() }}
                        </span>

                        <a href="#"
                           class="flex items-center gap-1 text-indigo-400 text-sm
                                  hover:gap-2 transition-all">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 5l7 7-7 7" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

</body>
</html>
