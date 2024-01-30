<x-adminapp>
    <div class="flex">
        <x-adminSidebar></x-adminSidebar>
        <div class="bg-white h-fit p-5 rounded-lg m-5 w-full">
            <h1 class="font-semibold text-2xl">The list of students in this school</h1>
            <table>

                <tr class="">
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>dob</th>
                    <th>phone</th>
                    <th>parent</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->parent }}</td>
                    </tr>
                @endforeach
            </table>
            <div>{{ $students }}</div>
        </div>
    </div>
</x-adminapp>
