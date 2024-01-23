@extends('layouts.app')

@section('content')
    <div class="home-background">
        <div class="home-head">
            <div class="row">
                <div class="col-1">
                    <div class="box-ellipse ">
                        <img class="ellipse" src="{{ URL::asset('/assets/image/home/3868_n.jpg') }}">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-email" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img class="ellipse" src="{{ URL::asset('/assets/image/home/3868_n.jpg') }}">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a id="navbarDropdown" class="nav-link ml-r" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @if (Auth::user()->status == '3')
                                <a class="dropdown-item" href="{{ url('add-admin') }}">
                                    เพิ่ม admin
                                </a>
                            @endif
                            @if (Auth::user()->status > '0')
                                <a class="dropdown-item" href="{{ url('profile-admin') }}">
                                    profile
                                </a>
                            @endif
                            @if (Auth::user()->status == '0')
                                <a class="dropdown-item" href="{{ url('profile-user') }}">
                                    profile
                                </a>
                            @endif

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
                @php
                    $number = count($dataHome);

                @endphp
                <div class="col-12">
                    <p class="p-login text-center mt-22">ทรัพย์ของฉัน ({{ $number }}) </p>
                </div>
                <div class="col-12">
                    <button class="box-filter_alt" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="filter_alt-img" src="{{ URL::asset('/assets/image/home/filter_alt.png') }}">กรอง
                    </button>
                </div>

            </div>
        </div>
        @if (session('message'))
            <p class="message-text text-center mt-4"> {{ session('message') }}</p>
        @endif

        <div class="col-12">
            @if (Auth::user()->status != '0')
                @if (Auth::user()->status < 3)
                    {{-- ถ้าไม่ owner  ไม่ได้ ไม่เกิน 100 --}}
                    @if ($number < 101)
                        <a href="{{ url('/create-content') }}" class="box-call ml-16">
                            เพิ่ม
                        </a>
                    @endif
                @else
                    <a href="{{ url('/create-content') }}" class="box-call ml-16">
                        เพิ่ม
                    </a>
                @endif
            @endif
        </div>

        <div class="card-content">
            <div class="row">
                @foreach ($dataHome as $home)
                    @php
                        $imgUrl = json_decode(htmlspecialchars_decode($home->image));
                    @endphp
                    <a href="{{ url('get-detall', $home->id) }}">
                        <div class="card-new">
                            @if (Carbon\Carbon::parse($home->created_at)->diffInDays(Carbon\Carbon::now()) < 4)
                                <div class="box-new">NEW</div>
                            @endif
                            <div class="box-img-new">
                                <img class="img-0831" src="{{ URL::asset('/img/product/' . $imgUrl[0]) }}">
                            </div>
                            <div class="box-name-new">
                                <p class="name-content">{{ $home->building_name }}</p>
                                <p class="name-details">
                                    <img class="img-icon " src="{{ URL::asset('/assets/image/home/location_on.png') }}">
                                    {{ $home->districts_name_th }} {{ $home->amphures_name_th }}
                                    {{ $home->provinces_name_th }}
                                </p>
                                @if ($home->train_name != 'ไม่มี' && $home->train_name)
                                    @if ($home->time_arrive < '61')
                                        <p class="name-details">
                                            <img class="img-icon"
                                                src="{{ URL::asset('/assets/image/home/directions_subway.png') }}">
                                            {{ $home->train_name }}
                                        </p>
                                    @endif
                                @endif

                                <p class="number-rooms text-ellipsis">
                                    <span class="img-icon-ri2 ">
                                        <img class="img-icon img-icon-ri"
                                            src="{{ URL::asset('/assets/image/home/bed.png') }}">
                                        {{ $home->bedroom }} ห้องนอน
                                    </span>
                                    <span>
                                        <img class="img-icon  img-icon-ri"
                                            src="{{ URL::asset('/assets/image/home/screenshot_frame.png') }}">
                                        {{ $home->room_width }} ตร.ม.
                                    </span>
                                </p>
                            </div>

                            @php
                                $price = $home->sell_price; // Replace this with your actual price value
                                $priceString = (string) $price;

                                if (strlen($priceString) > 6) {
                                    $priceString = str_replace(',', '', $priceString);

                                    // Convert the numeric string to a float and format it
                                    $formattedPrice = number_format($priceString / 1000000, 1) . ' ล้าน';
                                    $price_sell = $formattedPrice;
                                } else {
                                    $price_sell = number_format($home->sell_price) . ' บาท';
                                }
                            @endphp


                            <div class="box-price-new">
                                @if ($home->rental_price && $home->rent_sell == 'เช่า')
                                    <p class="price-new price-top  ">
                                        ฿ {{ number_format($home->rental_price) }}/m
                                    </p>
                                @endif
                                @if ($home->sell_price && $home->rent_sell == 'ขาย')
                                    <p class="price-new price-top-sell">
                                        ฿ {{ $price_sell }}
                                    </p>
                                @endif

                                @if ($home->sell_price && $home->rent_sell == 'เช่า/ขาย')
                                    <p class="price-new price-top-2 ">
                                        ฿ {{ number_format($home->rental_price) }}/m
                                    </p>
                                    <p class="price-new price-top-sell2">
                                        ฿ {{ $price_sell }}
                                    </p>
                                @endif

                                @if ($home->rent_sell == 'เช่า')
                                    <span class="rent-sell-primary absolute-rent-sell">
                                        {{ $home->rent_sell }}
                                    </span>
                                @elseif ($home->rent_sell == 'ขาย')
                                    <span class="rent-sell-yellow absolute-rent-sell">
                                        {{ $home->rent_sell }}
                                    </span>
                                @else
                                    <span class="rent-sell-green absolute-rent-sell">
                                        {{ $home->rent_sell }}
                                    </span>
                                @endif

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="mt-5">
                {!! $dataHome->links() !!}
            </div>

        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <img class="filter_alt-img" src="{{ URL::asset('/assets/image/home/filter_alt.png') }}">กรอง
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="user" id="myForm" method="POST" action="{{ route('home') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <p class="font-size-12-black">ประเภททรัพย์</p>
                        <div class="flex-direction-row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="property_type" value="คอนโด"
                                    id="property_type1">
                                <label class="form-check-label check-icon" for="property_type1">
                                    <img class="property-img" src="{{ URL::asset('/assets/image/home/apartment.png') }}">
                                    <p class="font-size-12-black text-lr">คอนโด</p>
                                </label>
                            </div>
                            &nbsp; &nbsp;
                            &nbsp; &nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="property_type" value="บ้าน"
                                    id="property_type2">
                                <label class="form-check-label check-icon" for="property_type2">
                                    <img class="property-img" src="{{ URL::asset('/assets/image/home/cottage.png') }}">
                                    <p class="font-size-12-black text-lr-2">บ้าน</p>
                                </label>
                            </div>
                        </div>
                        <p class="font-size-12-black mt-21">ประเภทสัญญา</p>
                        <div class="flex-direction-row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rent_sell" value="เช่า"
                                    id="rent_sell1">
                                <label class="form-check-label" for="rent_sell1">
                                    เช่า
                                </label>
                            </div>
                            &nbsp; &nbsp;
                            &nbsp; &nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rent_sell" value="ขาย"
                                    id="rent_sell2">
                                <label class="form-check-label" for="rent_sell2">
                                    ขาย
                                </label>
                            </div>
                            &nbsp; &nbsp;
                            &nbsp; &nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rent_sell" value="เช่า/ขาย"
                                    id="rent_sell3">
                                <label class="form-check-label" for="rent_sell3">
                                    เช่า/ขาย
                                </label>
                            </div>

                        </div>
                        <p class="font-size-12-black mt-21">พื้นที่</p>
                        @include('layouts.address')



                        <p class="font-size-12-black mt-21">สถานีรถไฟฟ้า</p>
                        <img class="property-img"
                            src="{{ URL::asset('/assets/image/home/directions_subway.png') }}"></span>
                        @include('layouts.train_station')
                        <div class="box-button">
                            <button class="btn-search">ค้นหา</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.home_address')
@endsection
