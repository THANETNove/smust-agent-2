@extends('layouts.app')

@section('content')
    <div class="home-background">
        <div class="home-head">
            <div>
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
            <div>
                <p class="p-login text-center mt-wealth">ทรัพย์ของฉัน (51) </p>
                <button class="box-filter_alt" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="filter_alt-img" src="{{ URL::asset('/assets/image/home/filter_alt.png') }}">กรอก
                </button>
            </div>
            {{-- <div class="align-justify-center">
                <p class="p-login">ทรัพย์ของฉัน (51) </p>
                <div class="box-filter_alt">
                    <img class="filter_alt-img" src="{{ URL::asset('/assets/image/home/filter_alt.png') }}">กรอก
                </div>
            </div> --}}
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <img class="filter_alt-img" src="{{ URL::asset('/assets/image/home/filter_alt.png') }}">กรอก
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="font-size-12-black">ประเภททรัพย์</p>
                    <div class="flex-direction-row">
                        <div class="property-box">
                            <img class="property-img" src="{{ URL::asset('/assets/image/home/cottage.png') }}">
                            <p class="font-size-12-black text-center">บ้าน</p>
                        </div>
                        <div class="property-box">
                            <img class="property-img" src="{{ URL::asset('/assets/image/home/apartment.png') }}">
                            <p class="font-size-12-black text-center">คอนโด</p>
                        </div>
                    </div>
                    <p class="font-size-12-black mt-21">ประเภทสัญญา</p>
                    <div class="flex-direction-row">
                        <div class="rent-buy">
                            <p class="font-size-12-black">เช่า</p>
                        </div>
                        <div class="rent-buy">
                            <p class="font-size-12-black">ซื้อ</p>
                        </div>
                    </div>
                    <p class="font-size-12-black mt-21">พื้นที่</p>
                    <select class="select-address select-address form-select font-size-12-black" name="provinces"
                        id="provinces-id" aria-label="Default select example">
                        <option selected disabled>จังหวัด</option>
                        @foreach ($data as $provinces)
                            <option value="{{ $provinces->id }}">{{ $provinces->name_th }}</option>
                        @endforeach
                    </select>
                    <select class="select-address form-select mt-2 font-size-12-black" id="districts"
                        aria-label="Default select example">
                        <option selected disabled>แขวง/ อำเภอ</option>
                    </select>
                    <select class="select-address form-select mt-2 font-size-12-black" name="amphures" id="amphures"
                        aria-label="Default select example">
                        <option selected disabled>เขต/ ตำบล</option>
                    </select>

                    <p class="font-size-12-black mt-21">สถานีรถไฟฟ้า</p>
                    <img class="property-img" src="{{ URL::asset('/assets/image/home/directions_subway.png') }}"></span>
                    <select class="form-select mt-2 font-size-12-black " aria-label="Default select example">
                        <option selected disabled> ชื่อสถานี</option>
                        <option value="ไม่มี">ไม่มี</option>
                        @foreach ($train_station as $train)
                            <option value="{{ $train->id }}">{{ $train->station_name_th }}</option>
                        @endforeach

                    </select>
                    <div class="box-button">
                        <button class="btn-search">ค้นหา</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
