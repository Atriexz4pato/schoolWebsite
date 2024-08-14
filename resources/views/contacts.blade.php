@extends('layout')
@section('content')


    <div class=" flex flex-col justify-center items-center h-fit ">
        <img src="{{asset('assets/building_1.jpg')}}" class="invisible md:visible absolute md:relative    "
             alt="">

        <div
            class="invisible  md:visible absolute top-0 bg-gray-900 opacity-5 bg-fixed bg-center bg-cover h-full w-full">
        </div>
        <div class="h-fit md:absolute w-full flex flex-col justify-center items-center">

            <div
                class="space-y-0 grid grid-cols-1 md:grid-cols-2  w-full md:w-[70vw] bg-gray-200  md:h-[75vh] top-14 md:top-[10vh] md:rounded-lg shadow-2xl md:gap-20 p-2 md:p-3 ">
                <div class="space-y-3 mt-0  md:mt-12">
                    <h1 class="text-center text-3xl text-gray-900 h-fit ">Get In Touch</h1>
                    <p class="text-justify p-2 md:4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eveniet
                        aspernatur explicabo qui esse
                        expedita aliquam ratione nam repellendus incidunt sapiente voluptatem exercitationem non corrupti
                        distinctio provident quas! Veniam, minima!</p>

                    <ul class="h-fit flex flex-col justify-center ml-5 pt-8 space-y-5">
                        <li>
                            <div class=" flex space-x-5">
                                <img src="{{asset('assets/events/location.png')}}" class="w-7 h-7" alt="">
                                <div>
                                    <h1 class="text-gray-900 text-xl font-semibold">Our Address</h1>
                                    <p class=" text-gray-600">Majengo, Mombasa</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class=" flex space-x-5">
                                <img src="{{asset('assets/icons/contact.png')}}" class="w-7 h-7" alt="">
                                <div>
                                    <h1 class="text-gray-900 text-xl font-semibold">Contacts</h1>
                                    <p class="text-gray-600 ">Phone: +254112345678</p>
                                    <p class="text-gray-600 "> Email: info-ke@schooltry.com</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class=" flex space-x-5">
                                <img src="{{asset('assets/events/time.png')}}" class="w-7 h-7" alt="">
                                <div>
                                    <h1 class="text-gray-900 text-xl font-semibold">Working Hours</h1>
                                    <p class="text-gray-600 ">Monday - Friday: 08:00 - 17:00</p>
                                    <p class="text-gray-600 ">Saturday &amp; Sunday: 08:00 - 12:00</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=" flex space-x-5">
                                <img src="{{asset('assets/icons/icons8-internet-50.png')}}" class="w-7 h-7" alt="">
                                <div>
                                    <h1 class="text-gray-900 text-xl font-semibold">Find Us Online</h1>
                                    <div class=" flex space-x-4 p-5 justify-center items-center w-full">
                                        <div class="flex flex-col justify-center items-center space-y-2">
                                            <div class="h-fit w-fit p-2 hover:bg-black rounded-full bg-gray-400">
                                                <a href="#">
                                                    <img src="{{asset('assets/icons/icons8-x-50 -white.png')}}" class="w-6 h-6"
                                                         alt="">
                                                </a>
                                            </div>
                                            <p>On X</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center space-y-2">
                                            <div class="h-fit w-fit p-2 bg-gray-400 rounded-full ">
                                                <a href="#">
                                                    <img src="{{asset('assets/icons/icons8-instagram-96.png')}}" class="w-6 h-6"
                                                         alt="">
                                                </a>
                                            </div>
                                            <p>Instagram</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center space-y-2">
                                            <div class="h-fit w-fit p-2 hover:bg-blue-600 bg-gray-400 rounded-full ">
                                                <a href="#">
                                                    <img src="{{asset('assets/icons/icons8-linked-in-48.png')}}" class="w-6 h-6"
                                                         alt="">
                                                </a>
                                            </div>
                                            <p>LinkedIn</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class=" h-fit pt-10 space-y-7 md:pr-24 overflow-hidden">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="w-full text-center text-3xl"> Say Something to Us</h1>
                    </div>
                    <form action="">
                        <div class="space-y-10">
                            <label for="name" class="text-xs uppercase"></label>
                            <input type="text" placeholder="Your Name" autocomplete="given-name"
                                   class="text-xl rounded-lg text-gray-900  p-2 border-gray-500 border w-full shadow-xl">

                            <label for="Email" class="text-xs uppercase"></label>
                            <input type="email" placeholder="Your Email" autocomplete="given-name"
                                   class="text-xl rounded-lg text-gray-900  p-2 border-gray-500 border w-full shadow-xl">

                            <label for="Textarea" class="text-xs uppercase"></label>
                            <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..."
                                      class="mb-2 w-full rounded-md border border-gray-500 py-2 pl-2 pr-4 shadow-xl dark:text-gray-300 sm:mb-0"></textarea>

                            <div class="text-center">
                                <button type="submit"
                                        class="w-full bg-gray-500 text-white px-6 py-3 font-xl rounded-md sm:mb-0">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>
    <div class="h-[40vh] w-full  bottom-0">
        <iframe class="h-full w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8204208585366!2d39.66714087592447!3d-4.057010995916717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184013109dc6b093%3A0xe16014306e1e1a79!2sNaivas%20Mwembe!5e0!3m2!1sen!2ske!4v1716248178199!5m2!1sen!2ske"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>




@endsection
