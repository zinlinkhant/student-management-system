<x-adminapp>
    <div class="flex">
        <div class="bg-white min-h-screen  p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">The list of Course and Grades in this school</h1>
            <table class="w-full mb-2">

                <tr class="border text-xl">
                    <th class="border py-3">Name</th>
                    <th class="border py-3">Description</th>
                    <th class="border py-3">Course</th>
                </tr>
                @foreach ($grades as $grade)
                    <tr class="border group relative">
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $grade->name }}
                        </td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $grade->description }}
                        </td>

                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            @foreach ($grade->courses as $course)
                                {{ $course->name }}<br>
                            @endforeach
                        </td>
                        <td class="text-center transition-all absolute bottom-3 right-5">
                            <a href="#"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all duration-300">Update</a><a
                                href="#"
                                class="py-1 px-2 bg-red-600 rounded-md text-white  group-hover:opacity-100 opacity-0 transition-all duration-300">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="mb-10">{{ $grades }}</div>
            <table class="w-full mb-2">

                <tr class="border text-xl">
                    <th class="border py-3">Id</th>
                    <th class="border py-3">Course Name</th>
                    <th class="border py-3">Description</th>
                    <th class="border py-3">Grade</th>
                </tr>
                @foreach ($courses as $course)
                    <tr class="border group relative">
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $course->id }}
                        </td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $course->name }}
                        </td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $course->description }}
                        </td>
                        <td class="text-center border  transition-all group group-hover:pb-10 py-2 duration-300">
                            {{ $course->grade->name }}
                        </td>
                        <td class="text-center transition-all absolute bottom-3 right-5">
                            <a href="#"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all duration-300">Update</a><a
                                href="#"
                                class="py-1 px-2 bg-red-600 rounded-md text-white  group-hover:opacity-100 opacity-0 transition-all duration-300">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>{{ $courses }}</div>
        </div>

    </div>
</x-adminapp>
