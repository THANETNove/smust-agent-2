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


                            <p class="text-content-dark_100 margin-bottom-8  text-ellipsis">
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

                            <p class="text-content-dark_100 margin-bottom-8">
                                <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                5 ซอย พหลโยธิน 18 จอมพล, จตุจักร, Bangkok 10900
                            </p>

                            <p class="head-content">รายละเอียด</p>
                            {{-- เช่า  --}}
                            <div>
                                <p class="text-content">มีห้องนั่งเล่น มีครัวบิลด์อิน ห้องกว้างมาก สภาพดี สวยงาม น่าอยู่
                                    อาศัย
                                    ทำเลดี ติดรถไฟฟ้า เข้าออกได้หลายทาง</p>
                                <p class="text-content-black margin-bottom-8">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/Vector.png') }}">
                                    เช่าขั้นต่ำ <span class="ml-24">6 เดือน</span>
                                </p>
                                <div class="space-between">
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        เงินประกัน
                                    </p>
                                    <span>-</span>
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        เงินมัดจำ <span class="ml-24">3 เดือน</span>
                                    </p>
                                </div>
                                <div class="space-between">
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        ค่าเช่าล่วงหน้า
                                    </p>
                                    <span>-</span>
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        เงินจอง <span class="ml-24">2,000 บาท</span>
                                    </p>
                                </div>
                            </div>
                            {{-- ขาย  --}}
                            <div>
                                <p class="text-content">มีห้องนั่งเล่น มีครัวบิลด์อิน ห้องกว้างมาก สภาพดี สวยงาม น่าอยู่
                                    อาศัย
                                    ทำเลดี ติดรถไฟฟ้า เข้าออกได้หลายทาง</p>
                                <p class="text-content-black margin-bottom-8">
                                    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/Vector.png') }}">
                                    ราคาขาย <span class="ml-24">1,200,000 บาท</span>
                                </p>
                                <div class="space-between">
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        เงินดาวน์ <span class="ml-24">200,000 บาท</span>
                                    </p>
                                    <span>-</span>
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        ผ่อนดาวน์ได้ / ไม่ได้
                                    </p>
                                </div>
                                <div class="space-between">
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        ผ่อนได้ <span class="ml-24">6 งวด</span>
                                    </p>
                                    <span>-</span>
                                    <p class="text-content-black margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                                        งวดละ <span class="ml-24">2,000 บาท</span>
                                    </p>
                                </div>
                            </div>

                            <p class="head-content">สิ่งอำนวยความสะดวก</p>
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        ห้องครัว
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        เตียง
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        ฟิตเนส
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/add_comment.png') }}">
                                        ตู้เสื้อผ้า
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        ที่จอดรถ
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p rel="noopener noreferrer" class="text-content-dark_100 margin-bottom-8">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/check.png') }}">
                                        เครื่องปรับอากาศ
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="align-items-center">
                                <a href="" class="box-appointment">
                                    <img class="icon-content-3"
                                        src="{{ URL::asset('/assets/image/home/calendar_add_on.png') }}">
                                    นัดดูสถานที่
                                </a>
                                <a href="" class="box-appointment">
                                    <img class="icon-content-3"
                                        src="{{ URL::asset('/assets/image/home/person_add.png') }}">
                                    ส่งลูกค้า
                                </a>
                                <div class="flex-direction-row mb-5">
                                    <a href="" class="box-ask-more">
                                        <img class="icon-content-2"
                                            src="{{ URL::asset('/assets/image/home/calendar_add_on.png') }}">
                                        ถามเพิ่ม
                                    </a>
                                    <a href="javascript:void(0);" class="box-call" onclick="openPhoneCall('0931760535')">
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

    </div>

    <script>
        function openPhoneCall(number) {
            console.log("number", number);
            const phoneNumber = 'tel:086-899-9089';

            if (window.Linking && window.Linking.openURL) {
                window.Linking.openURL(phoneNumber);
            } else {
                alert('Phone call functionality is not supported on this device.');
            }
        }
    </script>
@endsection
