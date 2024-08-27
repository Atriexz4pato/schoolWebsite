
@extends('layout')
@section('content')
    <!--====================================home  section====================================-->

    <div class="md:h-[90vh] h-[45vh]  overflow-hidden">

        <img src="{{asset('assets/students_4.jpg')}}" alt="">
        <div class="absolute top-0 bg-gray-800 opacity-70 md:opacity-20 bg-fixed bg-center bg-cover h-[45vh] md:h-full w-full"></div>
        <div class="top-12 absolute inset-0 transform transition-transform duration-500 ease-in-out h-[45vh] md:h-auto">
            <div class="md:m-40 top-12  md:w-[85vw] md:mr-10 flex flex-col justify-center items-center md:justify-start md:items-start">
                <p class="text-3xl text-gray-200 mt-10 pl-10 md:pl-48">welcome to</p>
                <div class="w-full flex items-center justify-center md:justify-normal ">
                    <h1 class="text-5xl font-semibold text-gray-200 md:pl-40 pt-0 md:text-center">Our Enlight
                        <br>Academy</h1>
                </div>
                <div class=" md:w-[70vw] flex justify-end">
                    <div class="relative md:w-3/5 left-0 md:mt-14">
                        <p class="px-2 md:text-2xl font-sans md:p-3 text-justify text-gray-50 font-semibold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, recusandae! Praesentium maxime
                            aperiam molestiae cupiditate similique nesciunt odio fuga ullam dolorum quisquam minus eaque
                            illo quae
                            iure quod, eveniet officia.
                        </p>
                    </div>
                </div>
                <button class="md:ml-[50vw] w-fit bg-indigo-500 text-gray-100 py-2 px-4 my-6 rounded-full hover:text-xl right-0">
                    <a href="#">Enroll g</a>
                </button>

            </div>

        </div>

    </div>


    <!--====================================About section====================================-->
    <div class=" w-full h-fit space-y-10 bg-gray-100 border-b border-gray-800 z-10 pb-20 ">
        <div class=" small:flex-col-reverse md:flex md:h-[60%] bg-gray-800   lg:ml-10 hover:outline-1 shadow ">
            <!-- Image area -->
            <div class="h-0 md:fit invisible lg:visible w-[43%] bg-gradient-to-bl from-gray-300 to-gray-100 md:h-full ">
                <img class="h-full w-full" src="{{asset('assets/student_5.jpg')}}" alt="About us Image">
                <!-- <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div> -->

            </div>
            <!-- text area -->
            <div class=" relative top-0 lg:w-[55%] mr-auto bg-gray-700 md:bg-gradient-to-tr from-gray-300 to-gray-200 lg:pt-20 md:pl-11 justify-center block  p-3 space-y-8">
                <div class="bg-none lg:w-[75%] justify-center">
                    <h1 class="text-black text-3xl font-semibold text-center p-5">A FEW WORDS ABOUT US</h1>
                    <p class="md:mt-5 md:mx-12 text-justify mt-2">
                        At Enlight High School, we are committed to providing a supportive and inclusive learning
                        environment where students can thrive academically, socially, and personally. Our dedicated
                        faculty and staff strive to inspire a love for learning, critical thinking, and creativity in
                        our students. With a focus on holistic development, we offer a wide range of extracurricular
                        activities, sports, and community service opportunities. At Enlight High School, we believe in
                        nurturing the potential of every student and preparing them for success in their future
                        endeavors </p>
                    <div class="flex justify-center">
                        <button
                            class="p-2  mt-2 w-fit bg-indigo-500 text-gray-950 hover:p-3 hover:bg-bg-gray-300 rounded-full transition-all delay-0">
                            <a href="#"> Learn More</a>

                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!--====================================count section====================================-->

        <div class="md:flex col-span-6 space-x-28 justify-center items-center p-28 py-5  ">
            <div class=" mt-10 w-fit">
                <div class="flex space-x-5">
                    <img class="w-12" src="{{asset('assets/icons/user.png')}}" alt="">
                    <span id="count" class="text-4xl pt-2">0</span>
                </div>

                <h1 class="text">
                    students Enrolled
                </h1>
            </div>

            <div class=" mt-10 w-fit">
                <div class="flex space-x-5">
                    <img class="w-12" src="{{asset('assets/icons/teacher.png')}}" alt="">
                    <span id="count" class="text-4xl pt-2">50</span>
                </div>

                <h1 class="text">
                    Professional Teachers
                </h1>
            </div>

            <div class=" mt-10 w-fit">
                <div class="flex space-x-5">
                    <img class="w-12" src="{{asset('assets/icons/thumb.png')}}" alt="">
                    <span id="count" class="text-4xl pt-2">100%</span>
                </div>

                <h1 class="text">
                    Parent Satisfaction
                </h1>
            </div>

        </div>


    </div>

    <!--====================================News section====================================-->
    <div class="h-screen-80  bg-gray-100 flex-col items-center  ">
        <div class="pt-10  h-fit">
            <h1 class="text-3xl font font-semibold text-center">
                CATCH UP WITH THE LATEST NEWS
            </h1>
        </div>
        <div class="flex h-fit justify-center mt-10 space-x-8 ">

            @foreach($news as $new)
                <div class=" relative w-[25%] bg-gray-200 h-[40%] shadow ">
                    <img src="{{asset('storage/'.$new->image_url)}}" alt="">
                    <div class="absolute top-0 left-0 w-full h-full bg-gray-800 opacity-50"></div>
                    <!-- date -->
                    <p id="currentDate" class="absolute top-0 left-0 font-semibold text-gray-100 bg-none p-4"></p>
                    <h1 class="absolute bottom-16 ml-5 text-gray-100 text-3xl font-semibold ">{{$new->title}}</h1>

                </div>
            @endforeach


        </div>
        <div class="flex justify-center w-full mb-7">
            <button
                class="relative p-2  mt-8 w-fit text-gray-100  bg-indigo-500 hover:p-3 hover:bg-bg-gray-300 rounded-full transition-all delay-0">
                <a href="#">More News</a>
            </button>
        </div>
    </div>

    <!--====================================Academics Section====================================-->

    <div class="bg-gray-100 h-fit flex-col py-14 border border-gray-800 ">
        <div class="flex justify-center h-fit ">
            <h1 class="pt-4 text-center text-3xl font-semibold">Academics</h1>
        </div>

        <div
            class="container pt-9 mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between">
            <div class="container grid gap-4 justify-items-center text-center md:flex-1 relative group">
                <div class="rounded-full border-8 border-indigo-500 p-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                        </path>
                    </svg>
                </div>
                <divfull w-full overflow-hidden transition-all
                         class="absolute z-30 opacity-0 invisible bg-gray-200
                     group-hover:opacity-100 group-hover:visible group-hover:h-auto group-hover:overflow-auto shadow rounded-lg">
                    <img class="h-full w-full" src="{{asset('assets/academics/maths.jpg')}}" alt="">
                    <div class="absolute top-0 h-full w-full bg-gray-950 opacity-50 "></div>
                    <div class="top-0">
                        <h1 class="p-4 text-xl font-semibold top-0"> Mathematical Acivities</h1>
                        <p class="p-3">Mathematics is the language of patterns, the logic of shape, and the foundation
                            of countless discoveries. Mostly liked by grade 3 students</p>
                        <button class="p-2 w-auto h-auto bg-indigo-500 rounded-full mb-3"><a href="#">Enroll
                                Now</a></button>
                    </div>
                </divfull>
                <h3 class="text-3xl font-bold">Mathematics</h3>
                <p>One of the favourite subjects passed and liked by our students</p>
            </div>

            <div class="container grid gap-4 justify-items-center text-center md:flex-1 relative group">
                <div class="rounded-full border-8 border-indigo-500  p-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                        </path>
                    </svg>
                </div>
                <div
                    class="absolute z-30 opacity-0 invisible bg-gray-200 h-full w-full  overflow-hidden transition-all duration-300 ease-in-out transform group-hover:opacity-100 group-hover:visible group-hover:h-auto group-hover:overflow-auto shadow rounded-lg">
                    <img class="h-full w-full" src="{{asset('assets/academics/maths.jpg')}}" alt="">
                    <div class="absolute top-0 h-full w-full bg-gray-950 opacity-50 "></div>
                    <div class="top-0">
                        <h1 class="p-4 text-xl font-semibold top-0"> Mathematical Acivities</h1>
                        <p class="p-3">Mathematics is the language of patterns, the logic of shape, and the foundation
                            of countless discoveries. Mostly liked by grade 3 students</p>
                        <button class="p-2 w-auto h-auto bg-indigo-500 rounded-full mb-3"><a href="#">Enroll
                                Now</a></button>
                    </div>
                </div>
                <h3 class="text-3xl font-bold">Mathematics</h3>
                <p>One of the favourite subjects passed and liked by our students</p>
            </div>
            <div class="container grid gap-4 justify-items-center text-center md:flex-1 relative group">
                <div class="rounded-full border-8 border-indigo-500  p-4 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                        </path>
                    </svg>
                </div>
                <div
                    class="absolute z-30 opacity-0 invisible bg-gray-200 h-full w-full  overflow-hidden transition-all duration-300 ease-in-out transform group-hover:opacity-100 group-hover:visible group-hover:h-auto group-hover:overflow-auto shadow rounded-lg">
                    <img class="h-full w-full" src="{{asset('assets/academics/maths.jpg')}}" alt="">
                    <div class="absolute top-0 h-full w-full bg-gray-950 opacity-50 "></div>
                    <div class="top-0">
                        <h1 class="p-4 text-xl font-semibold top-0"> Mathematical Acivities</h1>
                        <p class="p-3">Mathematics is the language of patterns, the logic of shape, and the foundation
                            of countless discoveries. Mostly liked by grade 3 students</p>
                        <button class="p-2 w-auto h-auto bg-indigo-500 rounded-full mb-3"><a href="#">Enroll
                                Now</a></button>
                    </div>
                </div>
                <h3 class="text-3xl font-bold">Mathematics</h3>
                <p>One of the favourite subjects passed and liked by our students</p>
            </div>
        </div>



        <div class="relative mx-10 min-w-[95vw] container rounded-xl overflow-hidden  h-96  bg-gray-800 bottom-0 mt-20">
            <img class="h-full w-full object-cover rounded-lg" src="{{asset('assets/building.jpg')}}" alt="">
            <div class="absolute top-0 h-full w-full bg-gray-800 opacity-50"></div>
            <div class="absolute top-0 left-0 flex justify-center items-center h-full w-full">

                <p class="w-4/5 text-gray-200 text-2xl font-semibold">Enlight High is known for its rigorous academics
                    and high-achieving graduates. The school produces top students who excel at prestigious
                    universities, with over 90% gaining college admission, including to Ivy League schools. Enlight
                    advanced curriculum, talented teachers, and culture of excellence prepare students exceptionally
                    well for success beyond high school.</p>

            </div>
        </div>

    </div>

    <!--====================================why choose us section====================================-->

    <section class="bg-gray-100 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center">Our Enlight High</h2>
            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>

                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-medium text-gray-900">Mission</h3>
                        <p class="mt-2 text-base text-gray-700">We aim to make the world a better place through
                            innovation
                            and collaboration.</p>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>

                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-medium text-gray-900">Values</h3>
                        <p class="mt-2 text-base text-gray-700">We believe in honesty, integrity, and respect for all
                            individuals.</p>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-medium text-gray-900">Vision</h3>
                        <p class="mt-2 text-base text-gray-700">We envision a world where technology is used to solve
                            the
                            most pressing issues facing humanity and improve people's lives.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="border-t border-gray-600 my-10  justify-center">
        <div class="flex justify-center h-fit ">
            <h1 class="pt-4 text-center text-3xl font-semibold">Success Stories</h1>
        </div>
        <div class=" md:flex justify-center space-x-11  py-10 px-5 w-full h-[40vh]">

            <figure class="relative rounded-2xl bg-gray-200 p-6 shadow-xl shadow-slate-900/10">
                <svg aria-hidden="true" width="105" height="78" class="absolute top-6 left-6 fill-slate-100">
                    <path
                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                    </path>
                </svg>
                <blockquote class="relative">
                    <p class="text-lg tracking-tight text-slate-900">
                        Awesome idea. Can't wait to see how this turns out!
                    </p>
                </blockquote>
                <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                    <div>
                        <div class="font-display text-base text-slate-900">Exmaple name</div>
                        <div class="mt-1 text-sm text-slate-500">Job designation</div>
                    </div>
                    <div class="overflow-hidden rounded-full bg-slate-50">
                        <img alt="" src="https://i.pravatar.cc/300" class="h-14 w-14 object-cover" loading="lazy"
                             width="56" height="56">
                    </div>
                </figcaption>
            </figure>

            <figure class="relative rounded-2xl bg-gray-200 p-6 shadow-xl shadow-slate-900/10">
                <svg aria-hidden="true" width="105" height="78" class="absolute top-6 left-6 fill-slate-100">
                    <path
                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                    </path>
                </svg>
                <blockquote class="relative">
                    <p class="text-lg tracking-tight text-slate-900">
                        Awesome idea. Can't wait to see how this turns out!
                    </p>
                </blockquote>
                <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                    <div>
                        <div class="font-display text-base text-slate-900">Exmaple name</div>
                        <div class="mt-1 text-sm text-slate-500">Job designation</div>
                    </div>
                    <div class="overflow-hidden rounded-full bg-slate-50">
                        <img alt="" src="https://i.pravatar.cc/300" class="h-14 w-14 object-cover" loading="lazy"
                             width="56" height="56">
                    </div>
                </figcaption>
            </figure>

            <figure class="relative rounded-2xl bg-gray-200 p-6 shadow-xl shadow-slate-900/10">
                <svg aria-hidden="true" width="105" height="78" class="absolute top-6 left-6 fill-slate-100">
                    <path
                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                    </path>
                </svg>
                <blockquote class="relative">
                    <p class="text-lg tracking-tight text-slate-900">
                        Awesome idea. Can't wait to see how this turns out!
                    </p>
                </blockquote>
                <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                    <div>
                        <div class="font-display text-base text-slate-900">Exmaple name</div>
                        <div class="mt-1 text-sm text-slate-500">Job designation</div>
                    </div>
                    <div class="overflow-hidden rounded-full bg-slate-50">
                        <img alt="" src="https://i.pravatar.cc/300" class="h-14 w-14 object-cover" loading="lazy"
                             width="56" height="56">
                    </div>
                </figcaption>
            </figure>




        </div>
    </div>

@endsection
