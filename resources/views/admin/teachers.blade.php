<x-adminapp>
    <div class="flex">
        <x-adminSidebar></x-adminSidebar>
        <div class="bg-white h-fit p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">The list of students in this school</h1>
            <table class="w-full mb-2">

                <tr class="border text-xl">
                    <th class="border py-3">id</th>
                    <th class="border py-3">name</th>
                    <th class="border py-3">email</th>
                    <th class="border py-3">dob</th>
                    <th class="border py-3">phone</th>
                    <th class="border py-3">classroom</th>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr class="border group relative">
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $teacher->id }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $teacher->name }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $teacher->email }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $teacher->dob }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $teacher->phone }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            @foreach ($teacher->classrooms as $classroom)
                                {{ $classroom->name }} <br>
                            @endforeach
                        </td>
                        <td class="text-center   transition-all absolute bottom-3 right-5">
                            <a href="#"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all">Update</a><a
                                href="#"
                                class="py-1 px-2 bg-red-600 rounded-md text-white  group-hover:opacity-100 opacity-0 transition-all">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>{{ $teachers }}</div>
        </div>

    </div>
</x-adminapp>
