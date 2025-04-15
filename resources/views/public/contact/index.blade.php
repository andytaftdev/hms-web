@extends('layout.public')

@section('content')
<x-nav-bar></x-nav-bar>
<x-header >Hubungi Kami</x-header>
<section id="kerjasama-page " class="flex justify-center relative items-center w-screen py-24">
    <div class="w-4/5 md:w-3/4 relative flex lg:flex-row flex-col  gap-14   ">
        <div class="w-full lg:w-1/2 flex flex-col gap-8">
            <div class="w-full flex flex-col justify-center gap-4">
                <p class="font-semibold text-[28px] leading-10  text-[#96BF00] italic">TENTANG PERUSAHAAN</p>
                <p class="font-bold text-[40px] leading-[52px]  text-[#066434] ">Lahir Sebagai Solusi</p>
                <p class="font-normal text-16px] leading-6  text-[#637381] ">Perusahaan kami didukung oleh teknologi mutakhir, tim ahli yang berpengalaman, dan komitmen terhadap standar kualitas tinggi dalam setiap tahap produksi</p>

            </div>
            <div class="w-5/6 md:w-[70%] flex flex-col gap-6">
                <div class="flex gap-6">
                    <div class="h-18 w-18 flex justify-center items-center bg-[#066434]">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.4499 9.7L17.8999 1.6C16.7499 0.8 15.2499 0.8 14.0999 1.6L2.5499 9.7C1.6499 10.3 1.1499 11.35 1.1499 12.4V27.75C1.1499 29.55 2.6499 31.05 4.4499 31.05H27.5999C29.3999 31.05 30.8999 29.55 30.8999 27.75V12.4C30.8999 11.3 30.3499 10.3 29.4499 9.7ZM20.5499 28.75H11.4499V23C11.4499 22.65 11.5999 22.35 11.8999 22.15L15.3999 19.7C15.7499 19.45 16.2499 19.45 16.5999 19.7L20.0999 22.15C20.3999 22.35 20.5499 22.65 20.5499 23V28.75ZM28.6499 27.7C28.6499 28.3 28.1999 28.75 27.5999 28.75H22.7999V23C22.7999 21.95 22.2999 20.9 21.3999 20.3L17.8999 17.85C16.7499 17.05 15.2499 17.05 14.0999 17.85L10.5999 20.3C9.6999 20.9 9.1999 21.95 9.1999 23V28.75H4.3999C3.7999 28.75 3.3499 28.3 3.3499 27.7V12.4C3.3499 12.05 3.4999 11.75 3.7999 11.55L15.3999 3.4C15.5999 3.25 15.7999 3.2 15.9999 3.2C16.1999 3.2 16.3999 3.25 16.5999 3.4L28.1999 11.5C28.4999 11.7 28.6499 12 28.6499 12.35V27.7Z" fill="#FAA71B"/>
                            </svg>

                    </div>
                    <div class="flex flex-col gap-3 text-[#111928]">
                        <p class="text-[18px] leading-6 font-semibold">Our Location</p>
                        <p class="text-[16px] leading-6 text-[#637381] font-normal text-wrap">99 S.t Jomblo Park </p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="h-18 w-18 flex justify-center items-center bg-[#066434]">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_238_2352)">
                            <path d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.20003 22.8499C5.85003 19.4999 3.25003 15.7499 1.90003 12.2999C0.400031 8.59994 0.550031 5.54994 2.30003 3.84994C2.35003 3.79994 2.45003 3.74994 2.50003 3.69994L6.70003 1.19994C7.75003 0.599942 9.10003 0.899942 9.80003 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.80003 5.54994C2.85003 6.59994 2.90003 8.74994 4.00003 11.4999C5.25003 14.6499 7.65003 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.90003 14.1499 8.50003 11.9499C7.85003 10.8999 8.10003 9.54994 9.10003 8.84994L10.9 7.59994V7.54994L7.95003 3.14994C7.95003 3.09994 7.90003 3.09994 7.85003 3.14994L3.80003 5.54994Z" fill="#FAA71B"/>
                            <path d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z" fill="#FAA71B"/>
                            <path d="M24.3498 14.7002C23.7998 14.7002 23.2998 14.3002 23.2498 13.7002C22.9498 11.0002 20.8498 8.90018 18.1498 8.55018C17.5498 8.50018 17.0998 7.90018 17.1498 7.30018C17.1998 6.70018 17.7998 6.25018 18.3998 6.30018C22.1498 6.75018 25.0498 9.65018 25.4998 13.4002C25.5498 14.0002 25.1498 14.5502 24.4998 14.6502C24.3998 14.7002 24.3498 14.7002 24.3498 14.7002Z" fill="#FAA71B"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_238_2352">
                            <rect width="32" height="32" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>


                    </div>
                    <div class="flex flex-col gap-3 text-[#111928]">
                        <p class="text-[18px] leading-6 font-semibold">Phone Number</p>
                        <p class="text-[16px] leading-6 text-[#637381] font-normal">(+62)81 414 257 9980</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="h-18 w-18 flex justify-center items-center bg-[#066434]">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.0001 4.7998H4.0001C2.3001 4.7998 0.850098 6.1998 0.850098 7.9498V24.1498C0.850098 25.8498 2.2501 27.2998 4.0001 27.2998H28.0001C29.7001 27.2998 31.1501 25.8998 31.1501 24.1498V7.8998C31.1501 6.1998 29.7001 4.7998 28.0001 4.7998ZM28.0001 7.0498C28.0501 7.0498 28.1001 7.0498 28.1501 7.0498L16.0001 14.8498L3.8501 7.0498C3.9001 7.0498 3.9501 7.0498 4.0001 7.0498H28.0001ZM28.0001 24.9498H4.0001C3.5001 24.9498 3.1001 24.5498 3.1001 24.0498V9.2498L14.8001 16.7498C15.1501 16.9998 15.5501 17.0998 15.9501 17.0998C16.3501 17.0998 16.7501 16.9998 17.1001 16.7498L28.8001 9.2498V24.0998C28.9001 24.5998 28.5001 24.9498 28.0001 24.9498Z" fill="#FAA71B"/>
                            </svg>


                    </div>
                    <div class="flex flex-col gap-3 text-[#111928]">
                        <p class="text-[18px] leading-6 font-semibold">Email Address</p>
                        <p class="text-[16px] leading-6 text-[#637381] font-normal">info@yourdomain.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <form class="w-full lg::w-3/4 p-6 bg-white flex flex-col justify-center shadow-md rounded-xl gap-4">
                <div class="w-full flex flex-col gap-2">
                    <label class="text-[14px] font-semibold text-[#637381]" for="">Your Name</label>
                    <input class="w-full rounded-lg py-2 px-4 border border-[#DFE4EA] text-[#637381]" type="text" name="name" id="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="text-[14px] font-semibold text-[#637381]" for="">Your Email</label>
                    <input class="w-full rounded-lg py-2 px-4 border border-[#DFE4EA] text-[#637381]" type="email" name="email" id="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="text-[14px] font-semibold text-[#637381]" for="">Your Phone</label>
                    <input class="w-full rounded-lg py-2 px-4 border border-[#DFE4EA] text-[#637381]" type="number" name="name" id="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="text-[14px] font-semibold text-[#637381]" for="">Your Message</label>
                    <textarea class="w-full rounded-lg py-2 px-4 border border-[#DFE4EA] text-[#637381]" type="text" name="message" id="">
                    </textarea>
                </div>
                <button class="w-full bg-[#066434] text-white text-[16px] font font-semibold py-4 mt-2 rounded-xl">Send Message</button>


            </form>
        </div>
    </div>
    <svg class="absolute -z-10 top-12 right-[15%]" width="115" height="251" viewBox="0 0 115 251" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 100C15 44.7715 15 0 15 0C70.2285 0 115 44.7715 115 100C115 100 115 100 15 100Z" fill="#FAA71B"/>
        <circle cx="104" cy="249" r="1.66667" transform="rotate(180 104 249)" fill="#FAA71B"/>
        <circle cx="104" cy="234.333" r="1.66667" transform="rotate(180 104 234.333)" fill="#FAA71B"/>
        <circle cx="104" cy="219.666" r="1.66667" transform="rotate(180 104 219.666)" fill="#FAA71B"/>
        <circle cx="104" cy="205" r="1.66667" transform="rotate(180 104 205)" fill="#FAA71B"/>
        <circle cx="104" cy="190.333" r="1.66667" transform="rotate(180 104 190.333)" fill="#FAA71B"/>
        <circle cx="104" cy="162" r="1.66667" transform="rotate(180 104 162)" fill="#FAA71B"/>
        <circle cx="104" cy="133" r="1.66667" transform="rotate(180 104 133)" fill="#FAA71B"/>
        <circle cx="104" cy="176" r="1.66667" transform="rotate(180 104 176)" fill="#FAA71B"/>
        <circle cx="104" cy="147.666" r="1.66667" transform="rotate(180 104 147.666)" fill="#FAA71B"/>
        <circle cx="104" cy="118.666" r="1.66667" transform="rotate(180 104 118.666)" fill="#FAA71B"/>
        <circle cx="89.3333" cy="249" r="1.66667" transform="rotate(180 89.3333 249)" fill="#FAA71B"/>
        <circle cx="89.3333" cy="234.333" r="1.66667" transform="rotate(180 89.3333 234.333)" fill="#FAA71B"/>
        <circle cx="89.3333" cy="219.666" r="1.66667" transform="rotate(180 89.3333 219.666)" fill="#FAA71B"/>
        <circle cx="89.3333" cy="205" r="1.66667" transform="rotate(180 89.3333 205)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="190.333" r="1.66667" transform="rotate(180 89.3338 190.333)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="162" r="1.66667" transform="rotate(180 89.3338 162)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="133" r="1.66667" transform="rotate(180 89.3338 133)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="176" r="1.66667" transform="rotate(180 89.3338 176)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="147.666" r="1.66667" transform="rotate(180 89.3338 147.666)" fill="#FAA71B"/>
        <circle cx="89.3338" cy="118.666" r="1.66667" transform="rotate(180 89.3338 118.666)" fill="#FAA71B"/>
        <circle cx="74.6673" cy="249" r="1.66667" transform="rotate(180 74.6673 249)" fill="#FAA71B"/>
        <circle cx="31.0003" cy="249" r="1.66667" transform="rotate(180 31.0003 249)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="234.333" r="1.66667" transform="rotate(180 74.6668 234.333)" fill="#FAA71B"/>
        <circle cx="31.0003" cy="234.333" r="1.66667" transform="rotate(180 31.0003 234.333)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="219.666" r="1.66667" transform="rotate(180 74.6668 219.666)" fill="#FAA71B"/>
        <circle cx="31.0003" cy="219.666" r="1.66667" transform="rotate(180 31.0003 219.666)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="205" r="1.66667" transform="rotate(180 74.6668 205)" fill="#FAA71B"/>
        <circle cx="31.0003" cy="205" r="1.66667" transform="rotate(180 31.0003 205)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="190.333" r="1.66667" transform="rotate(180 74.6668 190.333)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="190.333" r="1.66667" transform="rotate(180 30.9998 190.333)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="162" r="1.66667" transform="rotate(180 74.6668 162)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="162" r="1.66667" transform="rotate(180 30.9998 162)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="133" r="1.66667" transform="rotate(180 74.6668 133)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="133" r="1.66667" transform="rotate(180 30.9998 133)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="176" r="1.66667" transform="rotate(180 74.6668 176)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="176" r="1.66667" transform="rotate(180 30.9998 176)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="147.666" r="1.66667" transform="rotate(180 74.6668 147.666)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="147.666" r="1.66667" transform="rotate(180 30.9998 147.666)" fill="#FAA71B"/>
        <circle cx="74.6668" cy="118.666" r="1.66667" transform="rotate(180 74.6668 118.666)" fill="#FAA71B"/>
        <circle cx="30.9998" cy="118.666" r="1.66667" transform="rotate(180 30.9998 118.666)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="249" r="1.66667" transform="rotate(180 60.0003 249)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="249" r="1.66667" transform="rotate(180 16.3333 249)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="234.333" r="1.66667" transform="rotate(180 60.0003 234.333)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="234.333" r="1.66667" transform="rotate(180 16.3333 234.333)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="219.666" r="1.66667" transform="rotate(180 60.0003 219.666)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="219.666" r="1.66667" transform="rotate(180 16.3333 219.666)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="205" r="1.66667" transform="rotate(180 60.0003 205)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="205" r="1.66667" transform="rotate(180 16.3333 205)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="190.333" r="1.66667" transform="rotate(180 60.0003 190.333)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="190.333" r="1.66667" transform="rotate(180 16.3333 190.333)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="162" r="1.66667" transform="rotate(180 60.0003 162)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="162" r="1.66667" transform="rotate(180 16.3333 162)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="133" r="1.66667" transform="rotate(180 60.0003 133)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="133" r="1.66667" transform="rotate(180 16.3333 133)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="176" r="1.66667" transform="rotate(180 60.0003 176)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="176" r="1.66667" transform="rotate(180 16.3333 176)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="147.666" r="1.66667" transform="rotate(180 60.0003 147.666)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="147.666" r="1.66667" transform="rotate(180 16.3333 147.666)" fill="#FAA71B"/>
        <circle cx="60.0003" cy="118.666" r="1.66667" transform="rotate(180 60.0003 118.666)" fill="#FAA71B"/>
        <circle cx="16.3333" cy="118.666" r="1.66667" transform="rotate(180 16.3333 118.666)" fill="#FAA71B"/>
        <circle cx="45.3333" cy="249" r="1.66667" transform="rotate(180 45.3333 249)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="249" r="1.66667" transform="rotate(180 1.66683 249)" fill="#FAA71B"/>
        <circle cx="45.3333" cy="234.333" r="1.66667" transform="rotate(180 45.3333 234.333)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="234.333" r="1.66667" transform="rotate(180 1.66683 234.333)" fill="#FAA71B"/>
        <circle cx="45.3333" cy="219.666" r="1.66667" transform="rotate(180 45.3333 219.666)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="219.666" r="1.66667" transform="rotate(180 1.66683 219.666)" fill="#FAA71B"/>
        <circle cx="45.3333" cy="205" r="1.66667" transform="rotate(180 45.3333 205)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="205" r="1.66667" transform="rotate(180 1.66683 205)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="190.333" r="1.66667" transform="rotate(180 45.3338 190.333)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="190.333" r="1.66667" transform="rotate(180 1.66683 190.333)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="162" r="1.66667" transform="rotate(180 45.3338 162)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="162" r="1.66667" transform="rotate(180 1.66683 162)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="133" r="1.66667" transform="rotate(180 45.3338 133)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="133" r="1.66667" transform="rotate(180 1.66683 133)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="176" r="1.66667" transform="rotate(180 45.3338 176)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="176" r="1.66667" transform="rotate(180 1.66683 176)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="147.666" r="1.66667" transform="rotate(180 45.3338 147.666)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="147.666" r="1.66667" transform="rotate(180 1.66683 147.666)" fill="#FAA71B"/>
        <circle cx="45.3338" cy="118.666" r="1.66667" transform="rotate(180 45.3338 118.666)" fill="#FAA71B"/>
        <circle cx="1.66683" cy="118.666" r="1.66667" transform="rotate(180 1.66683 118.666)" fill="#FAA71B"/>
        </svg>

</section>
<section id="kerjasama-page " class="flex justify-center relative items-center w-screen py-24">
    <div class=" w-3/4 relative flex  gap-14   ">
        <div class="mapouter rounded-xl overflow-hidden"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=652&amp;height=400&amp;hl=en&amp;q=CV Hagia&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div>
    </div>
</section>

<x-faq></x-faq>
<x-footer></x-footer>
@endsection
