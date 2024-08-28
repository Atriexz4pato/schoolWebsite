@extends('layout')
@section('content')

    <!--====================================Events section====================================-->

    <div class="min-h-screen mt-12 bg-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-2   justify-center w-screen h-fit md:h-[57vh] overflow-hidden">
            <div class=" md:h-full md:w-[60vw] bg-gray-800 flex flex-col items-center p-5 md:p-20 md:my-5">

                <h2 class=" mt-5 text-gray-200 text-4xl font-semibold font-serif">Academic Clinic</h2>

                <p class="md:w-[30vw] mt-5 text-gray-200 text-xl font-serif">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                    Voluptatibus iste vitae consequatur, omnis ipsam, suscipit minima atque dolores at est possimus
                    eveniet. Ipsa, excepturi dolor assumenda modi alias sunt vero?</p>
                <div class="flex items-center p-8 space-x-5 md:space-x-40">
                    <div class=" flex space-x-5">
                        <img src="{{asset('assets/events/cal/icons8-calendar-50.png')}}" class="h-8 w-8" alt="">
                        <p class="text-gray-200 ">June, 6th 2024</p>
                    </div>

                    <div class=" flex space-x-5">
                        <img src="{{asset('assets/events/cal/icons8-location-50.png')}}" class="h-8 w-8" alt="">
                        <p class="text-gray-200 ">Enlight Academy</p>
                    </div>
                </div>
                <button class="border-gray-200 border p-3 text-gray-200 hover:bg-gray-200 hover:text-gray-800"><a
                        href="#">Learn More</a></button>


            </div>
            <div class="relative h-full md:w-[45vw] overflow-hidden md:mt-10">
                <img src="{{asset('storage/assets/events/event_1.jpg')}}" alt="" class="h-full  overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-gray-800 opacity-50 z-10"></div>
            </div>
        </div>



        <!--====================================More upcoming events====================================-->

        <!-- Title section -->
        <div class="w-screen min-h-fit flex flex-col justify-center items-center">
            <div class=" flex justify-center md:mt-10">
                <h1 class=" mt-5 text-gray-800 text-4xl font-semibold font-serif text-center">Have a Glance at Our
                    Upcoming Events</h1>
            </div>
            <!-- An event -->
            @foreach($events as $event)
                <div class="flex flex-col justify-center items-center md:w-[85vw] min-h-fit mt-10 px-2 md:px-32">
                    <div class=" md:h-[40vh] md:flex items-center justify-center md:p-10 w-full mb-5 md:space-x-9">
                        <img src="{{asset('storage/'.$event->image_url)}}" class="h-[35vh]" alt="">
                        <div class="flex flex-col justify-center items-center  md:w-[40vw]">
                            <h1 class="text-3xl font-semibold text-center m-3 md:m-5">{{$event->title}}</h1>
                            <p class="md:w-[30vw]  md:mt-5 text-gray-800 text-xl font-serif">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Officiis eum veritatis asperiores. Ex, voluptatem mollitia.
                                Iure libero, vitae voluptas voluptatem a corporis quia, nam odit placeat quis neque quasi
                                aspernatur.</p>

                            <div class="grid grid-cols-2 md:grid-cols-3  items-center p-8 gap-5 flex-wrap space-x-3">

                                <div class=" flex space-x-5 ">
                                    <img src="{{asset('assets/events/cal/time.png')}}" class="h-5 w-5" alt="">
                                    <p class="text-gray-900 ">{{\Illuminate\Support\Carbon::parse($event->start_time)->format('H:i')}} am-{{\Illuminate\Support\Carbon::parse($event->end_time)->format('H:i')}} pm</p>
                                </div>

                                <div class=" flex space-x-5 ">
                                    <img src="{{asset('assets/events/cal/calendar.png')}}" class="h-5 w-5" alt="">
                                    <p class="text-gray-900 ">{{$event->date}}</p>
                                </div>

                                <div class=" flex space-x-5">
                                    <img src="{{asset('assets/events/cal/location.png')}}" class="h-5 w-5" alt="">
                                    <p class="text-gray-900 ">Enlight Academy</p>
                                </div>
                            </div>
                            <button class="border-gray-800 border p-3 text-gray-900 hover:bg-gray-800 hover:text-gray-200"><a
                                    href="#">Learn More</a></button>
                        </div>
                    </div>

                </div>

            @endforeach

@endsection
