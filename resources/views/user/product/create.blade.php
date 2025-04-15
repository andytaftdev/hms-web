@extends('layout.user')

@section('content')
<p class="font-bold text-[32px] leading-10 text-[#202224]">Produk</p>
<div class="w-full flex-col lg:flex-row flex gap-6 mt-4">
    <!-- Bagian Input Produk -->
    <div class="flex flex-col w-full lg:w-2/3 p-6 bg-white rounded-2xl text-[#111928]">
        <p class="font-semibold text-[24px] leading-6">Identitas Produk</p>
        <div class="flex flex-col md:flex-row  w-full gap-4 mt-12">
            <div class="flex flex-col gap-2 w-full md:w-1/2">
                <p class="font-semibold text-[16px] leading-6 text-[#637381]">Nama Brand</p>
                <input type="text" id="nama_brand" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Brand..">
            </div>
            <div class="flex flex-col gap-2 w-full lg:w-1/2">
                <p class="font-semibold text-[16px] leading-6 text-[#637381]">Nama Produk</p>
                <input type="text" id="nama_produk" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" placeholder="Produk..">
            </div>
        </div>

        <!-- Jenis Produk -->
        <div class="flex flex-col gap-4 w-full mt-2">
            <p class="font-semibold text-[16px] leading-6 text-[#637381]">Jenis Produk</p>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 grid-cols-2 xl:grid-cols-4 gap-5 w-full lg:w-4/5">
                <div class="selectable w-full bg-white shadow-md flex flex-col items-center justify-center rounded-xl overflow-hidden gap-2 cursor-pointer transition-all"  onclick="selectJenisProduk(this)">
                    <div class="h-[100px] w-full bg-center bg-cover bg-no-repeat" style="background-image: url('{{asset('storage/image-hms.webp')}}')"></div>
                    <p class="font-semibold text-[12px] leading-6 pb-3">Kapsul minyak</p>
                </div>
                <div class="selectable w-full bg-white shadow-md flex flex-col items-center justify-center rounded-xl overflow-hidden gap-2 cursor-pointer transition-all"  onclick="selectJenisProduk(this)">
                    <div class="h-[100px] w-full bg-center bg-cover bg-no-repeat" style="background-image: url('{{asset('storage/image-hms.webp')}}')"></div>
                    <p class="font-semibold text-[12px] leading-6 pb-3">Kapsul air</p>
                </div>

            </div>
        </div>

        <!-- Kemasan -->
        <p class="font-semibold text-[24px] leading-6 my-8">Pilih Kemasan</p>
        <div class="flex flex-col gap-4 w-full">
            <p class="font-semibold text-[16px] leading-6 text-[#637381]">Kemasan Primer</p>
            <select id="kemasan_primer" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#D1D5DB] text-[14px] font-medium bg-white" onchange="updateRingkasan()">
                <option value="" disabled selected>Pilih Kemasan...</option>
                @foreach ($kemasan['primer'] as $item)
                <option value="{{$item->id}}" data-harga="{{$item->harga}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col md:flex-row w-full gap-3 mt-4">
            <div class="flex flex-col gap-4 w-full md:w-1/2">
                <p class="font-semibold text-[16px] leading-6 text-[#637381]">Kemasan Sekunder</p>
                <select id="kemasan_innerbox" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#D1D5DB] text-[14px] font-medium bg-white" onchange="updateRingkasan()">
                    <option value="" disabled selected>Innerbox</option>
                    @foreach ($kemasan['innerbox'] as $item)
                    <option value="{{$item->id}}" data-harga="{{$item->harga}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-4 w-full md:w-1/2">
                <p class="font-semibold text-[16px] leading-6 text-[#637381] opacity-0">Nama Produk</p>
                <select id="kemasan_outerbox" class="rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#D1D5DB] text-[14px] font-medium bg-white" onchange="updateRingkasan()">
                    <option value="" disabled selected>Outerbox</option>
                    @foreach ($kemasan['outerbox'] as $item)
                    <option value="{{$item->id}}" data-harga="{{$item->harga}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Masterbox -->
        <div class="flex flex-col gap-2 w-full mt-2">
            <p class="font-semibold text-[16px] leading-6 text-[#637381]">Master Box</p>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 grid-cols-2 xl:grid-cols-4 gap-5 w-full md:w-4/5">
                @foreach ($kemasan['masterbox'] as $item)
                <div class="selectables w-full bg-white shadow-md flex flex-col items-center justify-center rounded-xl overflow-hidden gap-2 cursor-pointer transition-all" data-id="{{$item->id}}" data-harga="{{$item->harga}}" onclick="selectMasterbox(this)">
                    <div class="h-[100px] w-full bg-center bg-cover bg-no-repeat" style="background-image: url('{{asset('storage/image-hms.webp')}}')"></div>
                    <p class="font-semibold text-[12px] leading-6 pb-3">{{$item->name}}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Satuan Produk -->
        <div class="flex flex-col gap-2 mt-10">
            <p class="font-semibold text-[16px] leading-6 text-[#637381]">Satuan Produk</p>
            <div class="flex items-center gap-4">
                <!-- ML -->
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="satuan" value="ml" class="hidden peer">
                    <div class="w-5 h-5 rounded-full border-2 border-gray-400 flex items-center justify-center peer-checked:border-green-700 bg-transparent peer-checked:bg-green-700">
                        <div class="w-3 h-3 rounded-full bg-white"></div>
                    </div>
                    <span class="text-gray-700 peer-checked:text-green-700">ML</span>
                </label>
                <!-- Gram -->
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="satuan" value="gram" class="hidden peer">
                    <div class="w-5 h-5 rounded-full border-2 border-gray-400 flex items-center justify-center peer-checked:border-green-700 bg-transparent peer-checked:bg-green-700">
                        <div class="w-3 h-3 rounded-full bg-white"></div>
                    </div>
                    <span class="text-gray-700 peer-checked:text-green-700">Gram</span>
                </label>
                <!-- Lainnya -->
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="satuan" value="lainnya" class="hidden peer">
                    <div class="w-5 h-5 rounded-full border-2 border-gray-400 flex items-center justify-center peer-checked:border-green-700 bg-transparent peer-checked:bg-green-700">
                        <div class="w-3 h-3 rounded-full bg-white"></div>
                    </div>
                    <span class="text-gray-700 peer-checked:text-green-700">Lainnya</span>
                </label>
            </div>
        </div>

        <!-- Komposisi -->
        <p class="font-semibold text-[24px] leading-6 my-6 mt-8">Komposisi Product</p>
        <div id="komposisi" class="flex flex-col gap-5">
            <div class="flex w-full gap-3 komposisi-item">
                <div class="flex flex-col gap-4 w-3/5 md:w-4/5">
                    <p class="font-semibold text-[16px] leading-6 text-[#637381]">Komposisi 1</p>
                    <select class="bahan-select rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#D1D5DB] text-[14px] font-medium bg-white" onchange="updateRingkasan()">
                        <option value="" disabled selected>Pilih Bahan..</option>
                        @foreach ($bahan as $item)
                        <option value="{{$item->id}}" data-harga="{{$item->harga}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-4 w-2/5 md:w-1/5">
                    <p class="font-semibold text-[16px] leading-6 opacity-0 text-[#637381]">N</p>
                    <div class="relative w-full">
                        <input type="number" placeholder="Gram/ML" class="jumlah-input rounded-xl w-full py-4 px-6 pr-10 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium" onchange="updateRingkasan()">
                        <span class="absolute hidden md:flex  right-4 top-1/2 -translate-y-1/2 text-green-700 font-semibold">G/ML</span>
                    </div>
                </div>
            </div>

        </div>
        <div onclick="addKomposisi()" class="flex justify-center items-center group w-full bg-[#066434]/10 text-[#066434] border border-[#066434] font-semibold py-4 mt-5 rounded-lg hover:tracking-wide am hover:cursor-pointer">
            <span class="group-hover:rotate-180 am">+</span> Tambah Komposisi
        </div>
    </div>

    <!-- Ringkasan Transaksi -->
    <div class="flex flex-col w-full md:w-1/3 p-6 py-8 bg-white h-fit rounded-2xl">
        <p class="font-semibold text-[24px] leading-6">Ringkasan Transaksi</p>
        <div id="detail_harga" class="flex flex-col w-full gap-2 mt-6">
            <!-- Detail harga akan ditampilkan di sini -->
        </div>
        <div class="flex mt-10 flex-col gap-1">
            <p class="font-semibold text-[16px] leading-6 text-[#637381]">Total Harga</p>
            <p id="total_harga" class="font-semibold text-[24px] leading-6 text-[#111928]">Rp0</p>
        </div>
        <button onclick="redirectToWhatsApp()" class="flex justify-center items-center text-[12px] group w-full bg-[#066434] text-white border border-[#066434] font-semibold py-3 mt-5 rounded-xl hover:cursor-pointer">Lanjut</button>
    </div>
</div>

<script>
    let selectedJenisProduk = null;
    let selectedMasterbox = null;
    let masterboxharga = 0;

    // Fungsi untuk memilih jenis produk
    function selectJenisProduk(element) {
        // Hapus border hijau dari semua jenis produk
        document.querySelectorAll('.selectable').forEach(box => {
            box.classList.remove('border-[#066434]', 'border-2');
            box.classList.add('border-[#E5E7EB]');
        });

        // Tambahkan border hijau pada jenis produk yang dipilih
        element.classList.add('border-[#066434]', 'border-2');
        element.classList.remove('border-[#E5E7EB]');

        // Simpan jenis produk yang dipilih
        selectedJenisProduk = element.dataset.id;

        // Perbarui ringkasan (jika diperlukan)
        updateRingkasan();
    }

    // Fungsi untuk memilih masterbox
    function selectMasterbox(element) {
        // Hapus border hijau dari semua masterbox
        document.querySelectorAll('.selectables').forEach(box => {
            box.classList.remove('border-[#066434]', 'border-2');
            box.classList.add('border-[#E5E7EB]');
        });

        // Tambahkan border hijau pada masterbox yang dipilih
        element.classList.add('border-[#066434]', 'border-2', 'selected-masterbox');
        element.classList.remove('border-[#E5E7EB]');

        // Simpan masterbox yang dipilih
        selectedMasterbox = element.dataset.id;
        masterboxharga = parseFloat(element.dataset.harga);

        // Perbarui ringkasan
        updateRingkasan();
    }

    // Fungsi untuk memperbarui ringkasan
    function updateRingkasan() {
        let totalHarga = 0;
        let detailHarga = [];

        // Kemasan Primer
        let kemasanPrimer = document.getElementById('kemasan_primer');
        if (kemasanPrimer.value) {
            let harga = parseFloat(kemasanPrimer.options[kemasanPrimer.selectedIndex].dataset.harga);
            totalHarga += harga;
            detailHarga.push({ name: kemasanPrimer.options[kemasanPrimer.selectedIndex].text, harga: harga });
        }

        // Kemasan Innerbox
        let kemasanInnerbox = document.getElementById('kemasan_innerbox');
        if (kemasanInnerbox.value) {
            let harga = parseFloat(kemasanInnerbox.options[kemasanInnerbox.selectedIndex].dataset.harga);
            totalHarga += harga;
            detailHarga.push({ name: kemasanInnerbox.options[kemasanInnerbox.selectedIndex].text, harga: harga });
        }

        // Kemasan Outerbox
        let kemasanOuterbox = document.getElementById('kemasan_outerbox');
        if (kemasanOuterbox.value) {
            let harga = parseFloat(kemasanOuterbox.options[kemasanOuterbox.selectedIndex].dataset.harga);
            totalHarga += harga;
            detailHarga.push({ name: kemasanOuterbox.options[kemasanOuterbox.selectedIndex].text, harga: harga });
        }

        // Masterbox
        if (selectedMasterbox) {
            totalHarga += masterboxharga;
            detailHarga.push({ name: 'Masterbox', harga: masterboxharga });
        }

        // Komposisi
        document.querySelectorAll('.komposisi-item').forEach(item => {
            let bahanSelect = item.querySelector('.bahan-select');
            let jumlahInput = item.querySelector('.jumlah-input');
            if (bahanSelect.value && jumlahInput.value) {
                let bahanHarga = parseFloat(bahanSelect.options[bahanSelect.selectedIndex].dataset.harga);
                let jumlah = parseFloat(jumlahInput.value);
                let komposisiHarga = bahanHarga * jumlah;
                totalHarga += komposisiHarga;
                detailHarga.push({ name: bahanSelect.options[bahanSelect.selectedIndex].text, harga: komposisiHarga });
            }
        });

        // Update total harga
        document.getElementById('total_harga').innerText = 'Rp' + totalHarga.toLocaleString();

        // Update detail harga
        let detailHargaContainer = document.getElementById('detail_harga');
        detailHargaContainer.innerHTML = '';
        detailHarga.forEach(item => {
            let div = document.createElement('div');
            div.className = 'flex justify-between w-full';
            div.innerHTML = `
                <p class="font-semibold text-[14px] leading-6 text-[#637381]">${item.name}</p>
                <p class="font-semibold text-[14px] leading-6 text-[#111928]">Rp${parseFloat(item.harga).toLocaleString()}</p>
            `;
            detailHargaContainer.appendChild(div);
        });
    }

    // Fungsi untuk menambah komposisi
    function addKomposisi() {
        let container = document.getElementById("komposisi");
        let newKomposisi = document.createElement("div");
        newKomposisi.className = "flex w-full gap-3 komposisi-item";
        newKomposisi.innerHTML = `
                <div class="flex flex-col gap-4 w-3/5 md:w-4/5">
                    <p class="font-semibold text-[16px] leading-6 text-[#637381]">Komposisi ${container.children.length + 1}</p>
                    <select class="bahan-select rounded-xl w-full py-4 px-6 border border-[#E5E7EB] text-[#D1D5DB] text-[14px] font-medium bg-white">
                        <option value="" disabled selected>Pilih Bahan..</option>
                        @foreach ($bahan as $item)
                        <option value="{{$item->id}}" data-harga="{{$item->harga}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-4 w-2/5 md:w-1/5">
                    <p class="font-semibold text-[16px] leading-6 opacity-0 text-[#637381]">N</p>
                    <div class="relative w-full">
                        <input type="number" placeholder="Gram/ML" class="jumlah-input rounded-xl w-full py-4 px-6 pr-10 border border-[#E5E7EB] text-[#111928] text-[14px] font-medium">
                        <span class="absolute hidden md:flex  right-4 top-1/2 -translate-y-1/2 text-green-700 font-semibold">G/ML</span>
                    </div>
                </div>
        `;

        // Tambahkan event listener ke elemen baru
        const bahanSelect = newKomposisi.querySelector('.bahan-select');
        const jumlahInput = newKomposisi.querySelector('.jumlah-input');

        bahanSelect.addEventListener('change', updateRingkasan);
        jumlahInput.addEventListener('input', updateRingkasan);

        container.appendChild(newKomposisi);
    }

    // Fungsi untuk redirect ke WhatsApp
    function redirectToWhatsApp() {
        // Nomor WhatsApp tujuan (ganti dengan nomor yang sesuai)
        const phoneNumber = "6282282142767"; // Contoh: 6281234567890

        // Mengumpulkan data produk
        let message = "Halo, saya ingin memesan produk dengan detail berikut:\n\n";

        // Identitas Produk
        const namaBrand = document.getElementById('nama_brand').value;
        const namaProduk = document.getElementById('nama_produk').value;
        if (namaBrand) message += `*Nama Brand*: ${namaBrand}\n`;
        if (namaProduk) message += `*Nama Produk*: ${namaProduk}\n\n`;

        // Kemasan
        const kemasanPrimer = document.getElementById('kemasan_primer');
        if (kemasanPrimer.value) {
            message += `*Kemasan Primer*: ${kemasanPrimer.options[kemasanPrimer.selectedIndex].text}\n`;
        }

        const kemasanInnerbox = document.getElementById('kemasan_innerbox');
        if (kemasanInnerbox.value) {
            message += `*Kemasan Innerbox*: ${kemasanInnerbox.options[kemasanInnerbox.selectedIndex].text}\n`;
        }

        const kemasanOuterbox = document.getElementById('kemasan_outerbox');
        if (kemasanOuterbox.value) {
            message += `*Kemasan Outerbox*: ${kemasanOuterbox.options[kemasanOuterbox.selectedIndex].text}\n`;
        }

        // Masterbox
        if (selectedMasterbox) {
            const masterboxName = document.querySelector('.selected-masterbox p').innerText;
            message += `*Masterbox*: ${masterboxName}\n`;
        }

        // Komposisi
        document.querySelectorAll('.komposisi-item').forEach((item, index) => {
            const bahanSelect = item.querySelector('.bahan-select');
            const jumlahInput = item.querySelector('.jumlah-input');
            if (bahanSelect.value && jumlahInput.value) {
                const bahanName = bahanSelect.options[bahanSelect.selectedIndex].text;
                const jumlah = jumlahInput.value;
                message += `*Komposisi ${index + 1}*: ${bahanName} (${jumlah} Gram/ML)\n`;
            }
        });

        // Total Harga
        const totalHarga = document.getElementById('total_harga').innerText;
        message += `\n*Total Harga*: ${totalHarga}`;

        // Encode pesan untuk URL
        const encodedMessage = encodeURIComponent(message);

        // Redirect ke WhatsApp
        window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');
    }
</script>
@endsection