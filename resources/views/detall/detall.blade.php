@extends('layouts.app')

@section('content')
    <div class="box-content-background">
        <div id="container">
            <div class="image-box">
                <div class="mr-4">
                    <div class="sava-image">
                        <img class="save-link ml-16" id="link-url" src="{{ URL::asset('/assets/image/home/link.png') }}">
                        <img class="save-link "id="captureButton" src="{{ URL::asset('/assets/image/home/save.png') }}">
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
                    <p class="price-detall text-center">
                        <span class="rent-sell-green width-rent-sell">
                            เช่า/ขาย
                        </span>15,000/m
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
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.google.com/maps/place/13%C2%B046'42.9%22N+100%C2%B045'34.6%22E/@13.7785833,100.7596111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d13.7785833!4d100.7596111?entry=ttu"
                                    class="text-content-dark_100  text-ellipsis">
                                    https://www.google.com/maps/place/13%C2%B046'42.9%22N+100%C2%B045'34.6%22E/@13.7785833,100.7596111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d13.7785833!4d100.7596111?entry=ttu
                                </a>
                            </div>


                            <p target="_blank" rel="noopener noreferrer"
                                class="text-content-dark_100 margin-bottom-8  text-ellipsis">
                                <img class="icon-content-2"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                5 mins to <span class="text-decoration">BTS หมอชิต MRT พหลโยธิน </span>
                            </p>

                            <div class="flex-direction-break-word margin-bottom-8 mt-wealth">
                                <div class="box-content-icon">
                                    <img class="icon-content-2"
                                        src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                    <span>3 ห้องนอน</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/shower.png') }}">
                                    <span>1 ห้องน้ำ</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                    <span>33.32 ตร.ม.</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2"
                                        src="{{ URL::asset('/assets/image/home/countertops.png') }}">
                                    <span>สตูดิโอ</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/floor.png') }}">
                                    <span>ชั้น 12</span>
                                </div>
                                <div class="box-content-icon">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/weekend.png') }}">
                                    <span>ตกแต่งครบ</span>
                                </div>
                            </div>

                            <p target="_blank" rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                5 ซอย พหลโยธิน 18 จอมพล, จตุจักร, Bangkok 10900
                            </p>

                            <p class="head-content">รายละเอียด</p>
                            <p class="text-content">มีห้องนั่งเล่น มีครัวบิลด์อิน ห้องกว้างมาก สภาพดี สวยงาม น่าอยู่ อาศัย
                                ทำเลดี ติดรถไฟฟ้า เข้าออกได้หลายทาง</p>
                                <div class="minimum-rent-box"></div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0"> ....
                            <!-- Button to toggle the frame -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
