@extends('layouts.app')

@section('content')
    <div class="box-content-background">
        @foreach ($dataHome as $home)
            @php

                $imgUrl = json_decode(htmlspecialchars_decode($home->image));
                $count = count($imgUrl);

            @endphp
            <div id="container">

                {{--  <div class="image-box">
                    <div class="mr-4">
                        <div class="sava-image">
                            <img class="save-link ml-16" id="link-url" src="{{ URL::asset('/assets/image/home/link.png') }}">
                            <img class="save-link "id="captureButton" src="{{ URL::asset('/assets/image/home/save.png') }}">
                        </div>

                        <img class="image-detall-1" src="{{ URL::asset('/img/product/' . $imgUrl[0]) }}" data-index="0">
                    </div>
                    <div class="flex-direction-column">
                        <img class="image-detall-2 " src="{{ URL::asset('/img/product/' . $imgUrl[1]) }}" data-index="1">
                        <div class="image-opacity">
                            <img class="image-detall-2" src="{{ URL::asset('/img/product/' . $imgUrl[2]) }}" data-index="2">
                            <p class="number-image">+{{ $count - 2 }}</p>
                        </div>
                    </div>
                </div> --}}
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

            <div class="box-content" id="back-home">
                <div class="content-box">
                    <a href="{{ url('/home') }}" class="box-call">
                        กลับ
                    </a>
                </div>
            </div>
            <div class="box-content">

                <div class="content-box">
                    <p class="head-text-detall">{{ $home->building_name }}</p>

                    <p class="period-text">โพสเมื่อ: {{ $home->created_at }} แล้ว
                    </p>
                    <p class="price-detall text-center">
                        @if ($home->rent_sell == 'เช่า')
                            <span class="rent-sell-primary width-rent-sell">
                                {{ $home->rent_sell }}
                            </span>
                        @elseif ($home->rent_sell == 'ขาย')
                            <span class="rent-sell-yellow width-rent-sell">
                                {{ $home->rent_sell }}
                            </span>
                        @else
                            <span class="rent-sell-green width-rent-sell">
                                {{ $home->rent_sell }}
                            </span>
                        @endif
                        @if ($home->sell_price)
                            {{ number_format($home->sell_price) }} บาท
                        @endif
                        &nbsp; &nbsp;
                        @if ($home->rental_price)
                            {{ number_format($home->rental_price) }}/m
                        @endif

                    </p>

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
                            <div class="flex-direction-row margin-bottom-8">
                                <img class="icon-content" src="{{ URL::asset('/assets/image/home/map.png') }}">
                                <a target="_blank" rel="noopener noreferrer" href="{{ $home->url_gps }}"
                                    class="text-content-dark_100  text-ellipsis">
                                    {{ $home->url_gps }}
                                </a>
                            </div>


                            <p class="text-content-dark_100 margin-bottom-8  text-ellipsis">
                                <img class="icon-content-2"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                {{ $home->time_arrive }} to <span class="text-decoration">{{ $home->train_name }}
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
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
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
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->kitchen)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif

                                        ห้องครัว
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->bed)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif

                                        เตียง
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->fitness)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif
                                        ฟิตเนส
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->wardrobe)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif

                                        ตู้เสื้อผ้า
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->parking)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif

                                        ที่จอดรถ
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        @if ($home->air_conditioner)
                                            <img class="icon-content-2"
                                                src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        @else
                                            <span class="icon-null"></span>
                                        @endif
                                        เครื่องปรับอากาศ
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="align-items-center">
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
            <button class="prev-btn" onclick="changeMedia(-1)">&#10094;</button>
            <button class="next-btn" onclick="changeMedia(1)">&#10095;</button>
        </div>
    </div>



    </div>

    <div class="popup" id="imagePopup">
        <div class="popup-content">
            <img id="popupImage" src="" alt="Popup Image">
            <span class="close-btn" onclick="closePopup()">&times;</span>
        </div>
    </div>
    <script>
        var currentMedia = 0;

        document.querySelectorAll('.popup-trigger').forEach(function(element) {
            element.addEventListener('click', function() {
                openPopup(parseInt(element.getAttribute('data-index')));
            });
        });



        function openPopup(index) {
            console.log("aaa", index);
            currentMedia = index;
            showMedia(index);

            var popup = document.getElementById('imagePopup');
            popup.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closePopup() {
            var popup = document.getElementById('imagePopup');
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function changeMedia(direction) {
            currentMedia += direction;
            showMedia(currentMedia);
        }

        function showMedia(index) {
            var mediaItems = {!! json_encode($imgUrl) !!};
            console.log("mediaItems", mediaItems[0]);

            var popup = document.getElementById('imagePopup');
            var popupImage = document.getElementById('popupImage');

            var popup = document.getElementById('imagePopup');
            popup.style.display = 'flex';
            var popupMediaContainer = document.getElementById('popupMediaContainer');
            popupMediaContainer.innerHTML = '';

            var assetUrl = "{{ asset('img/product') }}";


            console.log(assetUrl);
            var img = document.createElement('img');
            /* img.src = "/img/product/" + mediaItems[index]; */
            img.src = assetUrl + '/' + mediaItems[index];

            /*  img.src = assetUrl + mediaItems[index]; */



            popupMediaContainer.appendChild(img);
        }
    </script>
@endsection
