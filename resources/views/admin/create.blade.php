@extends('layouts.app')

@section('content')
    <div class="box-content-background">
        <div id="container">

            <div class="box-content" id="back-home">
                <div class="content-box">
                    <a href="{{ url('/home') }}" class="box-call">
                        กลับ
                    </a>
                </div>
            </div>
            <div class="box-content">


                <div class="content-box background-white">
                    <p class="add_head-content text-center">เพิ่ม</p>
                    <form class="user" id="myForm" method="POST" action="{{ route('add-content') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ชื่ออาคาร/สถานที่</label>
                            <input type="text" class="form-control @error('building_name') is-invalid @enderror"
                                name="building_name" id="exampleFormControlInput1" placeholder="ชื่ออาคาร/สถานที่" required>
                            @error('building_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="rent_sell" aria-label="Default select example">
                                <option value="เช่า">เช่า</option>
                                <option value="ขาย">ขาย</option>
                                <option value="เช่า/ขาย"> เช่า/ขาย</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ราคาเช่า (ไม่มีไม่ต้องใส่)</label>
                            <input type="text" class="form-control @error('rental_price') is-invalid @enderror"
                                name="rental_price" id="exampleFormControlInput1" placeholder="ชื่ออาคาร/สถานที่">
                            @error('rental_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ราคาขาย (ไม่มีไม่ต้องใส่)</label>
                            <input type="text" class="form-control @error('sell_price') is-invalid @enderror"
                                name="sell_price" id="exampleFormControlInput1" placeholder="ชื่ออาคาร/สถานที่">
                            @error('sell_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">url gps</label>
                            <input type="text" class="form-control @error('url_gps') is-invalid @enderror"
                                name="sell_price" id="exampleFormControlInput1" placeholder="url gps">
                            @error('url_gps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ระยะเวลาถึงสถานีรถไฟ</label>
                            <input type="text" class="form-control @error('time_arrive') is-invalid @enderror"
                                name="time_arrive" id="exampleFormControlInput1" placeholder="5 mins">
                            @error('time_arrive')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            @include('layouts.train_station')
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">จำนวนห้องนอน</label>
                            <input type="number" class="form-control @error('bedroom') is-invalid @enderror" name="bedroom"
                                id="exampleFormControlInput1" placeholder="จำนวนห้องนอน">
                            @error('bedroom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">จำนวนห้องน้ำ</label>
                            <input type="number" class="form-control @error('bathroom') is-invalid @enderror"
                                name="bedroom" id="exampleFormControlInput1" placeholder="จำนวนห้องนอน">
                            @error('bathroom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ความกว้างห้อง (ตร.ม)</label>
                            <input type="number" class="form-control @error('room_width') is-invalid @enderror"
                                name="room_width" id="exampleFormControlInput1" placeholder="ความกว้างห้อง (ตร.ม)">
                            @error('room_width')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">สตูดิโอ</label>
                            <select class="form-select" name="studio" aria-label="Default select example">
                                <option value="ไม่มี">ไม่มี</option>
                                <option value="มี">มี</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">จำนวนชั้น</label>
                            <input type="number" class="form-control @error('number_floors') is-invalid @enderror"
                                name="number_floors" id="exampleFormControlInput1" placeholder="ความกว้างห้อง (ตร.ม)">
                            @error('number_floors')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ของตกเเต่ง</label>
                            <select class="form-select" name="decoration" aria-label="Default select example">
                                <option value="ครบ">ครบ</option>
                                <option value="ครบ">ไม่ครบ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            @include('layouts.address')
                            <input type="number" class="form-control mt-2 @error('zip_code') is-invalid @enderror"
                                name="zip_code" id="zip_code" placeholder="รหัสไปรษณีย์">
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" id="submitBtn"
                            class=" btn btn-primary
                    btn-user btn-block">
                            {{ __('บันทึก') }}
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
