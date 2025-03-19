<div class=" fixed top-0 w-full z-[80] navbar px-0 bg-white hidden md:block shadow-sm" id="navbar">
    <div class="w-10/12 mx-auto flex justify-between py-1.5 items-center">
        <div class="flex self-center">
            <img src="{{ asset('img/logo.png') }}" class="w-20 my-auto" alt="">
        </div>
        <div class="">
            <ul class="flex gap-x-2 lg:gap-x-6 navbar-ul text-black">
                <li>
                    <a href="/home" class=" @yield('home') " id="home_navbar">
                            Home
                    </a>
                </li>
                <!-- <li class="block">
                    <details class="dropdown">
                        <summary class="btn bg-white border-0 px-0 pt-0 pb-1.5 m-1 h-fit min-h-fit text-black font-normal text-base">Services</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a href="/trading">Trading</a></li>
                            <li><a href="/logistics">Logistics</a></li>
                            <li><a href="/telecom">Telecom</a></li>
                        </ul>
                    </details>
                    <a href="#" class=" ">
                            Services
                    </a>
                </li> -->
                <li>
                    <div class="dropdown">
                        <div tabindex="0" role="button" class=" ">Services</div>
                        <ul tabindex="0" class="dropdown-content menu bg-white rounded-md z-1 w-52 p-2 shadow-md">
                            <li><a href="/trading" class=" focus:text-black active:!text-black active:!bg-white">Trading</a></li>
                            <li><a href="/logistics" class=" focus:text-black active:!text-black active:!bg-white">Logistics</a></li>
                            <li><a href="/telecom" class=" focus:text-black active:!text-black active:!bg-white">Telecom</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class=" ">
                            About
                    </a>
                </li>
                <li>
                    <a href="#" class=" ">
                            Contacts
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <button class="bg-yellow-400 px-4 py-2 text-sm text-gray-600 rounded-md">
                Contact Us
            </button>
        </div>
    </div>
</div>



<div class="grid md:hidden drawer z-[40] n">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content fixed top-0 left-0 right-0 bg-white shadow flex justify-between">
        <select id="language-selector-mobile" class="bg-transparent text-gray-600 px-2 ml-2 py-1 rounded-md text-sm focus:outline-none focus:ring-0 focus:shadow-none">
            <option value="en">en</option>
            <option value="mm">mm</option>
        </select>
        <label for="my-drawer" class="py-1 px-4 m-2 block text-black w-fit">
            <i class="fas fa-bars"></i>
        </label>
    </div>
    
    <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white text-black min-h-full w-[40%] min-w-[156px] py-4 px-2">
            <li>
                <a href="/home" class=" @yield('home-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Home
                </a>
            </li>
            <li class="">
                <a href="#" class=" @yield('service-sidebar') service_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Services
                </a>
            </li>
            <li>
                <a href="/project" class=" @yield('project-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    About
                </a>
            </li>
            <li>
                <a href="#" class=" portfolio_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Contacts
                </a>
            </li>
            <li>
                <a href="/trading" class=" @yield('trading-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Trading
                </a>
            </li>
            <li>
                <a href="/logistics" class=" testimonial_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Logistics
                </a>
            </li>
            <li>
                <a href="/telecom" class=" contact_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Telecom
                </a>
            </li>
        </ul>
    </div>
</div>