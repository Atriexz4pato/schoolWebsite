<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="flex flex-col bg-gray-100 min-h-screen">
<header class=" fixed bg-gray-100 w-full  z-20 py-2 shadow-lg text-gray-800">
    <nav class="flex  h-min-fit items-center  w-[92%] mx-auto">
        <div class="flex justify-start">
            <h1 class="text-2xl font-semibold">ENLIGHT</h1>


        </div>

        <div id="navlinks"
             class=" visible md:visible nav-links duration-500 md:static absolute md:min-h-fit min-h-[60vh] left-0 top-12 md:w-auto w-full flex md:items-center px-5">
            <ul class="flex md:flex-row flex-col items-center md:gap-[4vw] gap-8 ">
                <li>
                    <a class="hover:text-gray-500" href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{route('co_curricular')}}">Co-Curricular</a>
                </li>

                <li>
                    <a class="hover:text-gray-500" href="{{route('teachers')}}">Teachers</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{route('events')}}">Events</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{route('contacts')}}">Contact</a>
                </li>
            </ul>

        </div>

        <div class="flex items-center gap-6 left-3 max-w-3">

            <ion-icon onclick="displayNavlinks(this)" name="menu-outline"
                      class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>

</header>

<!--====================================Main content goes here section====================================-->
@yield('content')

<!--====================================footer section====================================-->
<footer class="relative bottom-0 bg-gray-900 text-gray-200 mt-auto z-10 ">
    <div class=" mx-auto py-14 px-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-7">
            <div class="lg:col-span-4 col-span-12">
                <button type="button"
                        class="text-white bg-indigo-500 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Dark</button>
                <a href="/">
                    <img class="h-12" src="/resources/logo.jpg" alt="logo">
                </a>
                <p class="mt-6 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam quidem magnam culpa
                    accusantium voluptas alias recusandae pariatur fugit sint temporibus dolore quasi totam, a
                    voluptatem dolor ullam ab consequatur.

                </p>
            </div>

            <div class="lg:col-span-2 md:col-span-4 col-span-12">
                <h5 class="tracking-wide text-gray-100 font-semibold">ENLIGHT</h5>
                <ul class="list-none mt-6 space-y-2">
                    <li>
                        <a class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out"
                           href="#">
                            About us</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out"
                           href="cocurricular.html">
                            Co-Curricum</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out"
                           href="teachers.html">
                            Teachers</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out"
                           href="events.html">
                            Events</a>
                    </li>

                    <li>
                        <a class="text-gray-300 hover:text-gray-400 transition-all duration-500 ease-in-out"
                           href="contact.html">
                            Contacts</a>
                    </li>
                </ul>
            </div>

            <div class=" lg:col-span-3 md:col-span-4 col-span-12">
                <h5 class="tracking-wide text-gray-100 font-semibold">Contact</h5>
                <ul class="list-none space-y-2 mt-6">
                    <li class="hover:text-gray-400 transition-all duration-500 ease-in-out">
                        Location: Ongata Rongai, Kajiado
                    </li>
                    <li class="hover:text-gray-400 transition-all duration-500 ease-in-out">
                        Phone: 0729064995
                    </li>
                    <li class="hover:text-gray-400 transition-all duration-500 ease-in-out">
                        Email: kungapatrick81@gmail.com
                    </li>
                    <li class="hover:text-gray-400 transition-all duration-500 ease-in-out">

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="border-t border-slate-700">
        <div class="md:text-left text-center container mx-auto py-7 px-6 ">
            <p class="mb-0">
                &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Kush
            </p>

        </div>
    </div>

</footer>
<script src="../node_modules/alpinejs/src/alpine.js"></script>
<script src="script.js"></script>
</body>

</html>
