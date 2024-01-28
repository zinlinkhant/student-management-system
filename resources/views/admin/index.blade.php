<x-adminapp>

    <!-- Sidebar -->
    <div class="flex relative">
        <div class="flex flex-col w-64 h-screen bg-gray-700 border border-r-2 border-y-0 border-l-0">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-center h-16 bg-gray-800">
                <span class="text-white text-lg font-semibold">Admin Panel</span>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 flex flex-col py-4 px-4 space-y-2">
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Home</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Student
                    & Parents</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Classrooms</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Teachers</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Course
                    and Grade</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Exams</a>
            </nav>
        </div>

        <div class="bg-gray-100 p-8 w-full">
            <h1
                class="text-center mx-auto text-3xl font-semibold drop-shadow-lg bg-white px-5 py-2 rounded-md w-fit mb-5">
                <i class="fa-solid fa-school mr-3"></i>
                Data
                From School
            </h1>
            <ul class="grid grid-cols-3 gap-5 mb-5">
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-blue-200 text-center">
                    <h1 class="text-3xl font-semibold">{{ $students }}</h1>
                    <p><i class="fa-solid fa-graduation-cap"></i> Students</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-red-200 text-center">
                    <h1 class="text-3xl font-semibold">{{ $teachers }}</h1>
                    <p><i class="fa-solid fa-chalkboard-user"></i> Teachers</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-green-200 text-center">
                    <h1 class="text-3xl font-semibold">{{ $classrooms }}</h1>
                    <p><i class="fa-solid fa-person-shelter"></i>Classrooms</p>
                </li>
            </ul>
            <ul class="grid grid-cols-5 gap-5">


                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center">
                    <h1 class="text-3xl font-semibold">{{ $parents }}</h1>
                    <p><i class="fa-solid fa-user"></i> Parents</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center">
                    <h1 class="text-3xl font-semibold">{{ $grade }}</h1>
                    <p><i class="fa-solid fa-pencil"></i>Grade</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center">
                    <h1 class="text-3xl font-semibold">{{ $course }}</h1>
                    <p><i class="fa-solid fa-book"></i>Course</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center">
                    <h1 class="text-3xl font-semibold">{{ $attendance }}</h1>
                    <p><i class="fa-solid fa-table"></i>Attendance</p>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center">
                    <h1 class="text-3xl font-semibold">{{ $exam }}</h1>
                    <p><i class="fa-solid fa-money-check"></i>Exams</p>
                </li>
            </ul>
        </div>
    </div>


</x-adminapp>
