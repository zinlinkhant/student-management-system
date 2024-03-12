    <x-app-layout>

        <div class="p-8">
            <div class="bg-[#2C2760] py-1 rounded-md mb-5 w-fit px-10">
                <h1 class="text-white text-2xl text-center">This is all classrooms</h1>
            </div>
            <div class="grid grid-cols-2">
                @foreach ($teacher->classrooms as $cl)
                    {{-- <div class="bg-white rounded border border-gray-300 px-5 mr-5 shadow-lg">
                        <div class="p-4 text-wrap">
                            <p>Classroom</p>
                            <p class="text-lg font-semibold leading-tight mt-4">
                                {{ $cl->name }}
                            </p>
                            <p class="text-gray-600 mt-1">
                                {{ $cl->year }}</p>
                            <div class="mt-4">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 -ml-3">{{ $cl->grade->name }}</span>

                            </div>
                            <p class="text-wrap w-full">{{ $cl->remarks }}</p>
                            </p>
                            <div class="flex items-center my-4">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                <div class="ml-4">
                                    <p class="text-gray-600">
                                        By
                                        <span class="text-gray-900 font-semibold">Abby Sims</span>
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('teacher.detail_classroom', $cl->id) }}"
                                class="py-1 px-2 bg-blue-600 rounded-md text-white mr-2 transition-all">View
                                detail</a>
                        </div>
                    </div> --}}
                    <div class="grid grid-cols-4 w-fit shadow-lg mr-3">
                        <div class="bg-[#2C2760] p-5">
                            <p class="text-[#665FA7] mb-5">classroom</p>
                            <h1 class="text-2xl font-semibold text-white mb-10">
                                {{ $cl->name }}
                            </h1>
                            <a href="" class="text-[#AAA3FC]">View all courses ></a>
                        </div>
                        <div class="bg-white p-5 w-full col-span-3">
                            <p class="text-[#747A8D] ">{{ $cl->grade->name }}</p>
                            <p class="text-[#747A8D] mb-5">{{ $cl->year }}</p>
                            <h1 class="text-lg text-black mb-10">
                                {{ $cl->remarks }}
                            </h1>
                            <a href="{{ route('teacher.detail_classroom', $cl->id) }}"
                                class="px-5 py-2 bg-[#2C2760] rounded-full text-white shadow-lg">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bg-[#2C2760] py-1 mt-10 mb-5 w-fit px-10 rounded-md">
                <h1 class="text-white text-2xl text-center">This is all your courses</h1>
            </div>
            <a href="{{ route('teacher.create_course') }}"
                class="text-[#2C2760] font-bold border border-[#2C2760] px-5 py-1 rounded-md hover:bg-[#2C2760] hover:text-white transition-all">create
                course</a>
            <div class="flex mt-5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($teacher->classrooms as $classroom)
                        @foreach ($classroom->grade->courses as $course)
                            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                {{-- <img class="w-full h-48 object-cover object-center" src="{{ $course->image_url }}"
                                            alt="{{ $course->title }}"> --}}
                                <div class="">
                                    <div class="bg-[#2C2760] py-3 px-5 text-white">
                                        <p class="text-[#665FA7]">course name</p>
                                        <h2 class="text-xl font-semibold">{{ $course->name }}</h2>
                                        <span
                                            class=" mt-2 block  w-full text-sm font-semibold text-gray-300">{{ $course->created_at->format('Y') }}</span>
                                    </div>
                                </div>
                                <p class="px-5 pt-3">{{ $course->description }}</p>
                                <div class="pb-5 px-5 pt-3  text-md flex items-end" id="class">
                                    <div class="my-4">
                                        <span
                                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $course->grade->name }}</span>

                                    </div>
                                    <a href="{{ route('teacher.detail_course', $course->id) }}"
                                        class="py-1 px-2 bg-[#2C2760] rounded-md text-white mr-2 mt-5 transition-all">Edit</a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

        </div>
    </x-app-layout>
