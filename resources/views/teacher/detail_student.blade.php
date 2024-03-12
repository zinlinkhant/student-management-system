<x-app-layout>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-10">
        <div class="md:flex">

            <div class="p-8 ">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Student ID</div>
                <p class="mt-2 text-gray-900">{{ $student->id }}</p>
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">Name</div>
                <p class="mt-2 text-gray-900">{{ $student->user->name }}</p>
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">Email</div>
                <p class="mt-2 text-gray-900">{{ $student->user->email }}</p>
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">Grade</div>
                @foreach ($student->classrooms as $cl)
                    <div class="mt-2 text-gray-900 w-full flex items-center">
                        {{ $cl->grade->name }}
                        <a href=""
                            class="ml-10 px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 mb-5">Edit</a>
                        <form action="{{ route('teacher.delete_grade_student', $student->id) }}" class="inline w-fit">
                            <input type="submit" value="kick student"
                                class="ml-10 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600 mb-5">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-10">
        <div class="md:flex">
            <form action="{{ route('teacher.update_student', $student->id) }}" method="POST" class="w-full">
                @csrf
                @method('PUT')
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-white bg-[#2C2760] py-1 px-3 font-semibold">Student
                        ID
                    </div>
                    <input type="text" name="student_id" value="{{ $student->id }}"
                        class="mt-2 mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    <div class="uppercase tracking-wide text-sm text-white bg-[#2C2760] py-1 px-3 font-semibold mt-4">
                        Name
                    </div>
                    <input type="text" name="name" value="{{ $student->user->name }}"
                        class="mt-2 mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    <div class="uppercase tracking-wide text-sm text-white bg-[#2C2760] py-1 px-3 font-semibold mt-4">
                        Email
                    </div>
                    <input type="email" name="email" value="{{ $student->user->email }}"
                        class="mt-2 mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    <div
                        class="uppercase tracking-wide text-sm text-white bg-[#2C2760] py-1 px-3 font-semibold mt-4 mb-2">
                        Add
                        Grade
                    </div>
                    <div>
                        <form action=""></form>
                        <select name="grade" id="">
                            @foreach ($grades as $g)
                                <option value="{{ $g->name }}">{{ $g->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div
                        class="uppercase tracking-wide text-sm text-white bg-[#2C2760] py-1 px-3 font-semibold mt-6 mb-4">
                        Remove
                        Grade
                    </div>
                    @foreach ($student->classrooms as $c)
                        <div class="flex mb-5">
                            <p class="py-2">{{ $c->grade->name }}</p>
                            <form action="{{ route('teacher.delete_grade_student', $student->classroom_student) }}"
                                method="POST">
                                @csrf
                                @method('delete')

                                <input type="submit" class="px-5 py-2 ml-3 rounded-md bg-red-500 text-white"
                                    value="Remove">
                            </form>
                        </div>
                    @endforeach
                    <input type="submit" value="update" class="px-5 py-2 mt-3 rounded-md bg-[#2C2760] text-white">
                </div>
            </form>
        </div>
    </div>

    {{-- {{ $student->class_stu }} --}}



</x-app-layout>
