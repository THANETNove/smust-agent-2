@extends('layouts.app')

@section('content')
    <div class="image-box">
        <div class="mr-4">
            <div class="sava-image">
                <img class="save-link ml-16" src="{{ URL::asset('/assets/image/home/link.png') }}">
                <img class="save-link " src="{{ URL::asset('/assets/image/home/save.png') }}">
            </div>
            <img class="image-detall-1" src="{{ URL::asset('/assets/image/home/42.png') }}">
        </div>
        <div class="flex-direction-column">
            <img class="image-detall-2 " src="{{ URL::asset('/assets/image/home/43.png') }}">
            <div class="image-opacity">
                <img class="image-detall-2" src="{{ URL::asset('/assets/image/home/44.png') }}">
                <p class="number-image">+7</p>
            </div>
        </div>
    </div>
    <div class="box-content">
        <div class="content-box">
            <p class="head-text-detall">อาคารชุดนอตติ้ง ฮิลล์ จตุจักร</p>
            <p class="period-text">โพสเมื่อ: 3 วันที่แล้ว</p>
            <p class="price-detall text-center"><span>
                    <div class="rent-sell-green">เช่า/ขาย</div>
                </span>15,000/m</p>
        </div>
    </div>
@endsection
