<section id="sixth-page" class="flex justify-center items-center w-screen py-24">
    <div class="w-4/5 lg:w-3/4 flex flex-col lg:flex-row justify-center items-center gap-12">
        <div class="w-full lg:w-1/2 flex flex-col justify-center ">
            <div class="w-full flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">TEKNOLOGI KAMI</p>
                <p class="font-bold text-[48px] leading-[58px]  text-[#066434] ">Wujudkan Produk Impian Dengan Teknologi Terbaik!</p>
                <div class="w-1/4 flex  space-x-4 mt-6">
                    <button id="prev" class="px-5 py-4 bg-[#066434] text-white rounded-full"><-</button>
                    <button id="next" class="px-5 py-4 bg-[#066434] text-white rounded-full">-></button>
                </div>


            </div>


        </div>
        <div class="w-full lg:w-1/2 h-[520px] overflow-hidden ">
            <div id="carousel1" class="flex w-fit overflow-x-scroll space-x-4 h-full transition-transform duration-500 ease-in-out">
            <div class="w-[400px] h-full bg-center bg-cover bg-no-repeat  rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-[400px] h-full bg-center bg-cover bg-no-repeat  rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-[400px] h-full bg-center bg-cover bg-no-repeat  rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-[400px] h-full bg-center bg-cover bg-no-repeat  rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            <div class="w-[400px] h-full bg-center bg-cover bg-no-repeat  rounded-lg" style="background-image: url('storage/image-hms.webp');"></div>
            </div>

        </div>
    </div>
</section>

<script>
    const carousel1 = document.querySelector('#carousel1');
    const images = carousel1.children;
    console.log(images);
    const prevBtn = document.querySelector('#prev');
    const nextBtn = document.querySelector('#next');
    let index1 = 0;
    const maxIndex = images.length - 1;

    function updateCarousel1() {
        carousel1.style.transform = `translateX(-${index1 * (images[0].offsetWidth + 16)}px)`;
    }

    nextBtn.addEventListener('click', () => {
        if (index1 < maxIndex) {
            index1++;
            updateCarousel1();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (index1 > 0) {
            index1--;
            updateCarousel1();
        }
    });

    setInterval(() => {
        index1 = (index1 < maxIndex) ? index1 + 1 : 0;
        updateCarousel1();
    }, 3000);
</script>
