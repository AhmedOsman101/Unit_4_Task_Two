<!-- component -->
<div class="text-gray-200 bg-gray-900 w-full min-h-screen pt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Users Dashboard
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-gray-800 shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b border-gray-700">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Type</th>
                    <th class="text-center p-3 px-5">Actions</th>
                </tr>
                @foreach ($users as $user)
                <tr class="border-b border-gray-700 hover:bg-gray-700 transition-all ease-in-out">
                    <form action="/users/{{$user->id}}" id="updateForm{{$user->id}}" method="POST" class="inline">
                        @method('PUT')
                        @csrf
                        <td class="p-3 px-5">
                            <input type="text" name="name" value="{{$user->name}}" class="bg-transparent text-gray-300">
                        </td>
                        <td class="p-3 px-5">
                            <input type="text" name="email" value="{{$user->email}}"
                                class="bg-transparent text-gray-300">
                        </td>
                    </form>
                    <td class="p-3 px-5">
                        <p class="text-gray-300">{{$user->type ?? $user->role}}</p>
                    </td>
                    <td class="p-3 px-5 flex justify-center">
                        <button type="button" id="submitButton{{$user->id}}" data-id="{{$user->id}}"
                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                        <form action="/users/{{$user->id}}" method="POST" class="inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var submitButtons = document.querySelectorAll("[id^='submitButton']");
            // Loop through each submit button
            submitButtons.forEach(function (button) {
                var formId = button.getAttribute("data-id");
                var form = document.getElementById("updateForm" + formId);
                // Add event listener to the button
                button.addEventListener("click", function () {
                    form.submit();
                });
            });
        });
    </script>
</div>
