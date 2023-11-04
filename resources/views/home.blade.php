@extends('layouts.app')

@section('content')
    <div class="home-background">
        <div class="home-head">
            <div>
                {{--   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <img class="ellipse" src="{{ URL::asset('/assets/image/home/ellipse.png') }}">
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div> --}}
                <div class="box-ellipse ">
                    <img class="ellipse" src="{{ URL::asset('/assets/image/home/ellipse.png') }}">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-email" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img class="ellipse" src="{{ URL::asset('/assets/image/home/ellipse.png') }}">
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <p class="p-login">ทรัพย์ของฉัน (51) </p>
        </div>
        <div class="card-content">
            <div class="row ">
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="box-new">NEW</div>
                        <img class="img-0831" src="{{ URL::asset('/assets/image/home/IMG_0831.png') }}">
                        <div>
                            <p class="name-content">หมู่บ้านพนาสนธ์การ์เด้น โฮม 3</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                จตุจักร จอมพล กทม.</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                BTS หมอชิต MRT พหลโยธิน </p>
                            <p class="number-rooms
                            ">
                                <span>
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/bed.png') }}">
                                    1 ห้องนอน
                                </span>
                                <span class="img-icon-left">
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                    33.32 ตร.ม.
                                </span>
                            </p>
                            <div class="rent-sell-green">เช่า/ขาย</div>
                            <div class="box-price">
                                <p>฿15,000/m</p>
                                <p>฿2.9 ล้าน</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="box-new">NEW</div>
                        <img class="img-0831" src="{{ URL::asset('/assets/image/home/IMG_0831.png') }}">
                        <div>
                            <p class="name-content">หมู่บ้านพนาสนธ์การ์เด้น โฮม 3</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                จตุจักร จอมพล กทม.</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                BTS หมอชิต MRT พหลโยธิน </p>
                            <p class="number-rooms
                        ">
                                <span>
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/bed.png') }}">
                                    1 ห้องนอน
                                </span>
                                <span class="img-icon-left">
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                    33.32 ตร.ม.
                                </span>
                            </p>
                            <div class="rent-sell-primary">เช่า</div>
                            <div class="box-price">
                                <p>฿15,000/m</p>
                                <p>฿2.9 ล้าน</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="box-new">NEW</div>
                        <img class="img-0831" src="{{ URL::asset('/assets/image/home/IMG_0831.png') }}">
                        <div>
                            <p class="name-content">หมู่บ้านพนาสนธ์การ์เด้น โฮม 3</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                จตุจักร จอมพล กทม.</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                BTS หมอชิต MRT พหลโยธิน </p>
                            <p class="number-rooms
                        ">
                                <span>
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/bed.png') }}">
                                    1 ห้องนอน
                                </span>
                                <span class="img-icon-left">
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                    33.32 ตร.ม.
                                </span>
                            </p>
                            <div class="rent-sell-green">เช่า/ขาย</div>
                            <div class="box-price">
                                <p>฿15,000/m</p>
                                <p>฿2.9 ล้าน</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="box-new">NEW</div>
                        <img class="img-0831" src="{{ URL::asset('/assets/image/home/IMG_0831.png') }}">
                        <div>
                            <p class="name-content">หมู่บ้านพนาสนธ์การ์เด้น โฮม 3</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                จตุจักร จอมพล กทม.</p>
                            <p class="name-details"> <img class="img-icon"
                                    src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                BTS หมอชิต MRT พหลโยธิน </p>
                            <p class="number-rooms
                        ">
                                <span>
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/bed.png') }}">
                                    1 ห้องนอน
                                </span>
                                <span class="img-icon-left">
                                    <img class="img-icon img-icon-right"
                                        src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                    33.32 ตร.ม.
                                </span>
                            </p>
                            <div class="rent-sell-yellow">ขาย</div>
                            <div class="box-price">
                                <p>฿15,000/m</p>
                                <p>฿2.9 ล้าน</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
