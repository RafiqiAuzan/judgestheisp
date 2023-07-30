<navbar class="fixed z-20 w-full bg-[#F6F6F6] backdrop-blur bg-opacity-70" x-cloak x-data="{ navmenu: false }">
    <div class="container mx-auto gap-[85px] px-2 lg:flex lg:items-center lg:justify-between">
        <div class="flex justify-between">
            {{-- Kiri --}}
            <div class="">
                <a href="/"><img class=" w-40" src="{{ asset('img/navbar/logos.png') }}" alt="Logo"></a>
            </div>
            {{-- Kanan --}}
            <div class="flex my-4">
                <span class="p-5 lg:hidden" @click="navmenu = ! navmenu">
                    <i class="h-6 fa-solid fa-bars"></i>
                </span>
            </div>
        </div>
        {{-- Tampilan mobile masih menunggu design  --}}
        <div :class="{ 'hidden lg:block': !navmenu }">
            <div class="bg-[#F6F6F6] lg:bg-opacity-0 absolute py-4 rounded-lg max-w-[150px] w-full right-7 top-full lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                <div class=" lg:items-center">
                    <ul class="lg:flex">
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#41B853] hover:font-semibold"
                                href="/">Home</a></li>
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#41B853] hover:font-semibold"
                                href="/aboutus">About us</a></li>
                        <li><button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#41B853] hover:font-semibold">Providers
                                <svg class="w-2.5 h-8 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                          <li>
                                            <a href="/biznet" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#41B853]">Biznet</a>
                                          </li>
                                          <li>
                                            <a href="/firstmedia" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#41B853]">First Media</a>
                                          </li>
                                          <li>
                                            <a href="/indihome" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#41B853]">Indihome</a>
                                          </li>
                                          <li>
                                            <a href="/myrepublic" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#41B853]">Myrepublic</a>
                                          </li>
                                          <li>
                                            <a href="/xlhome" class="block px-4 py-2 hover:bg-gray-100 hover:text-[#41B853]">XlHome</a>
                                          </li>
                                        </ul>
                                    </div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</navbar>
