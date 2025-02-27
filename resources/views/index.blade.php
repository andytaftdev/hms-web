@extends('layout.public')

@section('content')
<x-nav-bar></x-nav-bar>

<section id="hero-page">
    <div class="w-screen flex justify-center items-center ">
        <div class="w-1/2 h-[90vh] bg-[#066434] flex flex-col justify-center items-center">
            <div class="w-[60%] flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">CV. HAGIA MITRA SUKSES</p>
                <p class="font-bold text-[48px] leading-[58px]  text-white ">LAHIR SEBAGAI SOLUSI</p>
                <p class="font-normal text-16px] leading-6  text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna, scelerisque vitae augue et, cursus placerat lorem. In nisi lacus, eleifend tincidunt quam et, consequat semper.</p>
                <a href="" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#FAA71B] font-medium leading-6 text-[16px] text-white">
                    BAHAN BAKU KAMI ->
                </a>
            </div>

            {{-- <div class="py-2 px-4 bg-[#FAA71B] font"></div> --}}
        </div>
        <div class="w-1/2 bg-center bg-cover bg-no-repeat h-[90vh] " style="background-image: url('storage/image-hms.webp');">

        </div>
    </div>
</section>
<section id="second-page" class=" px-40 w-screen py-32">
    <div class=" w-full flex justify-center items-center">
        <div class=" w-1/2 flex flex-col justify-center ">
            <div class="w-10/12 flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">TENTANG PERUSAHAAN</p>
                <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Kenali Perjalan Kami</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">HMS telah menjadi mitra andalan sejak tahun 2022 dalam menyediakan layanan maklon produk herbal berkualitas. Berkomitmen untuk memberikan solusi kesehatan alami, HMS hadir untuk membantu para pelaku bisnis menciptakan produk herbal yang bermanfaat bagi masyarakat luas.<br><br>
                    Kami berkomitmen untuk membuka peluang menyebarkan manfaat kesehatan alami ke seluruh penjuru negeri, membawa keberkahan dan kesejahteraan bagi banyak orang melalui kolaborasi yang harmonis.</p>
                <a href="" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#066434] font-medium leading-6 text-[16px] text-white">
                    SELENGKAPNYA ->
                </a>
            </div>


        </div>
        <div class="w-1/2 h-[60vh] grid grid-cols-2 gap-5 ">
            <div class="w-full h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
        </div>
    </div>
</section>
@endsection
