        <div class="w-64 h-screen bg-gray-700">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-center h-16 bg-gray-800">
                <span class="text-white text-lg font-semibold">Admin Panel</span>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 flex flex-col py-4 px-4 space-y-2">
                <a href="{{ route('admin.index') }}"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all">Home</a>
                <a href="{{ route('admin.stu_pa') }}"
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
