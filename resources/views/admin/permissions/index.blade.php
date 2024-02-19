<x-adminapp>
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex my-5 justify-between bg-white mx-5 rounded-md">
            <div class="text-center w-full border py-4">
                Permissions
            </div>
            <div class="text-center w-full border py-4">
                Role
            </div>
            <div class="text-center w-full border py-4">
                Action
            </div>
        </li>
        <li>
            <a href="{{ route('admin.permissions.create') }}"
                class="py-2 px-5 rounded-md bg-green-500 text-white mr-3 mx-5">Create permission</a>
        </li>
        @foreach ($permissions as $per)
            <li class="flex my-5 justify-between gap-x-6 py-5 px-5 bg-white mx-5 rounded-md items-center">
                <div>
                    <div class="my-auto text-white font-semibold bg-blue-700 py-2 px-7 rounded-md">
                        {{ $per->name }}
                    </div>
                </div>
                <div>
                    @foreach ($per->roles as $r)
                        {{ $r->name }}
                    @endforeach
                </div>
                <div>
                    <a href="{{ route('admin.permissions.edit', $per->id) }}"
                        class="py-2 px-5 rounded-md bg-green-500 text-gray-100 mr-3">Edit</a>
                    <a href="" class="py-2 px-5 rounded-md bg-red-500 text-gray-100 mr-3">Delete</a>
                </div>
            </li>
        @endforeach


    </ul>


</x-adminapp>
