@extends('layout.public')

@section('content')
<x-navbar></x-navbar>
<x-header>LAYANAN KAMI</x-header>
<x-tujuan></x-tujuan>
<section id="packaging-page " class="flex justify-center relative items-center w-screen py-24">
    <div class="w-5/6 md:w-3/4 relative flex flex-col  gap-10   ">
        <div class="w-full flex flex-col gap-3">
            <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Packaging</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">Kami menawarkan layanan packaging dan desain yang dirancang untuk memberikan tampilan profesional dan menarik bagi produk Anda. Dari kemasan yang fungsional hingga estetika desain yang merepresentasikan identitas merek, kami memastikan setiap detail sesuai standar kualitas dan kebutuhan pasar.
                    Kami menyediakan berbagai sediaan produk yang dapat disesuaikan dengan kebutuhan pasar, mulai dari kapsul, tablet, cairan, serbuk, hingga tea bag. Setiap sediaan dikembangkan melalui proses produksi yang ketat, memastikan kualitas, keamanan, dan efektivitas produk
                    <br><br>
                </p>
        </div>
        <div class="w-full grid md:grid-cols-2 grid-cols-1 lg:grid-cols-4 gap-4 ">
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>

        </div>
    </div>
</section>
<section id="provision-page " class="flex justify-center relative items-center w-screen py-24">
    <div class=" w-5/6 md:w-3/4 relative flex flex-col  gap-10   ">
        <div class="w-full flex flex-col gap-3">
            <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Provision</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">Kami menawarkan layanan packaging dan desain yang dirancang untuk memberikan tampilan profesional dan menarik bagi produk Anda. Dari kemasan yang fungsional hingga estetika desain yang merepresentasikan identitas merek, kami memastikan setiap detail sesuai standar kualitas dan kebutuhan pasar.
                    Kami menyediakan berbagai sediaan produk yang dapat disesuaikan dengan kebutuhan pasar, mulai dari kapsul, tablet, cairan, serbuk, hingga tea bag. Setiap sediaan dikembangkan melalui proses produksi yang ketat, memastikan kualitas, keamanan, dan efektivitas produk
                    <br><br>
                </p>
        </div>
        <div class="w-full grid  md:grid-cols-2 grid-cols-1 lg:grid-cols-4 gap-4 ">
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] bg-center bg-cover bg-no-repeat rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>

        </div>
    </div>
</section>
<x-trust></x-trust>
<section id="alur-page " class="flex justify-center relative items-center w-screen py-6 md:py-24">
    <div class=" w-3/4 relative flex flex-col  gap-10   ">
        <div class="w-full flex justify-center items-center">
            <img src="storage/alur-image.webp" class="w-full lg:w-3/4" alt="">
        </div>
    </div>
</section>

<x-banner></x-banner>

<x-faq></x-faq>

<x-footer></x-footer>

@endsection
