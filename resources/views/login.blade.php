@extends('layout.public')

@section('content')

<x-nav-bar></x-nav-bar>
<section class="bg-[#F8F8F8] min-h-screen flex items-center justify-center px-6 sm:px-10 md:px-[135px] py-10 md:py-[120px]">
<div class="flex flex-col md:flex-row bg-white overflow-hidden w-full max-w-[1170px] md:h-[550px]">
    <div class="flex flex-col justify-center w-full md:w-[585px] p-8 md:p-[75px_93px]">
        <h2 class="text-3xl font-bold text-[#212B36] mb-10">Sign In</h2>

        <form form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-base font-medium text-[#111928] mb-2.5">Username Kamu</label>
                <input type="text" id="email" name="username"
                    class="w-full h-[50px] px-4 border border-[#DFE4EA] rounded-[6px] focus:outline-none focus:border-[#3758F9] focus:ring-1 focus:ring-[#3758F9]" />
            </div>

            <div class="mb-6">
                <label for="password" class="block text-base font-medium text-[#111928] mb-2.5">Your
                    Password</label>
                <input type="password" id="password" name="password"
                    class="w-full h-[50px] px-4 border border-[#DFE4EA] rounded-[6px] focus:outline-none focus:border-[#3758F9] focus:ring-1 focus:ring-[#3758F9]" />
            </div>

            <button type="submit"
                class="w-full h-[50px] bg-green-800 text-white font-medium rounded-[6px] hover:bg-green-900 mb-10">
                Sign In
            </button>

            <div class="flex flex-col sm:flex-row sm:justify-between text-sm font-normal text-[#637381] gap-2 sm:gap-0">
                <a href="#" class="hover:underline">Forget Password?</a>
                <span>Don't have an account? <a href="/register" class="text-[#FAA71B] font-medium hover:underline">Sign
                        Up</a></span>
            </div>
        </form>
    </div>
    <div class="hidden md:flex w-[585px] h-[550px] bg-[#066434] relative items-end px-10 pb-[55px] text-white">
        <div class="text-[28px] ml-3 font-semibold leading-snug">
            <p>Hey<br />Welcome<br />Back</p>
        </div>
        <div class="absolute -left-[177px] top-0 w-[354px] h-[354px] rounded-full bg-gradient-to-b from-white/20 to-white/0"></div>
        <div class="absolute -top-[120px] -left-[90px] w-[495px] h-[495px] rounded-full bg-gradient-to-b from-white/20 to-white/0"></div>
        <div class="absolute bottom-14 right-16 w-[85px] h-[85px] rounded-full bg-gradient-to-b from-white/20 to-white/0"></div>
    </div>
</div>
</section>
@endsection