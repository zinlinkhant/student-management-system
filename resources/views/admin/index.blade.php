<x-adminapp>

    <!-- Sidebar -->
    <div class="flex relative">
        <x-adminSidebar></x-adminSidebar>
        <div class="bg-gray-100 p-8 w-full h-screen">
            <h1
                class="text-center mx-auto text-3xl font-semibold drop-shadow-lg bg-white px-5 py-2 rounded-md w-fit mb-5">
                <i class="fa-solid fa-school mr-3"></i>
                Data
                From School
            </h1>
            <ul class="grid grid-cols-3 gap-5 mb-5 ">
                <li
                    class="group w-full px-4 py-4 shadow-lg rounded-lg bg-blue-200 text-center text-gray-700 shadow-blue-200  transition-all relative">
                    <h1 class="text-3xl font-semibold">{{ $students }}</h1>
                    <p><i class="fa-solid fa-graduation-cap"></i> Students</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-blue-100 group-hover:px-5 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md absolute right-0 top-1/2 -translate-y-1/2 rounded-e-sm">View
                        Details</a>
                </li>
                <li
                    class="w-full group px-4 py-4 shadow-lg rounded-lg bg-red-200 text-center text-gray-700 shadow-red-200 relative">
                    <h1 class="text-3xl font-semibold">{{ $teachers }}</h1>
                    <p><i class="fa-solid fa-chalkboard-user"></i> Teachers</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-red-100 group-hover:px-5 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md absolute right-0 top-1/2 -translate-y-1/2 rounded-e-sm">View
                        Details</a>
                </li>
                <li
                    class="w-full group px-4 py-4 shadow-lg rounded-lg bg-green-200 text-center text-gray-700 shadow-green-200 relative">
                    <h1 class="text-3xl font-semibold">{{ $classrooms }}</h1>
                    <p><i class="fa-solid fa-person-shelter"></i>Classrooms</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-green-100 group-hover:px-5 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md absolute right-0 top-1/2 -translate-y-1/2 rounded-e-sm">View
                        Details</a>
                </li>
            </ul>
            <ul class="grid grid-cols-5 gap-5">


                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center relative group">
                    <h1 class="text-3xl font-semibold">{{ $parents }}</h1>
                    <p><i class="fa-solid fa-user"></i> Parents</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-gray-100 group-hover:px-3 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md rounded-e-sm absolute right-0 top-1/2 -translate-y-1/2 text-sm">View
                        <br>
                        Details</a>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center relative group">
                    <h1 class="text-3xl font-semibold">{{ $grade }}</h1>
                    <p><i class="fa-solid fa-pencil"></i>Grade</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-gray-100 group-hover:px-3 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md rounded-e-sm absolute right-0 top-1/2 -translate-y-1/2 text-sm">View
                        <br>
                        Details</a>
                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center relative group">
                    <h1 class="text-3xl font-semibold">{{ $course }}</h1>
                    <p><i class="fa-solid fa-book"></i>Course</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-gray-100 group-hover:px-3 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md rounded-e-sm absolute right-0 top-1/2 -translate-y-1/2 text-sm">View
                        <br>
                        Details</a>

                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center relative group">
                    <h1 class="text-3xl font-semibold">{{ $attendance }}</h1>
                    <p><i class="fa-solid fa-table"></i>Attendance</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-gray-100 group-hover:px-3 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md rounded-e-sm absolute right-0 top-1/2 -translate-y-1/2 text-sm">View
                        <br>
                        Details</a>

                </li>
                <li class="w-full px-4 py-4 shadow-lg rounded-lg bg-white text-center relative group">
                    <h1 class="text-3xl font-semibold">{{ $exam }}</h1>
                    <p><i class="fa-solid fa-money-check"></i>Exams</p>
                    <a href="#"
                        class="opacity-0 transition-all group-hover:bg-gray-100 group-hover:px-3 group-hover:py-1 group-hover:opacity-100 w-fit m-auto rounded-md rounded-e-sm absolute right-0 top-1/2 -translate-y-1/2 text-sm">View
                        <br>
                        Details</a>

                </li>
            </ul>
        </div>
    </div>


</x-adminapp>
