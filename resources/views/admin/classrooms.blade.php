<x-adminapp>
    <div class="flex">
        <x-adminSidebar></x-adminSidebar>
        <div class="bg-white min-h-screen  p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">The list of Classrooms in this school</h1>
            <table class="w-full mb-2">

                <tr class="border text-xl">
                    <th class="border py-3">id</th>
                    <th class="border py-3">name</th>
                    <th class="border py-3">year</th>
                    <th class="border py-3">grade</th>
                    <th class="border py-3">teacher</th>
                </tr>
                @foreach ($classrooms as $classroom)
                    <tr class="border group relative">
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $classroom->id }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $classroom->name }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $classroom->year }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $classroom->grade->name }}</td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            {{ $classroom->teacher->name }} <br>
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
            <div>{{ $classrooms }}</div>
        </div>

    </div>
</x-adminapp>
