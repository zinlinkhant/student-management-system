<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Styles -->
    {{-- <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style> --}}
</head>

<body class="">
    <div class="relative">
        @if (Route::has('login'))
            <div class=" py-3 text-right px-3 bg-[#151269] w-full flex justify-between items-center">
                <div>
                    <h1 class="px-5 py-2 bg-white shadow-lg">Student Management web-app</h1>
                </div>
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class=" px-5 py-2 rounded-md border  bg-white shadow-lg hover:bg-blue-200 transition-all">Dashboard</a>
                @else
                    <div>
                        <a href="{{ route('login') }}"
                            class="px-5 py-2 rounded-md border  bg-white shadow-lg hover:bg-blue-200 transition-all">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-5 py-2 rounded-md border  bg-white shadow-lg hover:bg-blue-200 transition-all">Register</a>
                        @endif
                    </div>
                @endauth
            </div>
        @endif
    </div>
    {{-- <div class=" pt-16 relative h-[500px] z-0">
        <div class="">
            <img src="https://images.unsplash.com/photo-1588075592446-265fd1e6e76f?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="h-full absolute w-full object-cover">
        </div>
        <div class="flex justify-center z-10">
            <h1 class="text-7xl font-bold text-slate-700">Student <br>management <br>app</h1>
        </div>
    </div> --}}
    <div class="block relative h-[500px] z-0 lg:px-0">
        <img src="https://images.unsplash.com/photo-1588075592446-265fd1e6e76f?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="" class="h-full lg:absolute w-full object-cover">
        <div class="lg:flex justify-center items-center h-full absolute w-full z-10  mx-7 lg:mx-0">
            <h1 class="text-7xl font-bold text-slate-700 text-left bg-white p-5 rounded-md -mt-32 transition-all title">
                Student
                <br><span class="z-30">management</span>
                <br>app
            </h1>
            <div
                class="text-xl font-semibold  text-left bg-white p-5 rounded-t-2xl rounded-l-2xl lg:w-5/12 text-gray-900 mt-18 lg:mt-32 mx-7 lg:-mx-10 z-20 title-hover:mx-0 transition-all border">
                Lorem ipsum
                dolor sit,
                amet
                consectetur adipisicing elit. Eos, labore. Reiciendis, blanditiis? Facilis officiis vitae voluptatem
                expedita? Unde totam soluta quos eos consequuntur optio. Molestiae autem ullam iste dicta quidem
                voluptates deleniti, eveniet consequatur temporibus laudantium vitae dolore, voluptatibus modi magni
                unde maxime deserunt ad voluptatem odio hic esse illo!</div>
        </div>
    </div>
    <div class="bg-gray-100 block p-5">
        <h1 class="text-4xl font-bold my-5">What can my web app do?</h1>
        <div class="student p-5">
            <h1 class="text-3xl font-semibold mx-2">Student</h1>
            <ul class="my-5">
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">Create Student account <button
                        class="button">show </button>
                </li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">Enroll grade <button
                        class="button">show </button>
                </li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">Quit grade <button class="button">show
                    </button></li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
            </ul>
        </div>
        <div class="student p-5">
            <h1 class="text-3xl font-semibold mx-2">Teacher</h1>
            <ul class="my-5">
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">Create Teacher Account <button
                        class="button">show </button>
                </li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">CRUD the course <button
                        class="button">show </button>
                </li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
                <li class="px-5 py-2 border rounded-md flex justify-between mb-2">Kick student from grade or course
                    <button class="button">show
                    </button>
                </li>
                <p class="px-5 py-2 border rounded-b-xl mb-2 border-t-0 shadow para">Lorem, ipsum dolor sit amet
                    consectetur
                    adipisicing elit.
                    Provident omnis repudiandae quia iure
                    aliquam possimus sapiente quidem ullam sint fugit, quae officiis commodi aspernatur sequi ipsum
                    laboriosam. Earum, magnam repudiandae laborum quisquam exercitationem facere cupiditate officia
                    ratione et cum dicta facilis alias voluptatibus consequuntur excepturi doloremque eius illo quo est
                    consectetur dolores molestias. Ex architecto unde itaque perferendis cupiditate ad rem nulla
                    molestiae expedita quisquam amet nisi omnis in a distinctio ratione totam iure libero eius, magni
                    modi. Ducimus aliquid doloribus, eaque voluptatum distinctio pariatur qui nihil corporis, dolore
                    quidem facilis porro sint libero. Tempore aliquam sit similique quod aspernatur?</p>
            </ul>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        // Hide all elements with the class "warning" when the document is ready
        $('.para').hide();
        $(".button").click(function() {
            if ($(this).text().trim() === "show") {
                $(this).text('hide')
            } else {
                $(this).text('show')
            }
            $(this).parent().next('.para').slideToggle();
        });
    });
</script>

</html>
