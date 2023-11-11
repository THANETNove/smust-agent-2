  {{-- ขาย  --}}
  <div class="mt-3">
      <p class="text-content-black margin-bottom-8">
          <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/Vector.png') }}">
          ราคาขาย <span class="ml-8">{{ number_format($home->advance_rent) }}
              บาท</span>
      </p>
      <div class="flex-direction-break-word">
          <div class="w-50">
              <p class="text-content-black margin-bottom-8 space-between">
                  <span>
                      <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                      เงินดาวน์ <span class="ml-8"> {{ number_format($home->sell_price) }}
                          บาท</span>
                  </span>
                  <span>-</span>
              </p>
              @if ($home->down_payment_installments == 'ได้')
                  <p class="text-content-black margin-bottom-8 space-between">
                      <span><img class="icon-content-2"
                              src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                          ผ่อนได้ <span class="ml-16">{{ $home->installments }} งวด</span></span>
                      <span>-</span>
                  </p>
              @endif
          </div>
          <div class="w-50">
              <p class="text-content-black margin-bottom-8">
                  <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                  ผ่อนดาวน์ {{ $home->down_payment_installments }}

              </p>
              @if ($home->down_payment_installments == 'ได้')
                  <p class="text-content-black margin-bottom-8">
                      <img class="icon-content-2" src="{{ URL::asset('/assets/image/home/pajamas_sort-lowest.png') }}">
                      งวดละ <span class="ml-16">{{ number_format($home->each_installment) }} บาท
                  </p>
              @endif
          </div>
      </div>


  </div>
