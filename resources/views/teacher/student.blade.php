<x-app-layout class="bg-[#2C2760]">
    <div class="flex bg-[#2C2760] h-screen border-t-2">
        <div class="bg-gray-100  p-5 rounded-lg m-5 w-full h-fit">
            <h1 class="font-semibold text-2xl text-[#2C2760] mb-5 border-b-2 w-fit border-[#2C2760]">All of your students
            </h1>
            <table class="w-full mb-2">

                <tr class=" text-xl">
                    <th class="border-y-2 py-3">id</th>
                    <th class="border-y-2 py-3">name</th>
                    <th class="border-y-2 py-3">email</th>
                    <th class="border-y-2 py-3">grade</th>
                </tr>
                @foreach ($teacher->classrooms as $classrooms)
                    @foreach ($classrooms->students as $student)
                        <tr class=" group relative">
                            <td class="text-center border-b-2  transition-all group group-hover:pb-10 py-2">
                                {{ $student->id }}</td>
                            <td class="text-center border-b-2  transition-all group group-hover:pb-10 py-2">
                                {{ $student->user->name }}</td>
                            <td class="text-center border-b-2  transition-all group group-hover:pb-10 py-2">
                                {{ $student->user->email }}</td>
                            <td class="text-center border-b-2  transition-all group group-hover:pb-10 py-2">
                                @foreach ($student->classrooms as $cl)
                                    {{ $cl->grade->name }}
                                @endforeach
                            </td>
                            {{-- <td class="text-center border  transition-all group group-hover:pb-10 py-2">
                            @if ($user->roles !== null)
                                @foreach ($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            @else
                                'no roles'
                            @endif
                        </td> --}}
                            <td class="text-center   transition-all absolute bottom-3 right-5 flex">
                                <a href="{{ route('teacher.detail_student', $student->id) }}"
                                    class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all">View
                                    detail</a>
                                {{-- <form method="POST" action="{{ route('admin.user.destroy', $student->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="py-1 px-2 bg-red-600 rounded-md text-white mr-2 group-hover:opacity-100 opacity-0 transition-all">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>

    </div>
</x-app-layout>
