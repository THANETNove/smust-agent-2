{{-- <p class="text-content">{!! $home->details !!}</p> --}}

<p class="text-content-black margin-bottom-8">
    <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/Vector.png') }}">
    เช่าขั้นต่ำ <span class="ml-16">{{ number_format($home->minimum_rent) }}
        เดือน</span>
</p>
<div class="">
    <div class="w-100">
        <p class="text-content-black margin-bottom-8 space-between">
            <span> <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                เงินประกัน {{ number_format($home->deposit) }} เดือน</span>

        </p>
        <p class="text-content-black margin-bottom-8 space-between">
            <span> <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                ค่าเช่าล่วงหน้า {{ number_format($home->advance_rent) }} เดือน</span>

        </p>
    </div>
    <div class="w-100">
        <p class="text-content-black margin-bottom-8">
            <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
            เงินมัดจำ <span class="ml-16"> {{ $home->cash_pledge }} เดือน</span>
        </p>
        <p class="text-content-black margin-bottom-8">
            <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
            เงินจอง <span class="ml-16">{{ number_format($home->reservation_money) }}
                บาท</span>
        </p>
    </div>
</div>
