<header class="bg-white shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">
                        YourLogo
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="/" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Home
                    </a>
                    <a href="/moodboard" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Mood Board
                    </a>
                    <a href="/roadmap" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Road Map
                    </a>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <?php if (session()->get('user')): ?>
                    <div class="ml-3 relative flex items-center space-x-4">
                        <span class="text-sm text-gray-700">
                            Hello, <?= esc(session()->get('user')['display_name']) ?>
                        </span>
                        <form action="/logout" method="post" class="inline">
                            <button type="submit" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                                Logout
                            </button>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="flex items-center space-x-4">
                        <a href="/login" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                            Login
                        </a>
                        <a href="/signup" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Sign Up
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>