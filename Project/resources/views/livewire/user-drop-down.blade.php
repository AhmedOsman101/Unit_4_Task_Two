<div class="relative inline-block text-left dropdown">
    <span class="rounded-md shadow-sm"><button
            class="inline-flex justify-center w-full px-4 py-2 leading-5 transition duration-150 ease-in-out rounded-md focus:outline-none focus:border-blue-300 focus:shadow-outline-blue font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
            type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
            <span>{{ $user->name }}</span>
            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg></button></span>
    <div
        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
            <div class="px-4 py-3 hover:bg-slate-300 transition-all ease-in-out">
                <p class="text-sm leading-5">Signed in as
                    <span class="capitalize font-semibold text-green-700">{{$user->role}}</span>
                </p>
                <p class="text-sm font-semibold leading-5 text-blue-700 truncate">
                    {{ $user->email }}
                </p>
            </div>

            <div class="py-1 hover:bg-slate-300 transition-all ease-in-out">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" tabindex="3"
                        class="text-red-900 font-semibold flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                        role="menuitem">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
