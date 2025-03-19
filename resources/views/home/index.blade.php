@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')


    <div>
        <section class="pb-12 lg:pb-20 bg-[#fefced]">
            <div class="grid grid-cols-1 md:grid-cols-5 w-10/12 mx-auto min-h-fit lg:min-h-[92vh] pt-[12vh]">
                <div class="col-span-3 pr-0 md:pr-12 h-full text-left flex flex-col justify-center order-2 md:order-1">
                    <p class="text-2xl lg:text-4xl xl:text-6xl text-black mb-3 md:mb-5 font-semibold block mr-6 md:mr-12">
                        Your Tursted Partner in 
                        Trading, Logistics & 
                        Teelcom
                    </p>
                    <p class="text-sm lg:text-base text-gray-600 block mr-0 lg:mr-20 pr-0 lg:pr-12 mb-4 lg:mb-8">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab hic facere necessitatibus at aliquid totam culpa saepe consequuntur laborum unde in, adipisci enim delectus quaerat eos minima labore voluptatum?

                    </p>
                    <div class=" flex md:block justify-start">
                        <button class="bg-[#2b4b70] text-sm md:text-base text-white px-4 md:px-8 py-2 rounded-md mr-4 mb-2">
                            Discover Our Service
                        </button>
                        <button class="bg-yellow-400 text-sm md:text-base text-black px-4 md:px-8 py-2 rounded-md mb-2">
                            Contact Us
                        </button>
                    </div>
                </div>
                <div class=" col-span-2 flex items-center order-1 md:order-2">
                    <img class="w-full rounded mt-0 md:mt-8 mb-8 md:mb-0" src="img/home_one.png" alt="">
                </div>
            </div>
        </section>

        <section class="bg-[#f3f3f3]">
            <div class="py-24 w-10/12 mx-auto px-0 home-two">
                <div class="flex justify-center w-full mb-12" >
                    <div>
                        <p class="bg-[#FEF8C9] py-2 px-4 mb-6 w-fit mx-auto text-black">Our Services</p>
                        <p class="text-4xl mb-3 w-full text-black text-center">
                            Conprehensive Business Solutions
                        </p>
                        <p class="w-fit text-black">
                            Our group of companies offers a wide range of services across trading, logistics, and telecomunications.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-x-0 md:gap-x-16 xl:gap-x-8 gap-y-8 ">
                    <div
                        class="bg-white shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Trading</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Global trading solutions with expertise in commodities, goods, and international markets.
                        </p>
                        <button class="text-[#C18C30] w-fit mx-auto">
                            Learn More 
                            <i class="fal fa-long-arrow-right"></i>
                        </button>
                    </div>
                    <div
                        class="bg-white hidden md:block shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Logistics</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                        End-to-end logistics services including transportation, warehousing, and supply chain management.
                        </p>
                        <button class="text-[#C18C30] w-fit mx-auto">
                            Learn More 
                            <i class="fal fa-long-arrow-right"></i>
                        </button>
                    </div>
                    <div
                        class="bg-white hidden xl:block shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Telecom</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Advanced telecommunications solutions for businesses and consumers with cutting-edge technology.

                        </p>
                        <button class="text-[#C18C30] w-fit mx-auto">
                            Learn More 
                            <i class="fal fa-long-arrow-right"></i>
                        </button>
                    </div>
                    <div
                        class="bg-white hidden 2xl:block shadow-[#0004] shadow-md pt-24 pb-20 px-16 xl:px-8 text-center border-t border-gray-200">
                        <img src="{{ asset('img/home_three.png') }}" class="w-fit mx-auto bg-[#fefcde] p-4 rounded-full mb-8" alt="">
                        <div class="text-center">
                            <p class="text-black font-semibold pb-4 text-lg">Trading</p>
                        </div>
                        <p class="text-gray-700 text-sm mb-2 px-8 py-4 text-center">
                            Global trading solutions with expertise in commodities, goods, and international markets.
                        </p>
                        <button class="text-[#C18C30] w-fit mx-auto">
                            Learn More 
                            <i class="fal fa-long-arrow-right"></i>
                        </button>
                    </div>
                    <div id="show_item_container" class="pt-0 block lg:hidden text-center col-span-2 w-full">
                        <button id="show_item" class="text-[#17A89A] text-sm font-semibold w-fit mx-auto py-2 px-4">See More</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-white pt-12 pb-0 lg:pb-12 mb-8 lg:mb-24 home-three">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-10/12 mx-auto">
                <img src="{{ asset('img/home_two.png') }}" class=" w-full pr-4" alt="">
                <div class="px-0 lg:px-12 py-4 flex flex-col justify-center">
                    <p class="bg-[#FEF8C9] py-2 px-4 mb-5 w-fit text-black text-xl">About</p>
                    <p class="text-4xl mb-6 w-full text-black text-left">
                        Our Story
                    </p>
                    <p class="w-fit text-gray-600 leading-8 mb-6">
                        With decades of experience across trading, logistics, 
                        and telecommunications, our group of companies has established 
                        a reputation for excellence, reliability, and innovation.

                    </p>
                    <ul class=" text-lg text-black">
                        <li class="mb-4">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>Global presence with operations in over 20 countries
                        </li>
                        <li class="mb-4">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>Trusted by Fortune 500 companies
                        </li>
                        <li class="mb-4">
                            <i class="far fa-check mr-4 text-[#c18c30] text-xl"></i>Committed to sustainability and ethical business practices
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="mb-12 lg:mb-24 home-four">
            <p class=" w-full text-center text-lg lg:text-3xl font-semibold text-black mb-2">
                Trusted By Leading Companies
            </p>
            <p class=" w-full text-center text-sm lg:text-base text-gray-600 mb-4 lg:mb-0">
                Our clients include some of the most respected organizations across various industries.
            </p>
            <div class=" flex justify-center gap-x-4 lg:gap-x-16 items-center">
                <img src="{{ asset('img/portfolio_five.JPG') }}" class=" w-10 lg:w-52 h-10 lg:h-52" alt="">
                <img src="{{ asset('img/portfolio_four.JPG') }}" class=" w-10 lg:w-36 h-10 lg:h-36" alt="">
                <img src="{{ asset('img/portfolio_three.PNG') }}" class=" w-10 lg:w-28 h-10 lg:h-28 rounded" alt="">
                <img src="{{ asset('img/portfolio_one.png') }}" class=" w-10 lg:w-48 h-10 lg:h-48" alt="">
                <img src="{{ asset('img/portfolio_two.JPG') }}" class=" w-10 lg:w-28 h-10 lg:h-28 hidden lg:block" alt="">
            </div>
        </section>




        <section class="w-10/12 mx-auto px-4 md:px-6 pb-20 home-five">
            <div class="inline-block bg-amber-100 px-4 py-2 mb-6">
                <span class="font-medium">About</span>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-4xl text-black font-bold mb-4">Get in Touch</h2>
                    <p class="text-gray-700 mb-8 max-w-md">
                        Have questions or want to learn more about our services?
                        Our team is ready to assist you.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <img src="img/buildings.png" alt="">
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Headquarters</h3>
                                <p class="text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <!-- Phone icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Phone</h3>
                                <p class="text-gray-600">+95 9 2012345 , +95 9 2022123</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="h-6 w-6 mt-1 flex-shrink-0">
                                <!-- Mail icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-1">Email</h3>
                                <p class="text-gray-600">info@groupco.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white py-12 px-12 rounded-lg shadow-sm border border-gray-200">
                    <form id="contact-form">
                        <div class="grid md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="firstName" class="block text-sm text-black font-medium mb-1">
                                First Name
                                </label>
                                <input
                                type="text"
                                id="firstName" name="first_name"
                                placeholder="First Name"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md bg-white text-black" required
                                />
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm text-black font-medium mb-1">
                                Last Name
                                </label>
                                <input
                                type="text"
                                id="lastName" name="last_name"
                                placeholder="Last Name"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md bg-white text-black" required
                                />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm text-black font-medium mb-1">
                                Email
                            </label>
                            <input
                                type="email"
                                id="email" name="email"
                                placeholder="Email"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md bg-white text-black" required
                            />
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm text-black font-medium mb-1">
                                Message
                            </label>
                            <textarea
                                id="message" name="message"
                                placeholder="Enter Your Message"
                                rows="5"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md bg-white text-black"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-amber-300 hover:bg-amber-400 text-black transition-colors py-3 rounded-md font-medium"
                            >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>







        
        
        
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);


        // gsap.to('.home-one', {
        //     scrollTrigger: {
        //         trigger: '.home-one',
        //         start: 'top 80%',
        //         end: 'bottom center',
        //         toggleActions: 'play none none none',
        //     },
        //     opacity: 1,
        //     y: 0,
        //     duration: 1,
        //     ease: 'power2.out',
        // });

        gsap.to('.home-two', {
            scrollTrigger: {
                trigger: '.home-two',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.home-three', {
            scrollTrigger: {
                trigger: '.home-three',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none reverse',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.home-four', {
            scrollTrigger: {
                trigger: '.home-four',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.home-five', {
            scrollTrigger: {
                trigger: '.home-five',
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

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
