<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .am {
            transition: 0.4s ease-in-out;
        }
    </style>
</head>

<body class="relative bg-[rgb(245,246,250)] w-screen h-screen flex">
    <div class="sidebar sm:translate-x-0 h-full -translate-x-full w-full sm:w-2/5 absolute sm:relative z-10 lg:w-1/3 xl:w-1/5 flex flex-col am bg-white py-6">
        <img src="storage/logo.svg" alt="" class="h-12 my-4">
        <nav class="nav flex flex-col gap-2">
            <div class="flex w-full  gap-4 items-center">
                <!-- Dashboard -->
                <div
                    class="h-full w-2 rounded-e-md bg-[#066434] transition-all {{ Request::is('dashboard') ? 'translate-x-0' : '-translate-x-2 opacity-0' }}">
                </div>
                <a href="{{ route('dashboard.index') }}"
                    class="block w-full px-10 py-4 mx-6 rounded-md transition-all
                {{ Request::is('dashboard') ? 'bg-[#066434] text-white' : 'text-black' }}">
                    Dashboard
                </a>
            </div>

            <div class="flex w-full gap-4 items-center">
                <!-- Products -->
                <div
                    class="h-full w-2 rounded-e-md bg-[#066434] transition-all {{ Request::is('calculate') ? 'translate-x-0' : '-translate-x-2 opacity-0' }}">
                </div>
                <a href="{{ route('calculate') }}"
                    class="bloc w-full px-10 py-4 mx-6 rounded-md transition-all
                {{ Request::is('calculate') ? 'bg-[#066434] text-white' : 'text-black' }}">
                    Products
                </a>
            </div>

            <hr class="my-4 border-gray-300">

            <div class="flex w-full gap-4 items-center">
                <!-- Settings -->
                <div
                    class="h-full w-2 rounded-e-md bg-[#066434] transition-all {{ Request::is('settings') ? 'translate-x-0' : '-translate-x-2 opacity-0' }}">
                </div>
                <a href="{{ route('dashboard.index') }}"
                    class="block w-full px-10 py-4 mx-6 rounded-md transition-all
                {{ Request::is('settings') ? 'bg-[#066434] text-white' : 'text-black' }}">
                    Settings
                </a>
            </div>

            <div class="flex w-full gap-4 items-center">
                <!-- Logout -->
                <div class="h-full w-2 rounded-e-md bg-[#066434] transition-all opacity-0"></div>
                <a href="{{ route('dashboard.index') }}"
                    class="block w-full px-10 py-4 mx-6 rounded-md transition-all text-black">
                    Logout
                </a>
            </div>
        </nav>
    </div>
    <div class="main-content flex flex-col w-full sm:w-3/5 lg:w-2/3 xl:w-4/5">
        <div class="flex h-[10%] px-12 items-center justify-between bg-white">
            <div class="relative w-full  max-w-[140px] md:max-w-[250px] ">
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-full pl-10 pr-4 py-3 border border-[#d5d5d5] rounded-full bg-[#F5F6FA] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-lg md:text-base"
                >
                <svg
                    class=" overflow-visible absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 md:w-5 md:h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A8.5 8.5 0 1010.5 2a8.5 8.5 0 006.15 14.65z" />
                </svg>
            </div>
            <div class="flex gap-4 items-center justify-center">
                <div class="w-16 h-16 rounded-full bg-[#066434]"></div>
                <div class="hidden md:flex flex-col justify-between gap-1">
                    <p class="font-semibold text-[16px]  text-[#404040]">Monit Eay</p>
                    <p class="font-semibold text-[14px]  text-[#565656]">Monit Eay</p>
                </div>
                <div class="flex w-6 h-6  rounded-full  justify-center items-center bg-transparent border-[#5C5C5C] border">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                      </svg>

                </div>
            </div>


        </div>

        <div class="flex flex-col w-full overflow-hidden h-[90%] ">
            <div class="flex-1 overflow-y-auto p-8">
                @yield('content')
            </div>
        </div>
    </div>
    <div id="sidebar-button" class="z-20 p-4 rounded-full bg-[#066434] absolute bottom-8 left-4 am flex sm:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" id="icon-sidebar" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" class="am size-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
    </div>

</body>
<script>
    sidebarButton = document.getElementById("sidebar-button");
    sidebar = document.querySelector(".sidebar");
    iconSidebar = document.getElementById("icon-sidebar");
    sidebarButton.addEventListener("click", () => {
        iconSidebar.classList.toggle("rotate-180");
        sidebar.classList.toggle("-translate-x-full");
    });
    function setActive(clickedElement) {
        document.querySelectorAll("nav a").forEach((el) => {
            el.classList.remove("active");
        });
        clickedElement.classList.add("active");
    }
</script>

</html>
