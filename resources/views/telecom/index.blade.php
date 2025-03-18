@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')


<div>
    <section class="pb-12 lg:pb-20 bg-[#fefced]">
        <div class="grid grid-cols-1 lg:grid-cols-4 w-10/12 mx-auto min-h-[92vh] pt-[12vh]">
            <div class="col-span-2 pr-0 lg:pr-12 h-full text-left flex flex-col justify-center order-2 lg:order-1">
                <p class="bg-[#FEF8C9] py-2 px-4 mb-3 lg:mb-6 w-fit text-left text-black">Telecom Solutions</p>
                <p class="text-3xl lg:text-6xl text-black mb-3 lg:mb-5 font-semibold block mr-12">
                    Advanced Telecom
                    <br>Services
                </p>
                <p class="text-base text-gray-600 block mr-0 lg:mr-20 pr-0 lg:pr-12 mb-4 lg:mb-8">
                    Innovative and reliable telecommunications solutions tailored to meet the diverse needs of our
                    clients.
                </p>
                <div class=" flex lg:block justify-between">
                    <button class="bg-[#2b4b70] text-sm lg:text-base text-white px-4 lg:px-8 py-2 rounded-md mr-4">
                        Discover Our Service
                    </button>
                    <button class="bg-yellow-400 text-sm lg:text-base text-black px-4 lg:px-8 py-2 rounded-md">
                        Contact Us
                    </button>
                </div>
            </div>
            <div class=" col-span-2 flex items-center order-1 lg:order-2">
                <img class="w-full rounded mt-0 lg:mt-8 mb-8 lg:mb-0" src="img/tele_one.png" alt="">
            </div>
        </div>
    </section>


    <section class="bg-white pt-12 lg:pt-24 pb-12 lg:pb-24">
        <div class="w-10/12 mx-auto text-left lg:text-center px-0 lg:px-12 mb-8 telecom-one">
            <p class="text-3xl lg:text-4xl mb-6 w-full text-black font-semibold">
                Our Mission & Vision
            </p>
            <p class="text-base lg:text-lg text-gray-600 mb-12">
                At MOM BEST ONE TELECOM CO., LTD., we are committed to delivering innovative and reliable services to
                improve client operations and performance.
            </p>
            <div class="grid grid-cols-2 gap-x-8 gap-y-8 text-left">
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Innovative Services</h3>
                        <p class="text-gray-600">
                            Our mission focuses on delivering innovative and reliable services to improve client
                            operations and performance.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Integrity</h3>
                        <p class="text-gray-600">
                            Integrity is central to our business operations. It ensures transparency and builds trust
                            with our clients and partners.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Preferred Partner</h3>
                        <p class="text-gray-600">
                            We aspire to be recognized as the preferred partner in the industries we serve, known for
                            our commitment to excellence.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Innovation</h3>
                        <p class="text-gray-600">
                            Innovation drives our growth and development. We embrace new ideas and technologies to
                            enhance our services.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Integrity and Excellence</h3>
                        <p class="text-gray-600">
                            Our vision emphasizes integrity and excellence, which are core values that guide our
                            business practices and client relationships.

                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8 hidden lg:block" alt="">
                    <div>
                        <h3 class="font-semibold text-black mb-1">Customer Satisfaction</h3>
                        <p class="text-gray-600">
                            Customer satisfaction is a top priority. We focus on understanding and meeting the needs of
                            our clients.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#fefced]">
        <div class="pt-12 lg:pt-24 pb-12 lg:pb-24 w-10/12 mx-auto px-0 telecom-two">
            <div class="flex justify-center w-full mb-6 lg:mb-12">
                <div>
                    <p class="text-4xl mb-3 w-full text-black text-center">
                        Range of Telecom Services
                    </p>
                    <p class="w-fit text-black">
                        We offer comprehensive telecommunications solutions to meet the diverse needs of our clients.


                    </p>
                </div>
            </div>

            <div
                class="hidden lg:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-x-0 md:gap-x-16 xl:gap-x-8 gap-y-8 ">
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-0 text-lg">Installation Services</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Our team provides efficient installation services to set up robust telecom infrastructure for
                        smooth operations.
                    </p>
                </div>
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Maintenance and Support</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        We offer ongoing maintenance and support services to ensure seamless and reliable communication
                        systems.

                    </p>
                </div>
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Network Solutions</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Comprehensive network solutions designed to optimize connectivity and enhance communication
                        efficiency.
                    </p>
                </div>
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">BTS Sites Survey</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Expert surveys for optimal placement of base transceiver stations, ensuring maximum coverage and
                        efficiency.
                    </p>
                </div>
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Wireless Solutions</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Advanced wireless communication solutions tailored to meet specific business requirements.
                    </p>
                </div>
                <div
                    class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Voice & Data Services</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Integrated voice and data services designed to enhance communication and information exchange.
                    </p>
                </div>
            </div>

            <div
                class="block lg:hidden -mx-3" id="telecom_service_slider">
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-0 text-lg">Installation Services</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Our team provides efficient installation services to set up robust telecom infrastructure for
                        smooth operations.
                    </p>
                </div>
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Maintenance and Support</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        We offer ongoing maintenance and support services to ensure seamless and reliable communication
                        systems.

                    </p>
                </div>
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Network Solutions</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Comprehensive network solutions designed to optimize connectivity and enhance communication
                        efficiency.
                    </p>
                </div>
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">BTS Sites Survey</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Expert surveys for optimal placement of base transceiver stations, ensuring maximum coverage and
                        efficiency.
                    </p>
                </div>
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Wireless Solutions</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Advanced wireless communication solutions tailored to meet specific business requirements.
                    </p>
                </div>
                <div
                    class="telecom-service-card">
                    <img src="{{ asset('img/home_three.png') }}"
                        class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                    <div class="text-center">
                        <p class="text-black font-semibold pb-4 text-lg">Voice & Data Services</p>
                    </div>
                    <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Integrated voice and data services designed to enhance communication and information exchange.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white pt-12 pb-0 lg:pb-12 mb-8 lg:mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-3 w-10/12 mx-auto telecom-three">
            <img src="{{ asset('img/tele_two.png') }}" class=" col-span-1 w-full" alt="">
            <div class="px-0 lg:px-12 py-4 flex flex-col justify-center col-span-2 ml-0 lg:ml-12">
                <p class="bg-[#FEF8C9] py-2 px-4 mb-5 w-fit text-black text-xl">Specialized Service</p>
                <p class="text-2xl lg:text-4xl mb-3 w-full text-black text-left">
                    BTS Sites Survey
                </p>
                <p class="w-fit text-gray-600 text-base lg:text-lg leading-6 lg:leading-8 mb-10">
                    Our expert team conducts comprehensive Base Transceiver Station  surveys to ensure  <br> optimal network
                    performance.
                </p>
                <ul class=" text-lg text-black pl-2 lg:pl-12">
                    <div class="flex flex-col lg:flex-row gap-x-8 mb-8">

                        <div class="h-10 w-10 mt-4 flex-shrink-0 mx-auto mb-4 lg:mb-0">
                            <img src="img/buildings.png" alt="">
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm lg:text-base text-black mb-1">Optimal Station Placement</h3>
                            <p class="text-gray-600 text-xs lg:text-sm">
                                Conducting surveys ensures that base transceiver stations are optimally placed for
                                maximum coverage and efficiency.

                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-8 mb-8">
                        <div class="h-10 w-10 mt-4 flex-shrink-0 mx-auto mb-4 lg:mb-0">
                            <img src="img/buildings.png" alt="">
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm lg:text-base text-black mb-1">Performance Evaluation</h3>
                            <p class="text-gray-600 text-xs lg:text-sm">
                                Surveys allow for the evaluation of current performance, ensuring the stations meet the
                                demands of users effectively.


                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-8 mb-8">
                        <div class="h-10 w-10 mt-4 flex-shrink-0 mx-auto mb-4 lg:mb-0">
                            <img src="img/call.png" alt="">
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm lg:text-base text-black mb-1">Network Quality Assurance
                            </h3>
                            <p class="text-gray-600 text-xs lg:text-sm">
                                By surveying BTS sites, network quality can be assured, leading to improved user
                                experience with fewer dropped calls.


                            </p>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>







    <section class="bg-[#fefced] pt-10 lg:pt-20 pb-10 lg:pb-20 mb-8 lg:mb-24">
        <div class=" w-10/12 lg:w-9/12 mx-auto telecom-four">
            <div class="text-left lg:text-center">
                <p class="bg-[#FEF8C9] py-2 px-0 lg:px-4 mb-4 lg:mb-8 w-fit mx-0 lg:mx-auto text-black text-xl">Success Stories
                </p>
                <p class="text-2xl lg:text-4xl mb-4 w-full text-left lg:text-center text-black font-semibold">
                Key Projects and Case Studies
                </p>
                <p class="w-fit mx-0 lg:mx-auto text-gray-600 text-sm lg:text-base leading-6 lg:leading-8 mb-4 lg:mb-8">
                Our key projects highlight our ability to provide effective telecom solutions tailored to client needs.
                </p>
            </div>

            <div class=" grid grid-cols-1 lg:grid-cols-2 gap-x-8">
                <div class="px-6 lg:px-12 py-6 lg:py-12 flex flex-col justify-center bg-white shadow-md mb-4 lg:mb-0">
                    <p class="text-lg lg:text-2xl mb-3 w-full text-black font-semibold text-left">
                        National Network Expansion
                    </p>
                    <p class="w-fit text-gray-700 text-sm lg:text-base leading-6 lg:leading-8 mb-3 lg:mb-6">
                    Successfully implemented a nationwide network expansion project for a major telecommunications provider, improving coverage and service quality.
                    </p>
                    <ul class=" text-lg text-black">
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>Deployed over 200 new BTS sites</span>
                        </li>
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>
                            Increased network coverage by 35%
                            </span>
                        </li>
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>Reduced call drop rate by 40%</span>
                        </li>
                    </ul>
                </div>
                <div class="px-6 lg:px-12 py-6 lg:py-12 flex flex-col justify-center bg-white shadow-md mb-0 lg:mb-0">
                    <p class="text-2xl mb-3 w-full text-black text-left font-semibold">
                    Corporate Network Upgrade
                    </p>
                    <p class="w-fit text-gray-700 text-sm lg:text-base leading-6 lg:leading-8 mb-3 lg:mb-6">
                    Upgraded the telecommunications infrastructure for a multinational corporation, enhancing connectivity and communication efficiency.
                    </p>
                    <ul class=" text-lg text-black">
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>
                            Implemented VoIP solutions across 15 locations
                            </span>
                        </li>
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>Reduced communication costs by 25%</span>

                        </li>
                        <li class="mb-4 text-sm lg:text-base flex">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>
                            <span>Improved inter-office connectivity by 50%</span>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-24">
        <div class="w-10/12 mx-auto text-center px-0 lg:px-12 mb-8 telecom-five">
            <p class="text-4xl mb-6 w-full text-black font-semibold">
                Industry we served
            </p>
            <p class="text-lg text-gray-600 mb-12">
                Leveraging cutting-edge technology to revolutionize supply chain management and logistics operations.
            </p>
            <div class="grid grid-cols-2 gap-x-8 gap-y-8 text-left">
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="h-10 w-10 pt-2 flex-shrink-0">
                        <img src="img/buildings.png" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-black mb-1">AI-Powered Route Optimization</h3>
                        <p class="text-gray-600">
                            Our AI algorithms analyze real-time traffic data, weather conditions, and historical patterns to determine the most efficient delivery routes, reducing transit times and fuel consumption.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="h-10 w-10 pt-2 flex-shrink-0">
                        <img src="img/buildings.png" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-black mb-1">AI-Powered Route Optimization</h3>
                        <p class="text-gray-600">
                            Our AI algorithms analyze real-time traffic data, weather conditions, and historical patterns to determine the most efficient delivery routes, reducing transit times and fuel consumption.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="h-10 w-10 pt-2 flex-shrink-0">
                        <img src="img/call.png" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-black mb-1">Integrated Logistics</h3>
                        <p class="text-gray-600">
                            Seamless delivery through our own logistics division
                        </p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="h-10 w-10 pt-2 flex-shrink-0">
                        <img src="img/call.png" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-black mb-1">Timely Delivery</h3>
                        <p class="text-gray-600">
                            Efficient processes ensuring on-time delivery for all orders
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f3f3f3] py-24">
        <div class="w-10/12 mx-auto text-center telecom-six">
            <p class="text-4xl mb-6 w-full text-black font-semibold">
                Ready to Discuss Your <br> Trading Needs?

            </p>
            <p class="text-lg text-gray-600 mb-12">
                Our trading specialists are ready to help you source the products <br> you need or find markets for your
                goods.
            </p>
            <div>
                <button class="bg-[#2b4b70] text-white px-8 py-2 rounded-md mr-4">
                    Request a Quote
                </button>
                <button class="bg-yellow-400 text-black px-8 py-2 rounded-md">
                    Call
                </button>
            </div>
        </div>
    </section>


</div>

<script>
        gsap.registerPlugin(ScrollTrigger);


        gsap.to('.telecom-one', {
            scrollTrigger: {
                trigger: '.telecom-one',
                start: 'top 75%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.telecom-two', {
            scrollTrigger: {
                trigger: '.telecom-two',
                start: 'top 90%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.telecom-three', {
            scrollTrigger: {
                trigger: '.telecom-three',
                start: 'top 90%',
                end: 'bottom center',
                toggleActions: 'play none none reverse',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.telecom-four', {
            scrollTrigger: {
                trigger: '.telecom-four',
                start: 'top 100%',
                end: 'bottom center',
                toggleActions: 'play none none reverse',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.telecom-five', {
            scrollTrigger: {
                trigger: '.telecom-five',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.telecom-six', {
            scrollTrigger: {
                trigger: '.telecom-six',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
$('#customer_slider').slick({
    infinite: true,
    arrows: true,
    dot: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$('#portfolio_slider').slick({
    infinite: true,
    arrows: true,
    dot: false,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear'

});
$('#telecom_service_slider').slick({
    infinite: true,
    arrows: false,
    dot: false,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
</script>
<script>
// $(document).ready(function () {

//     function checkIfHome() {
//         let windowHeight = $(window).height();
//         let scrollTop = $(window).scrollTop();
//         var elementTop = $('#home').offset().top;
//         var elementHeight = $('#home').height();
//         if (scrollTop + windowHeight > elementTop + elementHeight * 0.1) {
//             setTimeout(() => {
//             $('#home_navbar').addClass('active');
//             }, 0);
//         }
//     }
//     function checkIfService() {
//         let windowHeight = $(window).height();
//         let scrollTop = $(window).scrollTop();
//         var elementTop = $('#service_section').offset().top - 200;
//         var elementHeight = $('#service_section').height();
//         if (scrollTop + windowHeight > elementTop) {
//             $('.service_scroll').addClass('active');
//             $('#home_navbar').removeClass('active');
//         }
//         if (scrollTop > elementTop + elementHeight){
//             $('.service_scroll').removeClass('active');
//         }
//         if (scrollTop < elementTop){
//             $('.service_scroll').removeClass('active');
//         }
//     }
//     function checkIfPortfolio() {
//         let windowHeight = $(window).height();
//         let scrollTop = $(window).scrollTop();
//         var elementTop = $('.animation-two').offset().top - 151;
//         var elementHeight = $('.animation-two').height();
//         if (scrollTop + windowHeight > elementTop) {
//             $('#home_navbar').removeClass('active');
//             $('#portfolio_scroll').addClass('active');
//             $('.service_scroll').removeClass('active');
//             console.log('hello')
//         }
//         if (scrollTop > elementTop + elementHeight){
//             $('#portfolio_scroll').removeClass('active');
//         }
//         if (scrollTop < elementTop){
//             $('#portfolio_scroll').removeClass('active');
//         }
//     }
//     function checkIfTestimonial() {
//         let windowHeight = $(window).height();
//         let scrollTop = $(window).scrollTop();
//         var elementTop = $('#testimonial_section').offset().top - 100;
//         var elementHeight = $('#testimonial_section').height();
//         if (scrollTop + windowHeight > elementTop) {
//             $('.testimonial_scroll').addClass('active');
//             $('#home_navbar').removeClass('active');
//         }
//         if (scrollTop > elementTop + elementHeight){
//             $('.testimonial_scroll').removeClass('active');
//         }
//         if (scrollTop < elementTop){
//             $('.testimonial_scroll').removeClass('active');
//         }
//     }

//     $(window).on('scroll', checkIfService);
//     $(window).on('scroll', checkIfPortfolio);
//     $(window).on('scroll', checkIfTestimonial);
//     checkIfHome();
// });
</script>
@endsection