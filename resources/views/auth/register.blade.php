@extends('layouts.app')

@section('content')
    <div class="login-box">
        <p class="p-login">ลงทะเบียน</p>

        <div class="form-login">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-12">

                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="อีเมล" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password"  placeholder="รหัสผ่าน">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="ยืนยันรหัสผ่าน">
                    </div>
                </div>
                <p class="information">ข้อมูลของฉัน</p>
                <div class="row mb-3">
                    <div class="col-md-12 input_box">

                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label>อีเมล <span class="label-span">*</span></label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
