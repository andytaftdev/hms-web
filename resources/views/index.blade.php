@extends('layout.public')

@section('content')
<x-nav-bar></x-nav-bar>

<section id="hero-page">
    <div class="w-screen flex flex-col lg:flex-row justify-center items-center ">
        <div class="w-full lg:w-1/2 h-[650px] md:h-[900px] bg-[#066434] flex flex-col justify-center items-center">
            <div class="w-4/5 md:w-[60%] flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">CV. HAGIA MITRA SUKSES</p>
                <p class="font-bold text-[48px] leading-[58px]  text-white ">LAHIR SEBAGAI SOLUSI</p>
                <p class="font-normal text-16px] leading-6  text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna, scelerisque vitae augue et, cursus placerat lorem. In nisi lacus, eleifend tincidunt quam et, consequat semper.</p>
                <a href="" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#FAA71B] font-medium leading-6 text-[16px] text-white">
                    BAHAN BAKU KAMI ->
                </a>
            </div>

            {{-- <div class="py-2 px-4 bg-[#FAA71B] font"></div> --}}
        </div>
        <div class="w-full lg:w-1/2 bg-center bg-cover bg-no-repeat h-[650px] md:h-[900px] " style="background-image: url('storage/image-hms.webp');">

        </div>
    </div>
</section>
<section id="second-page" class=" flex justify-center items-center w-screen py-24">
    <div class="w-4/5 xl:w-3/4 flex flex-col lg:flex-row justify-center items-center gap-12">
        <div class=" w-full lg:w-1/2 flex flex-col justify-center ">
            <div class="w-11/12 flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">TENTANG PERUSAHAAN</p>
                <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Kenali Perjalan Kami</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">HMS telah menjadi mitra andalan sejak tahun 2022 dalam menyediakan layanan maklon produk herbal berkualitas. Berkomitmen untuk memberikan solusi kesehatan alami, HMS hadir untuk membantu para pelaku bisnis menciptakan produk herbal yang bermanfaat bagi masyarakat luas.<br><br>
                    Kami berkomitmen untuk membuka peluang menyebarkan manfaat kesehatan alami ke seluruh penjuru negeri, membawa keberkahan dan kesejahteraan bagi banyak orang melalui kolaborasi yang harmonis.</p>
                <a href="/tentang" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#066434] font-medium leading-6 text-[16px] text-white">
                    SELENGKAPNYA ->
                </a>
            </div>


        </div>
        <div class="w-full lg:w-1/2 h-fit md:h-[520px] grid grid-cols-1 md:grid-cols-2 gap-5 ">
            <div class="w-full h-[250px] md:h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] md:h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] md:h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-full h-[250px] md:h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>
        </div>
    </div>
</section>
<section id="third-page" class="flex justify-center items-center w-screen py-24">
    <div class="w-4/5 lg:w-3/4 flex flex-col-reverse lg:flex-row justify-center items-center gap-12">
        <div class=" flex flex-col justify-center items-center lg:items-start  w-full lg:w-1/2 ">
            <div class="relative flex flex-col justify-center items-center w-4/5 lg:w-2/3 max-w-2xl  overflow-hidden">
                <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
                    <img src="storage/image-hms.webp" class="w-full">
                    <img src="storage/image-hms.webp" class="w-full">
                    <img src="storage/image-hms.webp" class="w-full">
                    <img src="storage/image-hms.webp" class="w-full">
                </div>

                <!-- Bulatan Indikator -->
                <div class="relative py-4  transform  flex space-x-2">
                    <button class="dot w-4 h-4 bg-gray-400/20 rounded-full"></button>
                    <button class="dot w-4 h-4 bg-gray-400/20 rounded-full"></button>
                    <button class="dot w-4 h-4 bg-gray-400/20 rounded-full"></button>
                    <button class="dot w-4 h-4 bg-gray-400/20 rounded-full"></button>
                </div>
            </div>

        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center ">
            <div class="w-full flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">LAYANAN KAMI</p>
                <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Ciptakan Produk Herbal Berkualitas Tinggi!</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">Sudah siap membawa manfaat kesehatan alami untuk masyarakat luas? Bergabunglah bersama HMS, mitra terpercaya sejak 2022 dalam layanan maklon produk herbal berkualitas.<br><br>
                 Dengan pengalaman dan komitmen kuat, kami siap mendukung bisnis Anda menghadirkan suplemen kesehatan dan obat tradisional yang aman, efektif, dan bersertifikasi.</p>
                <a href="/layanan" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#066434] font-medium leading-6 text-[16px] text-white">
                    SELENGKAPNYA ->
                </a>
            </div>


        </div>

    </div>
</section>


<section id="fourth-page" class="flex justify-center items-center w-screen py-24">
    <div class=" w-4/5 lg:w-3/4 flex flex-col lg:flex-row justify-center items-center gap-12">
        <div class="w-full lg:w-1/2 flex flex-col justify-center ">
            <div class="w-full flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">TEKNOLOGI KAMI</p>
                <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Wujudkan Produk Impian
                    Dengan Teknologi Terbaik!</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">Perusahaan kami didukung oleh teknologi mutakhir, tim ahli yang berpengalaman, dan komitmen terhadap standar kualitas tinggi dalam setiap tahap produksi</p>
                <a href="/tentang" class="py-3 rounded-full px-6 mt-5 w-fit bg-[#066434] font-medium leading-6 text-[16px] text-white">
                    SELENGKAPNYA ->
                </a>
            </div>


        </div>
        <div class="w-full lg:w-1/2 h-[520px]  ">
            <div class="w-full h-full bg-center bg-cover bg-no-repeat rounded-[10px]" style="background-image: url('storage/image-hms.webp');"></div>

        </div>
    </div>
</section>

<x-legality></x-legality>

<x-trust></x-trust>
<x-banner></x-banner>
<x-faq></x-faq>

<x-footer></x-footer>


<script>
    const carousel = document.querySelector('#carousel');
    const dots = document.querySelectorAll('.dot');
    let index = 0;
    const totalSlides = dots.length;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-[#066434]', i === index);
            dot.classList.toggle('bg-gray-400/20', i !== index);
        });
    }

    function nextSlide() {
        index = (index + 1) % totalSlides;
        updateCarousel();
    }

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            index = i;
            updateCarousel();
        });
    });

    setInterval(nextSlide, 4000); // Auto-slide setiap 3 detik
</script>




@ends
