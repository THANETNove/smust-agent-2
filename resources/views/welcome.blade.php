@extends('layouts.app')

@section('content')
    <div class="smust-agent">

        <img class="smust-agent-logo" src="{{ URL::asset('/assets/image/home/SMUSTAgentlogo.png') }}">

        <a href="{{ route('login') }}" class="btn btn-register">
            ลงทะเบียน
        </a>


        <p class="already-registered">หากลงทะเบียนแล้ว...</p>
        <button type="button" class="btn btn-login">เข้าสู่ระบบ</button>

    </div>
@endsection
