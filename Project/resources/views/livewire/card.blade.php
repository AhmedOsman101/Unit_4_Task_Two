<!-- component -->
<div class="max-w-2xl mx-auto mt-5">

    <div class="bg-gray-800 shadow-md border border-gray-700 rounded-lg max-w-sm">
        <a href="{{'/events/'.$event->id}}">
            <img class="rounded-t-lg" src="{{asset('img/event.jpg')}}" alt="event">
        </a>
        <div class="p-5">
            <a href="{{'/events/'.$event->id}}">
                <h5 class="text-white font-bold text-2xl tracking-tight mb-2">{{$event->name}}
                </h5>
            </a>
            <p class="font-normal text-gray-400 mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas
                quidem dolores praesentium, suscipit iure modi repellat saepe omnis rerum eveniet blanditiis molestias
                explicabo consequatur laboriosam aliquid quibusdam. Cum, dolor dolorem.</p>
            <a href="{{'/events/'.$event->id}}"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                Read more...
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
