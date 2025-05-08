@extends('layout.public')

@section('content')

<section class="bg-[#F8F8F8] min-h-screen flex items-center justify-center px-4 md:px-[60px]">
    <div class="w-full max-w-[1170px]">
        <h1 class="text-[#212B36] text-[16px] md:text-[22px] font-semibold text-center mt-[30px] mb-[30px] px-4">
            Terima kasih telah mendaftar menjadi member
        </h1>
        <div class="w-full max-w-[730px] h-[225px] bg-[#D9D9D9] mx-auto rounded-md mb-[30px]"></div>
        <div class="text-center text-[18px] text-[#898989] font-medium mb-[21px]">
            Proses Penerimaan
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-[50px]">
            <div class="flex flex-col items-center">
                <div id="step-daftar"
                    class="w-[48px] h-[48px] rounded-full bg-[#10B981] flex items-center justify-center">
                    <img id="icon-daftar" src="{{ asset('storage/ceklis.svg') }}" alt="check icon" class="w-5 h-5" />
                </div>
                <span class="text-[#637381] mt-2">Mendaftar</span>
            </div>
            <div class="md:w-[154px] md:h-[7px] w-[7px] h-[80px] bg-[#10B981] rounded-full mx-4 md:mx-0" id="line-1">
            </div>
            <div class="flex flex-col items-center">
                <div id="step-konfirmasi"
                    class="w-[48px] h-[48px] rounded-full border border-blue-400 flex items-center justify-center">
                    <img id="icon-konfirmasi" src="{{ asset('storage/waktu.svg') }}" alt="clock icon" class="w-5 h-5" />
                </div>
                <span class="text-[#637381] mt-2 text-center">Menunggu Konfirmasi</span>
            </div>
            <div class="md:w-[154px] md:h-[7px] w-[7px] h-[80px] bg-[#D9D9D9] rounded-full mx-4 md:mx-0" id="line-2">
            </div>
            <div class="flex flex-col items-center">
                <div id="step-hasil"
                    class="w-[48px] h-[48px] rounded-full border border-[#D9D9D9] border-[3px] flex items-center justify-center">
                </div>
                <span class="text-[#637381] mt-2">Hasil</span>
            </div>
        </div>
        <div class="flex justify-center mb-[30px]">
            <button id="main-button"
                class="w-[400px] max-w-full h-[50px] bg-[#066434] text-[16px] text-white font-medium px-8 py-2 rounded-md">
                Kembali
            </button>
        </div>
    </div>
    <script>

const kondisi = {{ $verified ? 2 : 1 }};

const daftar = document.getElementById("step-daftar");
const konfirmasi = document.getElementById("step-konfirmasi");
const hasil = document.getElementById("step-hasil");

const iconDaftar = document.getElementById("icon-daftar");
const iconKonfirmasi = document.getElementById("icon-konfirmasi");
const iconHasil = document.getElementById("icon-hasil");

const line1 = document.getElementById("line-1");
const line2 = document.getElementById("line-2");
const button = document.getElementById("main-button");

if (kondisi === 2) {
    konfirmasi.className = "w-[48px] h-[48px] rounded-full bg-[#10B981] flex items-center justify-center";

    iconKonfirmasi.src = "{{ asset('storage/ceklis.svg') }}";

    line2.className = "md:w-[154px] md:h-[7px] w-[7px] h-[80px] bg-[#10B981] rounded-full mx-4 md:mx-0";

    hasil.className = "w-[48px] h-[48px] rounded-full bg-[#D9D9D9] flex items-center justify-center";

    // Tambahkan img baru untuk icon hasil
    const imgHasil = document.createElement("img");
    imgHasil.src = "{{ asset('storage/waktu.svg') }}";
    imgHasil.alt = "storage/check icon";
    imgHasil.className = "w-5 h-5";
    hasil.appendChild(imgHasil); // Masukin ke dalam div hasil

    button.innerText = "Lanjutkan";
    button.onclick = () => window.location.href = "home.html";
}

    </script>
</section>
@endsection