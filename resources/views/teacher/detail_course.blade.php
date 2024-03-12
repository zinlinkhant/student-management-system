<x-app-layout>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="">
                <div class="bg-[#2C2760] py-3 px-5 text-white">
                    <p class="text-[#665FA7]">course name</p>
                    <h2 class="text-xl font-semibold">{{ $course->name }}</h2>
                    <span
                        class=" mt-2 block  w-full text-sm font-semibold text-gray-300">{{ $course->created_at->format('Y') }}</span>
                </div>
                <div class="pb-5 px-5 pt-3  text-md">
                    <form action="{{ route('teacher.update_course', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" value="{{ $course->name }}"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                            <textarea name="description" id="description" class="w-full">{{ $course->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="grade" class="block text-gray-700 font-bold mb-2">Grade:</label>
                            <select name="grade" id="">
                                <option selected value="{{ $course->grade->name }}">{{ $course->grade->name }}</option>
                                @foreach ($grade as $g)
                                    <option value="{{ $g->name }}">{{ $g->name }}</option>
                                @endforeach
                            </select>
                            <!-- You may replace the disabled input with a select dropdown if you want to allow changing the grade -->
                        </div>
                        <!-- Add other fields for editing -->
                        <input type="submit"
                            class="py-1 px-2 bg-[#2C2760] rounded-md text-white mr-2 mt-5 transition-all">
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
