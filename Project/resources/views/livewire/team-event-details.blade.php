<!-- component -->
<section class="text-white body-font overflow-hidden bg-gray-900">
    @php
    $url = url()->current();
    $parts = explode('/', $url);
    $eventId = end($parts);
    @endphp
    <div class="container px-5 py-16 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-800"
                src="{{ asset('img/event.jpg') }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h1 class="text-white text-3xl title-font font-medium mb-1">{{$event->name}}</h1>

                <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor asperiores
                    recusandae animi maxime, eos voluptate nesciunt. Fugit pariatur sint maxime unde accusamus,
                    doloribus iste necessitatibus facilis. Aliquid incidunt ex esse?</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-800 mb-5">
                    <div class="flex items-center">
                        <span class="mr-3">Joined As</span>
                        <div class="relative">
                            <select id="join-select"
                                class="rounded border appearance-none bg-gray-800 border-gray-800 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10 disabled:opacity-50"
                                disabled>
                                <option value="team" selected>Team</option>
                                <option value="individual">Individual</option>
                            </select>
                            <span
                                class="absolute right-0 top-0 h-full w-10 text-center text-gray-400 pointer-events-none flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="border-b-2 border-gray-800" id="TeamsForm">

                        <form action="/participants" method="POST" id="teamForm">
                            @csrf
                            <!-- Member 1 -->
                            <input type="email" name="Member_1" placeholder="Member 1"
                                class="dark:bg-gray-800 dark:text-gray-300 rounded-md px-4 py-2 mx-2 mb-4" />

                            <!-- Member 2 -->
                            <input type="email" name="Member_2" placeholder="Member 2"
                                class="dark:bg-gray-800 dark:text-gray-300 rounded-md px-4 py-2 mb-4" />

                            <!-- Member 3 -->
                            <input type="email" name="Member_3" placeholder="Member 3"
                                class="dark:bg-gray-800 dark:text-gray-300 rounded-md px-4 py-2 mx-2 mb-4" />

                            <!-- Member 4 -->
                            <input type="email" name="Member_4" placeholder="Member 4"
                                class="dark:bg-gray-800 dark:text-gray-300 rounded-md px-4 py-2 mb-4" />
                        </form>
                    </div>
                    <div id="team-selection" class="flex">
                        <button
                            class="flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">
                            Join Now as Team
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
