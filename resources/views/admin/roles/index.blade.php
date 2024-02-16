<x-adminapp>
    <div class="flex justify-between px-5 -mb-3 mt-5">
        <div></div>
        <a href="" class="py-2 px-5 rounded-md bg-green-500 text-white">Create</a>
    </div>
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex my-5 justify-between gap-x-6 py-5 px-5 bg-white mx-5 rounded-md">
            <div class="text-center px-7">
                Role
            </div>
            <div class="text-center px-7">
                Action
            </div>
        </li>
        @foreach ($roles as $role)
            <li class="flex my-5 justify-between gap-x-6 py-5 px-5 bg-white mx-5 rounded-md">
                <div>
                    <div class="my-auto text-white font-semibold bg-blue-700 py-2 px-7 rounded-md">
                        {{ $role->name }}
                    </div>
                </div>
                <div>
                    <a href="" class="py-2 px-5 rounded-md bg-green-500 text-gray-100 mr-3">Edit</a>
                    <a href="" class="py-2 px-5 rounded-md bg-red-500 text-gray-100 mr-3">Delete</a>
                </div>
            </li>
        @endforeach


    </ul>


</x-adminapp>
