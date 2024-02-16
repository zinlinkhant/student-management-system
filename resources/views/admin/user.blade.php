<x-adminapp>
    <div class="flex">
        <div class="bg-white  p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">There are {{ $ucount }} users in this school</h1>
            <table class="w-full mb-2">

                <tr class="border text-xl">
                    <th class="border py-3">id</th>
                    <th class="border py-3">name</th>
                    <th class="border py-3">email</th>
                    <th class="border py-3">role</th>
                </tr>
                @foreach ($users as $user)
                    <tr class="border group relative">
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $user->id }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $user->name }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $user->email }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $user->roles->pluck('name') }}</td>
                        <td class="text-center   transition-all absolute bottom-3 right-5">
                            <a href="{{ route('admin.updateUser', $user->id) }}"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all">Update</a><a
                                href="#"
                                class="py-1 px-2 bg-red-600 rounded-md text-white  group-hover:opacity-100 opacity-0 transition-all">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>{{ $users }}</div>
        </div>

    </div>
</x-adminapp>
