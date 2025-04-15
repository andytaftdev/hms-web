@extends('layout.user')

@section('content')
<p class="font-bold text-[32px] leading-10 text-[#202224] mb-4">Dashboard</p>
<div class="w-full px-6 py-6 bg-white flex flex-col gap-3 rounded-2xl">
<p class="font-bold text-[24px] leading-10 text-[#202224] mb-5">Produk Kamu</p>
<div class="w-full p-8 bg-gray-100 rounded-lg flex flex-col gap-4">
    @foreach ($product as $item)
    <div class="w-full flex justify-between flex-col lg:flex-row bg-white p-6 rounded-xl gap-5 lg:gap-0">
        <div class="w-full lg:w-fit flex flex-col justify-between gap-2 lg:gap-8">
            <div class="w-fit flex flex-col ">
                <p class="font-semibold text-[24px]  text-[#202224]">{{$item->name}}</p>
                <p class="font-semibold text-[18px]  text-[#202224]">{{$item->type}} | {{$item->brand}}</p>
            </div>
            @if ($item->status == 'producing')
            <div href="" class="text-xs sm:text-sm text-white px-6 py-2 rounded-full w-fit bg-[#467ef7]">Producing</div>
        @elseif ($item->status == 'checking')
            <div href="" class="text-xs sm:text-sm text-white px-6 py-2 rounded-full w-fit bg-[#FCBE2D]">Checking</div>
        @else
            <div href="" class="text-xs sm:text-sm text-white px-6 py-2 rounded-full w-fit bg-[#00B69B]">Delivered</div>
        @endif
        </div>
        <div class="w-full lg:w-fit flex flex-col justify-between gap-2">
            <p class="font-semibold text-[24px] text-left lg:text-right  text-[#202224]">Rp.{{$item->harga_produksi}}</p>
            <a href="{{route('login')}}" class="text-xs font-bold sm:text-base text-white text-ba  px-8 py-4 rounded-md w-full flex justify-center items-center lg:w-fit bg-[#066434]">Detail Produk</a>

        </div>
    </div>
    @endforeach
</div>


</div>

@endsection
