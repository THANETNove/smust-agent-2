@extends('layouts.app')

@section('content')
    <div class="box-content-background">
        <div id="container">
            <h1>เพิ่ม</h1>
            <div class="box-content" id="back-home">
                <div class="content-box">
                    <a href="{{ url('/home') }}" class="box-call">
                        กลับ
                    </a>
                </div>
            </div>
            <div class="box-content">


                <div class="content-box">
                    <p class="head-text-detall">อาคารชุดนอตติ้ง ฮิลล์ จตุจักรอาคารชุดนอตติ้ง ฮิลล์ จตุจักร อาคารชุดนอตติ้ง
                        ฮิลล์ จตุจักร</p>
                    <p class="period-text">โพสเมื่อ: 3 วันที่แล้ว</p>
                    <p class="price-detall text-center">
                        <span class="rent-sell-green width-rent-sell">
                            เช่า/ขาย
                        </span>15,000/m
                    </p>



                </div>
            </div>
        </div>

    </div>
@endsection
