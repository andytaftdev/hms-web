@extends('layout.public')

@section('content')
<x-nav-bar></x-nav-bar>
<div class="w-screen py-40 flex justify-center items-center">
    <form action="{{ route('register') }}" method="POST" class="w-1/3 flex flex-col rounded-lg relative justify-center items-center p-8 shadow-md shadow-[#e8e8e8] gap-4">
    @csrf
    <img  src="storage/logo.svg"  alt="" class="h-14 mb-8">
    <input type="text" name="username" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Your UserName">
    @error('username')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <input type="email" name="email" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Your email">
    @error('email')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <input type="password" name="password" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Password..">
    @error('password')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <input type="text" name="company" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Your Company Name..">
    @error('company')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <input type="text" name="npwp" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Your Company Number..">
    @error('npwp')
    <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <button type="submit" class="flex justify-center items-center text-[12px] group w-full bg-[#066434] text-white border border-[#066434] font-semibold py-4 mt-5 rounded-xl hover:cursor-pointer">Lanjut</button>
    <div class="flex  text-[#8899A8] text-[16px] font-normal justify-between items-center w-full">
        <div class="h-[2px] bg-[#DFE4EA] rounded-lg w-[40%]"></div>
        <p>Or</p>
        <div class="h-[2px] bg-[#DFE4EA] rounded-lg w-[40%]"></div>
    </div>
    <div class="flex flex-col gap-2 flex justify-center items-center">
        <a href="" class="font-bold text-base text-[#111928]">Forgot Password?</a>
        <p>Already a Member ? <a href="/login" class="font-bold text-base text-[#066434]">Sign In</a></p>
    </div>
    <svg width="65" class="absolute top-0 right-0" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="1.39737" cy="62.6026" r="1.39737" transform="rotate(-90 1.39737 62.6026)" fill="#066434"/>
        <circle cx="1.39737" cy="25.9913" r="1.39737" transform="rotate(-90 1.39737 25.9913)" fill="#066434"/>
        <circle cx="13.6943" cy="62.6026" r="1.39737" transform="rotate(-90 13.6943 62.6026)" fill="#066434"/>
        <circle cx="13.6943" cy="25.9913" r="1.39737" transform="rotate(-90 13.6943 25.9913)" fill="#066434"/>
        <circle cx="25.9911" cy="62.6026" r="1.39737" transform="rotate(-90 25.9911 62.6026)" fill="#066434"/>
        <circle cx="25.9911" cy="25.9913" r="1.39737" transform="rotate(-90 25.9911 25.9913)" fill="#066434"/>
        <circle cx="38.288" cy="62.6026" r="1.39737" transform="rotate(-90 38.288 62.6026)" fill="#066434"/>
        <circle cx="38.288" cy="25.9913" r="1.39737" transform="rotate(-90 38.288 25.9913)" fill="#066434"/>
        <circle cx="1.39737" cy="50.3058" r="1.39737" transform="rotate(-90 1.39737 50.3058)" fill="#066434"/>
        <circle cx="13.6943" cy="50.3058" r="1.39737" transform="rotate(-90 13.6943 50.3058)" fill="#066434"/>
        <circle cx="25.9911" cy="50.3058" r="1.39737" transform="rotate(-90 25.9911 50.3058)" fill="#066434"/>
        <circle cx="38.288" cy="50.3058" r="1.39737" transform="rotate(-90 38.288 50.3058)" fill="#066434"/>
        <circle cx="1.39737" cy="38.0089" r="1.39737" transform="rotate(-90 1.39737 38.0089)" fill="#066434"/>
        <circle cx="13.6943" cy="38.0089" r="1.39737" transform="rotate(-90 13.6943 38.0089)" fill="#066434"/>
        <circle cx="25.9911" cy="38.0089" r="1.39737" transform="rotate(-90 25.9911 38.0089)" fill="#066434"/>
        <circle cx="38.288" cy="38.0089" r="1.39737" transform="rotate(-90 38.288 38.0089)" fill="#066434"/>
        </svg>
        <svg width="65" class="absolute bottom-0 left-0" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.39737" cy="62.6026" r="1.39737" transform="rotate(-90 1.39737 62.6026)" fill="#066434"/>
            <circle cx="1.39737" cy="25.9913" r="1.39737" transform="rotate(-90 1.39737 25.9913)" fill="#066434"/>
            <circle cx="13.6943" cy="62.6026" r="1.39737" transform="rotate(-90 13.6943 62.6026)" fill="#066434"/>
            <circle cx="13.6943" cy="25.9913" r="1.39737" transform="rotate(-90 13.6943 25.9913)" fill="#066434"/>
            <circle cx="25.9911" cy="62.6026" r="1.39737" transform="rotate(-90 25.9911 62.6026)" fill="#066434"/>
            <circle cx="25.9911" cy="25.9913" r="1.39737" transform="rotate(-90 25.9911 25.9913)" fill="#066434"/>
            <circle cx="38.288" cy="62.6026" r="1.39737" transform="rotate(-90 38.288 62.6026)" fill="#066434"/>
            <circle cx="38.288" cy="25.9913" r="1.39737" transform="rotate(-90 38.288 25.9913)" fill="#066434"/>
            <circle cx="1.39737" cy="50.3058" r="1.39737" transform="rotate(-90 1.39737 50.3058)" fill="#066434"/>
            <circle cx="13.6943" cy="50.3058" r="1.39737" transform="rotate(-90 13.6943 50.3058)" fill="#066434"/>
            <circle cx="25.9911" cy="50.3058" r="1.39737" transform="rotate(-90 25.9911 50.3058)" fill="#066434"/>
            <circle cx="38.288" cy="50.3058" r="1.39737" transform="rotate(-90 38.288 50.3058)" fill="#066434"/>
            <circle cx="1.39737" cy="38.0089" r="1.39737" transform="rotate(-90 1.39737 38.0089)" fill="#066434"/>
            <circle cx="13.6943" cy="38.0089" r="1.39737" transform="rotate(-90 13.6943 38.0089)" fill="#066434"/>
            <circle cx="25.9911" cy="38.0089" r="1.39737" transform="rotate(-90 25.9911 38.0089)" fill="#066434"/>
            <circle cx="38.288" cy="38.0089" r="1.39737" transform="rotate(-90 38.288 38.0089)" fill="#066434"/>
            </svg>

    </form>
</div>
@endsection