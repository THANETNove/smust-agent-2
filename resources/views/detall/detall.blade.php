@extends('layouts.app')

@section('content')
    <div class="box-content-background" id="container">
        @foreach ($dataHome as $home)
            @php

                $imgUrl = json_decode(htmlspecialchars_decode($home->image));
                $count = count($imgUrl);

            @endphp
            <div id="container">

                <div class="image-box">
                    <div class="mr-4">
                        <div class="sava-image">
                            <img class="save-link ml-16" id="link-url" src="{{ URL::asset('/assets/image/home/link.png') }}">
                            <img class="save-link" id="captureButton" src="{{ URL::asset('/assets/image/home/save.png') }}">
                        </div>
                        <img class="popup-trigger image-detall-1" src="{{ URL::asset('/img/product/' . $imgUrl[0]) }}"
                            data-index="0">
                    </div>
                    <div class="flex-direction-column">
                        <img class="popup-trigger image-detall-2" src="{{ URL::asset('/img/product/' . $imgUrl[1]) }}"
                            data-index="1">
                        <div class="image-opacity">
                            <img class="popup-trigger image-detall-2" src="{{ URL::asset('/img/product/' . $imgUrl[2]) }}"
                                data-index="2">
                            <p class="number-image">+{{ $count - 2 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-content " id="back-home">
                <div class="content-box flex-direction-row ml-24">
                    <a href="{{ url('/home') }}" class="box-call">
                        กลับ
                    </a>

                    @if (Auth::user()->status != '0')
                        &nbsp; &nbsp;
                        <a href="{{ url('/edit', $home->id) }}" class="box-call">
                            เเก้ไข
                        </a>
                        &nbsp; &nbsp;
                        <a href="{{ url('destroy', $home->id) }}" class="box-call2 ">
                            ยกเลิก
                        </a>
                    @endif




                </div>

            </div>
            <div class="box-content">
                <div class="content-box">
                    <p class="head-text-detall ml-24">{{ $home->building_name }}</p>
                    @php
                        $createdAt = \Carbon\Carbon::parse($home->created_at);
                    @endphp
                    <p class="period-text ml-24">โพสเมื่อ:
                        @if ($createdAt->isToday())
                            {{ $createdAt->format('H:i') }}
                        @else
                            {{ $createdAt->format('d-m-Y') }}
                        @endif แล้ว
                    </p>
                    <div class="price-detall flex-justify-content mt-8">
                        @if ($home->rent_sell == 'เช่า')
                            <div class="flex-direction-row">
                                <span class="rent-sell-primary width-rent-sell">
                                    {{ $home->rent_sell }}
                                </span>
                                <p> {{ number_format($home->rental_price) }}/m</p>
                            </div>
                        @endif
                        @if ($home->rent_sell == 'ขาย')
                            <div class="flex-direction-row">
                                <span class="rent-sell-yellow width-rent-sell">
                                    {{ $home->rent_sell }}
                                </span>
                                <p> {{ number_format($home->sell_price) }} บาท</p>
                            </div>
                        @endif
                        @if ($home->rent_sell == 'เช่า/ขาย')
                            <div class="flex-direction-column">
                                <div class="flex-direction-row ">
                                    <span class="rent-sell-primary width-rent-sell mb-8">
                                        เช่า
                                    </span>
                                    <p> {{ number_format($home->rental_price) }}/m</p>
                                </div>
                                <div class="flex-direction-row ">
                                    <span class="rent-sell-green width-rent-sell">
                                        {{ $home->rent_sell }}
                                    </span>
                                    <p> {{ number_format($home->sell_price) }} บาท</p>
                                </div>
                            </div>
                        @endif


                    </div>

                    <nav class="mt-wealth">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">รายละเอียดทรัพย์
                                <span class="box-nav-link"></span>
                            </button>

                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ส่วนนายหน้า
                                <span class="box-nav-link"></span>
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                            tabindex="0">
                            <div class="flex-direction-row margin-bottom-8 mt-27">
                                <img class="icon-content" src="{{ URL::asset('/assets/image/home/map.png') }}">
                                <a target="_blank" rel="noopener noreferrer" href="{{ $home->url_gps }}"
                                    class="text-content-dark_100  text-ellipsis">
                                    {{ $home->url_gps }}
                                </a>
                            </div>


                            <p class="text-content-dark_100 margin-bottom-8  text-ellipsis">

                                <img class="icon-content-2"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                {{ $home->time_arrive }} mins to <span class="text-decoration">{{ $home->train_name }}
                                </span>
                            </p>

                            <div class="flex-direction-break-word margin-bottom-8 mt-wealth">
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/bed_2.png') }}">
                                    <span>{{ $home->bedroom }} ห้องนอน</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/shower.png') }}">
                                    <span>{{ $home->bathroom }} ห้องน้ำ</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame2.png') }}">
                                    <span>{{ $home->room_width }} ตร.ม.</span>
                                </div>
                                @if ($home->studio == 'มี')
                                    <div class="box-content-icon">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/countertops.png') }}">
                                        <span>สตูดิโอ</span>
                                    </div>
                                @endif

                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/floor.png') }}">
                                    <span>ชั้น {{ $home->number_floors }}</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/weekend.png') }}">
                                    <span>ตกแต่ง{{ $home->decoration }}</span>
                                </div>
                            </div>

                            <p class="text-content-dark_100 margin-bottom-8">
                                <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                {{ $home->address }} &nbsp; {{ $home->districts_name_th }}&nbsp;
                                {{ $home->amphures_name_th }} &nbsp; {{ $home->provinces_name_th }}
                                &nbsp;
                                {{ $home->zip_code }}
                            </p>

                            <p class="head-content">รายละเอียด</p>



                            @if ($home->rent_sell == 'เช่า')
                                @include('detall.reall_detall')
                            @elseif ($home->rent_sell == 'ขาย')
                                @include('detall.sell_detall')
                            @else
                                @include('detall.reall_detall')
                                @include('detall.sell_detall')
                            @endif




                            <p class="head-content">สิ่งอำนวยความสะดวก</p>
                            <div class="flex-direction-break-word">
                                <div class="w-50">
                                    @if ($home->kitchen)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            ห้องครัว
                                        </p>
                                    @endif
                                    @if ($home->fitness)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            ฟิตเนส
                                        </p>
                                    @endif
                                    @if ($home->parking)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            ที่จอดรถ
                                        </p>
                                    @endif
                                </div>
                                <div class="w-50">
                                    @if ($home->bed)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            เตียง
                                        </p>
                                    @endif
                                    @if ($home->wardrobe)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            ตู้เสื้อผ้า
                                        </p>
                                    @endif
                                    @if ($home->air_conditioner)
                                        <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                            เครื่องปรับอากาศ
                                        </p>
                                    @endif
                                </div>
                            </div>
                            @if ($home->thereVarious)
                                @php
                                    $thereVarious = json_decode($home->thereVarious, true);

                                @endphp
                                <div class="flex-direction-break-word">

                                    @foreach ($thereVarious as $key => $value)
                                        <div class="w-50">

                                            <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                                <img class="icon-content-2"
                                                    src="{{ URL::asset('/assets/image/home/check.png') }}">
                                                {{ $value }}
                                            </p>
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="align-items-center mt-27 ">
                                <a href="{{ $home->make_appointment_location }}" class="box-appointment">
                                    <img class="icon-content-3"
                                        src="{{ URL::asset('/assets/image/home/calendar_add_on.png') }}">
                                    นัดดูสถานที่
                                </a>
                                <a href="{{ $home->send_customers }}" class="box-appointment">
                                    <img class="icon-content-3"
                                        src="{{ URL::asset('/assets/image/home/person_add.png') }}">
                                    ส่งลูกค้า
                                </a>
                                <div class="flex-direction-row mb-5">
                                    <a href="{{ $home->ask_more }}" class="box-ask-more">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/calendar_add_on.png') }}">
                                        ถามเพิ่ม
                                    </a>
                                    <a href="tel:{{ $home->contact_number }}" class="box-call">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/call.png') }}">
                                        โทร
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
    <div class="popup" id="imagePopup">
        <div class="popup-content">

            <div id="popupMediaContainer">
            </div>

            <span class="close-btn" onclick="closePopup()">&times;</span>
            <span class="save-image-btn" id="save-image-btn">
                <img class="icon-save" src="{{ URL::asset('/assets/image/home/save_icon_152542.png') }}">
            </span>
            {{--   <span class="save-image-btn-all" id="save-all-images-btn">
                <img class="icon-save" src="{{ URL::asset('/assets/image/home/save_icon_152542.png') }}"> --}}

            </span>
            <button class="prev-btn" id="prev-btn" onclick="changeMedia(-1)">&#10094;</button>
            <button class="next-btn" id="next-btn" onclick="changeMedia(1)">&#10095;</button>
        </div>
    </div>



    </div>

    <div class="popup" id="imagePopup">
        <div class="popup-content">
            <img id="popupImage" src="" alt="Popup Image">
            <span class="close-btn" onclick="closePopup()">&times;</span>
        </div>
    </div>
    @include('detall.javascript_popupImage')
@endsection
