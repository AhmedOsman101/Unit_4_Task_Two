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
                </tr>
                @foreach ($users as $user)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="{{$user->name}}" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="{{$user->email}}" class="bg-transparent"></td>
                    <td class="p-3 px-5">
                        <select name="type" class="bg-transparent">
                            <option value="individual" @if($user->type == 'individual') selected @endif>Individual
                            </option>
                            <option value="team" @if($user->type == 'team') selected @endif>Team</option>
                        </select>
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
