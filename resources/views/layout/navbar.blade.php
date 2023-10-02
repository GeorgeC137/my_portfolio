{{-- Navigation starts here  --}}
<header x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 w-full bg-white z-50 flex items-center shadow-md h-24 dark:bg-slate-900">
    <div class="container">
        <div class="flex items-center justify-between -mx-4 relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="flex items-center py-2 w-full">
                    <img src="{{ url('/img/user-logo.png') }}" alt="logo"
                        class="w-[48px] lg:w-[64px] inline-block dark:hidden">
                    <img src="{{ url('/img/user-logo-white.png') }}" alt="logo"
                        class="w-[48px] lg:w-[64px] hidden dark:inline-block">
                    <span class="text-xl xl:text-2xl font-bold dark:text-white text-[#0c7187] ml-4">GeorgeOmollo</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden'"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:rigt-4 lg:block lg:static lg:shadow-none"
                        id="navbarCollapse">
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
{{-- Navigation ends here  --}}
