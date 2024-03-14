<!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Type</th>
                    <th class="text-left p-3 px-5">Actions</th>
                </tr>
                @foreach ($users as $user)
                <tr class="border-b hover:bg-gray-200 transition-all ease-in-out bg-gray-100">
                    <td class="p-3 px-5">
                        <p>{{$user->name}}</p>
                    </td>
                    <td class="p-3 px-5">
                        <p>{{$user->email}}</p>
                    </td>
                    <td class="p-3 px-5">
                        <p>{{$user->type ?? $user->role}}</p>
                    </td>
                    <td class="p-3 px-5 flex justify-end">
                        <form action="/users/{{$user->id}}" method="POST" class="inline">
                            @method('PUT')
                            @csrf
                            <button type="submit"
                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                        </form>
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
</div>
