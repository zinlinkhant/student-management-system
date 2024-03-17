<x-app-layout>
    @php
        $user = Auth::user();
    @endphp
    @if (session('message'))
        <div class=" py-2 px-5 bg-yellow-300 flex justify-between items-center warning">
            <h1 class="text-xl">{{ session('message') }}</h1>
            <button class="bg-red-400 px-3 py-2 rounded-md text-white warning_button">hide</button>
        </div>
    @endif
    <div class="antialiased bg-white font-sans text-gray-900">
        <main class="w-full">
            <div class="bg-gray-100">
                <section
                    class="cover bg-opacity-70 relative bg-[#2C2760] px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex items-center min-h-screen">
                    <div class="h-full absolute top-0 left-0 z-0">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-screen h-full object-cover opacity-20" />
                    </div>

                    <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16">
                        <div>
                            <h1 class="text-white text-4xl md:text-5xl xl:text-6xl font-bold leading-tight">
                                A better life starts with a better education.
                            </h1>
                            <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">
                                Welcome to the Great School of Tr. Thomas
                                Dooley, where trust and comfort are priorities.
                            </p>
                            @role('student')
                                @if ($user->student?->classrooms === null)
                                    <a href="#"
                                        class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">View
                                        your course</a>
                                @else
                                    <a href="{{ route('enrollGrade', $user->id) }}"
                                        class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Enroll
                                        grade</a>
                                @endif
                            @endrole
                            @role('teacher')
                                <a href="#"
                                    class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">See
                                    your
                                    class</a>
                            @endrole
                            @role('admin')
                                <a href="#"
                                    class="px-8 py-4 bg-teal-500 text-white rounded inline-block mt-8 font-semibold">Admin
                                    Panel</a>
                            @endrole
                        </div>
                    </div>
                </section>
            </div>
            <!-- end hero -->

            <!-- start about -->
            <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-32">
                <div class="flex flex-col lg:flex-row lg:-mx-8">
                    <div class="w-full lg:w-1/2 lg:px-8">
                        <h2 class="text-3xl leading-tight font-bold mt-4">
                            Education is important
                        </h2>
                        <p class="text-lg mt-4 font-semibold">
                            This is a great school website
                        </p>
                        <p class="mt-2 leading-relaxed">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos magni, voluptas earum
                            accusamus quod aliquam soluta commodi. Veritatis, eligendi similique!
                        </p>
                    </div>

                    <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">
                        <div class="md:flex">
                            <div>
                                <div class="w-10 h-10 bg-[#2C2760] rounded-full"></div>
                            </div>
                            <div class="md:ml-8 mt-4 md:mt-0">
                                <h4 class="text-xl font-bold leading-tight">
                                    Everything You Need Under One Roof
                                </h4>
                                <p class="mt-2 leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, quibusdam
                                    dicta odit quaerat doloribus cum animi nostrum. Reiciendis tempore eum nisi pariatur
                                    ex. Sapiente culpa aspernatur aperiam ea libero omnis.
                                </p>
                            </div>
                        </div>

                        <div class="md:flex mt-8">
                            <div>
                                <div class="w-10 h-10 bg-[#2C2760] rounded-full"></div>
                            </div>
                            <div class="md:ml-8 mt-4 md:mt-0">
                                <h4 class="text-xl font-bold leading-tight">
                                    Our Student-Focused Approach
                                </h4>
                                <p class="mt-2 leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, quibusdam
                                    dicta odit quaerat doloribus cum animi nostrum. Reiciendis tempore eum nisi pariatur
                                    ex. Sapiente culpa aspernatur aperiam ea libero omnis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:flex md:flex-wrap mt-24 text-center md:-mx-4">
                    <div class="md:w-1/2 md:px-4 lg:w-1/4">
                        <div class="bg-white rounded-lg border border-gray-300 p-8">


                            <h4 class="text-xl font-bold mt-4">
                                Teeth Whitening
                            </h4>
                            <p class="mt-1">
                                Let us show you how our experience.
                            </p>
                            <a href="#" class="block mt-4">Read More</a>
                        </div>
                    </div>

                    <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/4">
                        <div class="bg-white rounded-lg border border-gray-300 p-8">

                            <h4 class="text-xl font-bold mt-4">Oral Surgery</h4>
                            <p class="mt-1">
                                Let us show you how our experience.
                            </p>
                            <a href="#" class="block mt-4">Read More</a>
                        </div>
                    </div>

                    <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                        <div class="bg-white rounded-lg border border-gray-300 p-8">

                            <h4 class="text-xl font-bold mt-4">
                                Painless Dentistry
                            </h4>
                            <p class="mt-1">
                                Let us show you how our experience.
                            </p>
                            <a href="#" class="block mt-4">Read More</a>
                        </div>
                    </div>

                    <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/4">
                        <div class="bg-white rounded-lg border border-gray-300 p-8">

                            <h4 class="text-xl font-bold mt-4">Periodontics</h4>
                            <p class="mt-1">
                                Let us show you how our experience.
                            </p>
                            <a href="#" class="block mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about -->

            <!-- start testimonials -->
            {{-- <section class="relative bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-16 lg:py-32">
                <div class="flex flex-col lg:flex-row lg:-mx-8">
                    <div class="w-full lg:w-1/2 lg:px-8">
                        <h2 class="text-3xl leading-tight font-bold mt-4">
                            Why choose the Mesothelioma Center?
                        </h2>
                        <p class="mt-2 leading-relaxed">
                            Aenean ut tellus tellus. Suspendisse potenti. Nullam
                            tincidunt lacus tellus, sed aliquam est vehicula a.
                            Pellentesque consectetur condimentum nulla, eleifend
                            condimentum purus vehicula in. Donec convallis
                            sollicitudin facilisis. Integer nisl ligula,
                            accumsan non tincidunt ac, imperdiet in enim. Donec
                            efficitur ullamcorper metus, eu venenatis nunc. Nam
                            eget neque tempus, mollis sem a, faucibus mi.
                        </p>
                    </div>

                    <div class="w-full md:max-w-md md:mx-auto lg:w-1/2 lg:px-8 mt-12 mt:md-0">
                        <img src="https://images.unsplash.com/photo-1604134967494-8a9ed3adea0d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="bg-gray-400 w-full h-72 rounded-lg object-fit"></img>
                        <p class="italic text-sm mt-2 text-center">
                            Aenean ante nisi, gravida non mattis semper.
                        </p>
                    </div>
                </div>
            </section> --}}
            <!-- end testimonials -->

            <!-- start blog -->
            <!-- component -->

            {{-- <!-- Hero -->
            <div class="relative overflow-hidden">
                <!-- Gradients -->
                <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                    <div
                        class="bg-gradient-to-r  blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] from-violet-900/50 to-purple-900">
                    </div>
                    <div
                        class="bg-gradient-to-tl  blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] from-indigo-900/70 via-indigo-900/70 to-blue-900/70">
                    </div>
                </div>
                <!-- End Gradients -->

                <div class="relative z-10">
                    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                        <div class="max-w-2xl text-center mx-auto">
                            <p
                                class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-100 to-violet-200 text-transparent ">
                                Nano: A vision for 2024
                            </p>

                            <!-- Title -->
                            <div class="mt-5 max-w-2xl">
                                <h1
                                    class="inline-block font-semibold bg-clip-text bg-gradient-to-b to-gray-800 from-blue-200 text-4xl md:text-5xl lg:text-6xl text-transparent">
                                    The Intuitive Web Solutions
                                </h1>
                            </div>
                            <!-- End Title -->

                            <div class="mt-5 max-w-3xl">
                                <p class="text-lg text-gray-900">Preline UI is an open-source set of
                                    prebuilt UI components, ready-to-use examples and Figma design system based on the
                                    utility-first Tailwind CSS framework.</p>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-8 gap-3 flex justify-center">
                                <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                                    href="#">
                                    Get started
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                                <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent  disabled:opacity-50 disabled:pointer-events-none text-white hover:bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-600"
                                    href="#">
                                    <svg class="flex-shrink-0 w-4 h-4" width="19" height="18" viewBox="0 0 19 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.875 18C8.531 18 9.875 16.656 9.875 15V12H6.875C5.219 12 3.875 13.344 3.875 15C3.875 16.656 5.219 18 6.875 18Z"
                                            fill="#0ACF83"></path>
                                        <path
                                            d="M3.875 9C3.875 7.344 5.219 6 6.875 6H9.875V12H6.875C5.219 12 3.875 10.656 3.875 9Z"
                                            fill="#A259FF"></path>
                                        <path
                                            d="M3.875 3C3.875 1.344 5.219 0 6.875 0H9.875V6H6.875C5.219 6 3.875 4.656 3.875 3Z"
                                            fill="#F24E1E"></path>
                                        <path
                                            d="M9.87501 0H12.875C14.531 0 15.875 1.344 15.875 3C15.875 4.656 14.531 6 12.875 6H9.87501V0Z"
                                            fill="#FF7262"></path>
                                        <path
                                            d="M15.875 9C15.875 10.656 14.531 12 12.875 12C11.219 12 9.87501 10.656 9.87501 9C9.87501 7.344 11.219 6 12.875 6C14.531 6 15.875 7.344 15.875 9Z"
                                            fill="#1ABCFE"></path>
                                    </svg>
                                    Figma
                                </a>
                            </div>
                            <!-- End Buttons -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-10 bg-gradient-to-b from-white to-gray-100">

            </div>
            <!-- End Hero --> --}}
            @role('student')
                @if ($user->student->classrooms->isEmpty())
                    <div class="w-8/12 m-auto p-5 border-2 border-yellow-300 rounded-md">
                        <h2 class="text-3xl leading-tight font-bold">
                            You don't have course
                        </h2>
                        <p class="text-gray-600 mt-2 md:max-w-lg">
                            every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptatibus delectus pariatur itaque!
                        </p>
                    </div>
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-8" role="alert">
                        <p class="font-bold">Warning:</p>
                        <p>You need to enroll in a grade to access the course.</p>
                    </div>
                @else
                    <section class="relative bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
                        <div class="bg-white my-2 p-3 rounded-md shadow-md">
                            <h2 class="text-3xl leading-tight font-bold">
                                All of your classrooms
                            </h2>
                            <p class="text-gray-600 mt-2 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>
                        <div class="w-fit my-5">
                            @foreach ($user->student->classrooms as $cl)
                                <div class="bg-white rounded border border-gray-300 mb-5">
                                    <div class="p-4 text-wrap">
                                        <p>Classroom</p>
                                        <p class="text-lg font-semibold leading-tight mt-4">
                                            {{ $cl->name }}
                                        </p>
                                        <p class="text-gray-600 mt-1">
                                            {{ $cl->year }}</p>
                                        <div class="mt-4">
                                            <span
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $cl->grade->name }}</span>

                                        </div>
                                        <p class="text-wrap w-full">{{ $cl->remarks }}</p>
                                        </p>
                                        <div class="flex items-center mt-4">
                                            <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                            <div class="ml-4">
                                                <p class="text-gray-600">
                                                    By
                                                    <span class="text-gray-900 font-semibold">Abby Sims</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="bg-white my-2 p-3 rounded-md shadow-md">
                            <h2 class="text-3xl leading-tight font-bold">
                                All of your course
                            </h2>
                            <p class="text-gray-600 mt-2 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>
                        <div class="flex mt-5 md:-mx-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($user->student->classrooms as $classroom)
                                    @foreach ($classroom->grade->courses as $course)
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                            {{-- <img class="w-full h-48 object-cover object-center" src="{{ $course->image_url }}"
                                        alt="{{ $course->title }}"> --}}
                                            <div class="p-6">
                                                <h2 class="text-xl font-semibold mb-2">{{ $course->name }}</h2>
                                                <span
                                                    class=" mt-2 block  w-full px-1 py-1 text-sm font-semibold text-gray-700">{{ $course->created_at->format('Y') }}</span>
                                                <p class="text-gray-600">{{ $course->description }}</p>
                                                <div class="mt-4">
                                                    <span
                                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $course->grade->name }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                        {{-- <div class="w-8/12 m-auto p-5 border-2 border-yellow-300 rounded-md">
                            <h2 class="text-3xl leading-tight font-bold">
                                You don't have course
                            </h2>
                            <p class="text-gray-600 mt-2 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>
                        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-8" role="alert">
                            <p class="font-bold">Warning:</p>
                            <p>You need to enroll in a grade to access the course.</p>
                        </div> --}}
                @endif
            @endrole
            @role('teacher')
                @if ($user->teacher?->classrooms !== null)
                    <section class="relative  px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64  bg-[#2C2760] py-10 bg-opacity-70">
                        <div class="bg-white p-5">
                            <h2 class="text-3xl leading-tight font-bold">
                                All of your Classroom
                            </h2>
                            <p class="text-gray-600 mt-2 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>

                        <div class="w-fit my-5 flex">

                            @foreach ($user->teacher->classrooms as $cl)
                                <div class="bg-white rounded border border-gray-300 px-5 mr-5">
                                    <div class="p-4 text-wrap">
                                        <p>Classroom</p>
                                        <p class="text-lg font-semibold leading-tight mt-4">
                                            {{ $cl->name }}
                                        </p>
                                        <p class="text-gray-600 mt-1">
                                            {{ $cl->year }}</p>
                                        <div class="mt-4">
                                            <span
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $cl->grade->name }}</span>

                                        </div>
                                        <p class="text-wrap w-full">{{ $cl->remarks }}</p>
                                        </p>
                                        <div class="flex items-center mt-4">
                                            <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                            <div class="ml-4">
                                                <p class="text-gray-600">
                                                    By
                                                    <span class="text-gray-900 font-semibold">Abby Sims</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="bg-white mt-10 p-5">
                            <h2 class="text-3xl leading-tight font-bold">
                                All of your course
                            </h2>
                            <p class="text-gray-600 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>
                        <div class="flex mt-5 md:-mx-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($user->teacher->classrooms as $classroom)
                                    @foreach ($classroom->grade->courses as $course)
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                            {{-- <img class="w-full h-48 object-cover object-center" src="{{ $course->image_url }}"
                                        alt="{{ $course->title }}"> --}}
                                            <div class="p-6">
                                                <h2 class="text-xl font-semibold mb-2">{{ $course->name }}</h2>
                                                <span
                                                    class=" mt-2 block  w-full px-1 py-1 text-sm font-semibold text-gray-700">{{ $course->created_at->format('Y') }}</span>
                                                <p class="text-gray-600">{{ $course->description }}</p>
                                                <div class="mt-4">
                                                    <span
                                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $course->grade->name }}</span>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="">
                            <h2 class="text-3xl leading-tight font-bold">
                                You don't have course
                            </h2>
                            <p class="text-gray-600 mt-2 md:max-w-lg">
                                every grades have a lot of courses Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatibus delectus pariatur itaque!
                            </p>
                        </div>
                        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-8" role="alert">
                            <p class="font-bold">Warning:</p>
                            <p>You need to enroll in a grade to access the course.</p>
                        </div>
                @endif
            @endrole
            </section>


            <!-- end blog -->

            <!-- start cta -->
            {{-- <section
                class="relative bg-blue-teal-gradient px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left">
                <div class="md:flex md:items-center md:justify-center">
                    <h2 class="text-xl font-bold text-white">
                        Get in touch with us today!
                        <br class="block md:hidden" />Call us on: +1
                        562-789-1935
                    </h2>
                    <a href="#"
                        class="px-8 py-4 bg-white text-blue-600 rounded inline-block font-semibold md:ml-8 mt-4 md:mt-0">Book
                        Appointment</a>
                </div>
            </section> --}}
            <!-- end cta -->

            <!-- start footer -->
            {{-- <footer class="relative bg-gray-900 text-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 lg:py-24">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
                        <h3 class="font-bold text-2xl">DentalPro</h3>
                        <p class="text-gray-400">
                            Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy.
                        </p>

                        <form class="flex items-center mt-6">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Subscribe for our Newsletter
                                </label>
                                <div class="relative">
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        type="email" placeholder="Enter Your Email Address" />

                                    <button type="submit"
                                        class="bg-teal-500 hover:bg-teal-400 text-white px-4 py-2 text-sm font-bold rounded absolute top-0 right-0 my-2 mr-2">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                        <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                            Treatments
                        </h5>
                        <ul class="mt-4">
                            <li class="mt-2">
                                <a href="#" title="" class="opacity-75 hover:opacity-100">General
                                    Dentistry</a>
                            </li>
                            <li class="mt-2">
                                <a href="#" title="" class="opacity-75 hover:opacity-100">Cosmetic
                                    Dentistry</a>
                            </li>
                            <li class="mt-2">
                                <a href="#" title="" class="opacity-75 hover:opacity-100">Oral Health</a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full lg:w-2/6 mt-8 lg:mt-0 lg:mx-4 lg:pr-8">
                        <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                            Contact Details
                        </h5>
                        <ul class="mt-4">
                            <li>
                                <a href="#" title=""
                                    class="block flex items-center opacity-75 hover:opacity-100">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path
                                                d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                                        </svg>
                                    </span>
                                    <span class="ml-3">
                                        1985 Kerry Way, Whittier, CA, USA
                                    </span>
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" title=""
                                    class="block flex items-center opacity-75 hover:opacity-100">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path
                                                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                                            <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" />
                                        </svg>
                                    </span>
                                    <span class="ml-3">
                                        Mon - Fri: 9:00 - 19:00<br />
                                        Closed on Weekends
                                    </span>
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" title=""
                                    class="block flex items-center opacity-75 hover:opacity-100">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path
                                                d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                                        </svg>
                                    </span>
                                    <span class="ml-3"> +1 562-789-1935 </span>
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" title=""
                                    class="block flex items-center opacity-75 hover:opacity-100">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path
                                                d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                                        </svg>
                                    </span>
                                    <span class="ml-3">
                                        dentalpro@example.com
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                        <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                            We're Social
                        </h5>
                        <ul class="mt-4 flex">
                            <li>
                                <a href="#" target="_blank" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                                    </svg>
                                </a>
                            </li>

                            <li class="ml-6">
                                <a href="#" target="_blank" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                                    </svg>
                                </a>
                            </li>

                            <li class="ml-6">
                                <a href="#" target="_blank" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                                        <circle cx="11.994" cy="11.979" r="3.003" />
                                    </svg>
                                </a>
                            </li>

                            <li class="ml-6">
                                <a href="#" target="_blank" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <p class="text-sm text-gray-400 mt-12">
                            © 2018 ProDentists.
                            <br class="hidden lg:block" />All Rights Reserved.
                        </p>
                    </div>
                </div>
            </footer> --}}
            <!-- end footer -->

        </main>

        <!-- Global site tag (gtag.js) - Google Analytics -->

    </div>

    <script>
        $(document).ready(function() {
            // Hide all elements with the class "warning" when the document is ready
            $(".warning_button").click(function() {
                $('.warning').toggle('500');
            });
        });
    </script>
</x-app-layout>
