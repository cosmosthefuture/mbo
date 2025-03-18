@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')


    <div>
        <section class="pb-12 lg:pb-20 bg-[#fefced]">
            <div class="grid grid-cols-1 lg:grid-cols-4 grid-flow-row-dense w-10/12 mx-auto min-h-[92vh] pt-[12vh]">
                <div class="col-span-2 pr-0 lg:pr-12 h-full text-left flex flex-col justify-center order-2 lg:order-1">
                    <p class="bg-[#FEF8C9] py-2 px-4 mb-3 lg:mb-6 w-fit text-left text-black">Trading Solutions</p>
                    <p class="text-3xl lg:text-6xl text-black mb-3 lg:mb-5 font-semibold block mr-12">
                        Global Trading 
                        <br>Excellence
                    </p>
                    <p class="text-base text-gray-600 block mr-0 lg:mr-20 pr-0 lg:pr-12 mb-4 lg:mb-8">
                    Connecting markets worldwide with premium products and reliable trading solutions across diverse categories.

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
                    <img class="w-full rounded mt-0 lg:mt-8 mb-8 lg:mb-0" src="img/trading_one.png" alt="">
                </div>
            </div>
        </section>

        <section class="bg-[#f3f3f3]">
            <div class="pt-12 lg:pt-24 pb-12 lg:pb-24 w-10/12 mx-auto px-0 trading-one">
                <div class="flex justify-center w-full mb-12" >
                    <div>
                        <p class="text-3xl lg:text-4xl mb-3 w-full text-black text-left lg:text-center">
                            Product Categories We Serve
                        </p>
                        <p class="w-fit text-sm lg:text-base text-black">
                            Our trading division specializes in a wide range of product categories to meet diverse market needs.
                        </p>
                    </div>
                </div>

                <div class="hidden lg:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-x-0 md:gap-x-16 xl:gap-x-8 gap-y-8 ">
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-32 pb-12 px-16 xl:px-12 text-center border-t border-gray-200">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                </div>
                <div class="block lg:hidden -mx-3" id="product_category_slider">
                    <div
                        class="product-category-card ">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="product-category-card">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="product-category-card">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="product-category-card">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="product-category-card">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                    <div
                        class="product-category-card">
                        <div class="text-left">
                            <p class="text-black font-semibold pb-4 text-lg">Agricultural Products </p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 py-4 text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-[#fefced] pt-10 lg:pt-20 pb-0 lg:pb-20 mb-8 lg:mb-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-10/12 mx-auto trading-two">
                
                <div class="px-0 lg:px-12 py-4 flex flex-col justify-center">
                    <p class="bg-[#FEF8C9] py-2 px-4 mb-5 w-fit text-black text-xl">About</p>
                    <p class="text-2xl lg:text-4xl mb-3 lg:mb-6 w-full text-black text-left">
                        Why Choose Our Trading Services
                    </p>
                    <p class="w-fit text-gray-600 leading-6 lg:leading-8 mb-8">
                        With decades of experience across trading, logistics, 
                        and telecommunications, our group of companies has established 
                        a reputation for excellence, reliability, and innovation.

                    </p>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-8">
                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/buildings.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Headquarters</h3>
                                <p class="text-gray-600">
                                    Access to markets across 50+ countries with established supply chains
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/buildings.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Quality Assurance</h3>
                                <p class="text-gray-600">
                                    Rigorous quality control and compliance with international standards
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/call.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Integrated Logistics</h3>
                                <p class="text-gray-600">
                                    Seamless delivery through our own logistics division
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
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
                <img src="{{ asset('img/home_two.png') }}" class=" w-full pr-4" alt="">
            </div>
        </section>

        <section class="bg-white pb-24">
            <div class="w-10/12 mx-auto text-center trading-three">
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


        gsap.to('.trading-one', {
            scrollTrigger: {
                trigger: '.trading-one',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.trading-two', {
            scrollTrigger: {
                trigger: '.trading-two',
                start: 'top 90%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.trading-three', {
            scrollTrigger: {
                trigger: '.trading-three',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none reverse',
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
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        $('#product_category_slider').slick({
            infinite: true,
            arrows:false,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
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
            arrows:true,
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
