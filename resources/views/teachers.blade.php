@extends('layout')
@section('content')
    <!--====================================teachers  front section====================================-->
    <div class="flex justify-center w-full p-5 pb-10 mt-7 bg-gray-300">
        <div class="h-55vh] w-[40vw] bg-white ">
            <img
                class="h-full w-full"
                src="{{asset('assets/GettyImages-1162510330_1_edited.jpg')}}" alt="">

        </div>
        <div class=" absolute space-y-5 h-[35vh] w-[30vw] bg-gray-400   bg-opacity-60 top-36 right-72 flex flex-col justify-center p-10 shadow rounded-lg" >
            <h1 class="text-center cursor-text text-3xl m-5 ">Teachers</h1>
            <p class="text-justify">Meet the best teachers at schooltry with the best sit amet consectetur, adipisicing elit. Consequatur nisi doloremque deleniti nobis repellat, accusantium ratione recusandae incidunt soluta nesciunt reiciendis, in numquam aperiam pariatur? Eum fugiat culpa aperiam quibusdam.</p>
        </div>

    </div>

    <!-- carousel section -->
    <div class="w-[70vw] ml-[15vw] bg-gray-500 mb-10 bg-opacity-30 z-10  ">
        <div class="max-w-2xl mx-auto pb-10">
            <h1 class="text-center cursor-text text-3xl m-5 ">Adminstration</h1>
            <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-80 md:h-96" data-carousel-inner>
                    <!-- Item 1 -->
                    <div class="relative" data-carousel-item>
                        <img src="{{asset('assets/principle.jpg')}}" class="object-cover w-full h-full" alt="Slide 1">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
                        <div class="object-cover bg-none">
                            <h1 class="relative bottom-5 text-amber-400 ml-5">Principle, Raphael Katana</h1>
                        </div>
                        <div class="absolute bg-gray-800 opacity-0 invisible  top-0 h-full w-full p-5 space-y-5 transition-all duration-300 ease-in-out transform group-hover:visible group-hover:opacity-70">
                            <h1 class="text-2xl font-semibold text-center">Raphael Diwani, Principle</h1>
                            <h1 class="text-xl font-semibold text-center">What he says,</h1>
                            <p class="justify-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati minima modi eum consequuntur. Repellendus rem sunt, sint saepe maiores incidunt ea aliquid voluptatem tempore assumenda? Reprehenderit debitis reiciendis omnis explicabo?</p>
                        </div>
                    </div>


                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('assets/principle.jpg')}}"
                             class="object-cover w-full h-full" alt="Slide 2">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                             class="object-cover w-full h-full" alt="Slide 3">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                        data-carousel-prev>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button type="button"
                        class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                        data-carousel-next>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>


            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        </div>

    </div>


    <section class="w-full p-10 relative flex flex-col items-center border-gray-500 border-t">
        <h1 class="text-center cursor-text text-3xl m-5">Meet The Team</h1>
        <div class="flex flex-wrap items-center justify-center space-x-32">
            @foreach($teachers as $teacher )
                <div class="h-fit w-48 flex-col justify-center items-center m-12">
                    <div class="flex flex-col items-center justify-center w-48 h-48 rounded-full overflow-hidden ">
                        <img src="{{asset($teacher->image_path)}}" alt="Image" class="w-full h-full object-cover object-center mx-auto">
                    </div>

                    <h1 class="text-2xl font-semibold text-center m-2">{{$teacher->name}}</h1>
                    <p class="p-3 text-center text-xl">{{$teacher->subjects}}</p>
                </div>
            @endforeach




        </div>

    </section>


@endsection
