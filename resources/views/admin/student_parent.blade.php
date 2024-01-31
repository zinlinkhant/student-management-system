<x-adminapp>
    <div class="flex">
        <x-adminSidebar></x-adminSidebar>
        <div class="bg-white h-fit p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">The list of students in this school</h1>
            <table class="w-full mb-2">

                <tr class="border">
                    <th class="border">id</th>
                    <th class="border">name</th>
                    <th class="border">email</th>
                    <th class="border">dob</th>
                    <th class="border">phone</th>
                    <th class="border">parent</th>
                    <th class="border">action</th>
                </tr>
                @foreach ($students as $student)
                    <tr class="border">
                        <td class="text-center border py-2">{{ $student->id }}</td>
                        <td class="text-center border py-2">{{ $student->name }}</td>
                        <td class="text-center border py-2">{{ $student->email }}</td>
                        <td class="text-center border py-2">{{ $student->dob }}</td>
                        <td class="text-center border py-2">{{ $student->phone }}</td>
                        <td class="text-center border py-2">{{ $student->parent->name }}</td>
                        <td class="text-center border py-2"><a href="#"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2">Update</a><a href="#"
                                class="py-1 px-2 bg-red-600 rounded-md text-white">Delete</a></td>
                    </tr>
                @endforeach
            </table>
            <div>{{ $students }}</div>
        </div>

    </div>
</x-adminapp>
