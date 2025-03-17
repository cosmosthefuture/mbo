@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')


    <div>
        <section class="pb-12 lg:pb-20 bg-[#fefced]">
            <div class="grid grid-cols-1 lg:grid-cols-4 w-10/12 mx-auto min-h-[92vh] pt-[12vh]">
                <div class="col-span-2 pr-0 lg:pr-12 h-full text-left flex flex-col justify-center order-2 lg:order-1">
                    <p class="bg-[#FEF8C9] py-2 px-4 mb-3 lg:mb-6 w-fit text-left text-black">Logistics Solutions</p>
                    <p class="text-3xl lg:text-6xl text-black mb-3 lg:mb-5 font-semibold block mr-12">
                        Streamlined Global 
                        <br>Logistics
                    </p>
                    <p class="text-base text-gray-600 block mr-0 lg:mr-20 pr-0 lg:pr-12 mb-4 lg:mb-8">
                        Efficient, reliable, and innovative logistics solutions tailored to your supply chain needs.

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
                    <img class="w-full rounded mt-0 lg:mt-8 mb-8 lg:mb-0" src="img/log_one.png" alt="">
                </div>
            </div>
        </section>

        <section class="bg-[#f3f3f3]">
            <div class="pt-12 lg:pt-24 pb-12 lg:pb-24 w-10/12 mx-auto px-0">
                <div class="flex justify-center w-full mb-12" >
                    <div>
                        <p class="text-3xl lg:text-4xl mb-3 w-full text-black text-left lg:text-center">
                            Comprehensive Logistics Services
                        </p>
                        <p class="w-fit text-sm lg:text-base text-black">
                            From warehousing to last-mile delivery, we offer end-to-end logistics solutions to meet your business needs.
                        </p>
                    </div>
                </div>

                <div class="hidden lg:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-x-0 md:gap-x-16 xl:gap-x-8 gap-y-8 ">
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-0 text-lg">Transportation</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Multimodal transportation services including road, rail, air, and sea freight for efficient cargo movement.
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Warehousing</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            State-of-the-art warehousing facilities with advanced inventory management systems for secure storage.
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Global Distribution</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Worldwide distribution network ensuring timely delivery to any destination across the globe.
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Customs Clearance
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Expert handling of customs documentation and procedures to ensure smooth cross-border transactions.

                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Supply Chain Solutions
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Tailored supply chain management solutions to optimize your logistics operations and reduce costs.
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Express Services
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Fast-track logistics solutions for time-sensitive shipments and urgent deliveries

                        </p>
                    </div>
                </div>
                <div class="block lg:hidden -mx-3" id="service_slider">
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-0 text-lg">Transportation</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Multimodal transportation services including road, rail, air, and sea freight for efficient cargo movement.
                        </p>
                    </div>
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Warehousing</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            State-of-the-art warehousing facilities with advanced inventory management systems for secure storage.
                        </p>
                    </div>
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Global Distribution</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Worldwide distribution network ensuring timely delivery to any destination across the globe.
                        </p>
                    </div>
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Customs Clearance
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Expert handling of customs documentation and procedures to ensure smooth cross-border transactions.

                        </p>
                    </div>
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Supply Chain Solutions
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Tailored supply chain management solutions to optimize your logistics operations and reduce costs.
                        </p>
                    </div>
                    <div
                        class="logi-service-card">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Express Services
                            </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        Fast-track logistics solutions for time-sensitive shipments and urgent deliveries

                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-[#fefced] pt-8 lg:pt-20 pb-10 lg:pb-20 mb-8 lg:mb-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-10/12 mx-auto">
                
                <div class="px-0 lg:px-12 py-4 flex flex-col justify-center mb-6 lg:mb-0">
                    <p class="bg-[#FEF8C9] py-2 px-4 mb-3 lg:mb-5 w-fit text-black text-xl">About</p>
                    <p class="text-3xl lg:text-4xl mb-3 lg:mb-6 w-full text-black text-left">
                        Our Logistics Network
                    </p>
                    <p class="w-fit text-gray-600 leading-6 lg:leading-8 mb-8 lg:mb-8">
                        Leveraging cutting-edge technology and a vast global network to deliver unparalleled logistics solutions.Leveraging cutting-edge technology and a vast global network to deliver unparalleled logistics solutions.

                    </p>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-8">
                        <div class="flex flex-col lg:flex-row items-center text-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/done.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Global Reach
                                </h3>
                                <p class="text-gray-600">
                                Operations in over 100 countries
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-center text-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/done.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">24/7 Support</h3>
                                <p class="text-gray-600">
                                Round-the-clock customer service
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-center text-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/done.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Advanced Tracking</h3>
                                <p class="text-gray-600">
                                Real-time shipment visibility
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-center text-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/done.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Sustainable Practices</h3>
                                <p class="text-gray-600">
                                Eco-friendly logistics solutions
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <img src="{{ asset('img/log_two.png') }}" class=" w-full pr-4" alt="">
            </div>
        </section>

        <section class="bg-white pb-24">
            <div class="w-10/12 mx-auto text-center px-0 lg:px-12 mb-8">
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
            <div class="w-10/12 mx-auto text-center">
                <p class="text-4xl mb-6 w-full text-black font-semibold">
                    Ready to Discuss Your <br> Trading Needs?

                </p>
                <p class="text-lg text-gray-600 mb-12">
                    Our trading specialists are ready to help you source the products <br> you need or find markets for your goods.
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


        gsap.to('.animation-one', {
            scrollTrigger: {
                trigger: '.animation-one',
                start: 'top 80%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.animation-two', {
            scrollTrigger: {
                trigger: '.animation-two',
                start: 'top 90%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.animation-three', {
            scrollTrigger: {
                trigger: '.animation-three',
                start: 'top 110%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none reverse', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        // gsap.to('.animation-four', {
        //     scrollTrigger: {
        //         trigger: '.animation-four',
        //         start: 'top 110%',
        //         end: 'bottom center',
        //         toggleActions: 'play none none reverse',
        //     },
        //     opacity: 1,
        //     y: 0,
        //     duration: 1,
        //     ease: 'power2.out',
        // });

        gsap.to('.animation-five', {
            scrollTrigger: {
                trigger: '.animation-five',
                start: 'top 110%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        $('#customer_slider').slick({
            infinite: true,
            arrows:true,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
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

        $('#service_slider').slick({
            infinite: true,
            arrows:false,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear'

        });
        $('#package_slider').slick({
            infinite: true,
            arrows:false,
            dot:false,
            autoplay: false,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
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
