<div class="border-b-2 border-gray-800" id="TeamsForm">
    @php
    $url = url()->current();
    $parts = explode('/', $url);
    $eventId = end($parts);
    @endphp
    <form action="/participants" wire:ignore method="POST" id="teamForm">
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
