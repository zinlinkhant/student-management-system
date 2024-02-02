        <div class="w-64 bg-gray-700 relative ">
            <!-- Sidebar Header -->

            <div class="flex items-center justify-center py-3 px-7 bg-gray-800 fixed top-0 ">
                <span class="text-white text-lg font-semibold">Admin Panel</span>
            </div>

            <!-- Navigation Links -->
            <nav class="fixed top-10 left-0 py-4 px-4 space-y-2">
                <a href="{{ route('admin.index') }}"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Home</a>
                <a href="{{ route('admin.stu_pa') }}"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Students</a>
                <a href="{{ route('admin.classrooms') }}"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Classrooms</a>
                <a href="{{ route('admin.teachers') }}"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Teachers</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Course
                    and Grade</a>
                <a href="#"
                    class="text-white hover:bg-gray-800 px-4 py-2 rounded-md hover:ml-3 hover:text-white transition-all block">Exams</a>
            </nav>

        </div>
