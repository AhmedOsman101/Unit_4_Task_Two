<nav class="bg-white dark:bg-gray-800 shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Updated flex alignment -->
            <h1
                class="font-bold text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white cursor-pointer">
                <a style="all: inherit" href="{{url('/home')}}">{{env('APP_NAME')}}</a>
            </h1>
            @if (Route::has('login'))
            @auth
            <div>
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white mr-4">Home</a>
                @livewire('user-drop-down')
            </div>
            @else
            <div>
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            </div>
            @endauth
            @endif
        </div>
    </div>
</nav>
