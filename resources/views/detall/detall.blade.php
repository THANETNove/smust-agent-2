@extends('layouts.app')

@section('content')
    <div class="box-content-background">
        <div id="container">
            <div class="image-box">
                <div class="mr-4">
                    <div class="sava-image">
                        <img class="save-link ml-16" src="{{ URL::asset('/assets/image/home/link.png') }}">
                        <img class="save-link " src="{{ URL::asset('/assets/image/home/save.png') }}">
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
                            tabindex="0"> <button id="captureButton">captureButton</button>
                            <!-- Button to toggle the frame -->
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0"> <button id="captureButton">captureButton</button>
                            <!-- Button to toggle the frame -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const captureButton = document.getElementById("captureButton");
        const captureContainer = document.getElementById("container");
        const captureBackground = document.getElementById("background-container");

        captureButton.addEventListener("click", () => {
            captureContainer.style.border = "3px solid var(--primary_200)";
            captureContainer.style.padding = "16px";
            captureContainer.style.maxWidth = "700px";
            html2canvas(document.getElementById("container")).then(canvas => {
                const dataURL = canvas.toDataURL("image/png");

                const downloadLink = document.createElement("a");
                downloadLink.href = dataURL;
                downloadLink.download = "webpage.png";
                downloadLink.click();
            });
            captureContainer.style.border = "none";
            captureContainer.style.padding = "0px";
            captureContainer.style.maxWidth = "100%";
        });

        /*    captureButton.addEventListener("click", () => {
               html2canvas(document.getElementById("container")).then(canvas => {
                   const dataURL = canvas.toDataURL("image/png");
                   // สร้างภาพใน HTML และใส่การเงา
                     const imgElement = document.createElement("img")  ;

        captureButton.src = dataURL;
        captureButton.style.border = "3px solid var(--primary_200)";
        captureButton.style.padding = "16px";
        captureButton.style.maxWidth = "800px";

        // สร้างลิงก์ดาวน์โหลด
        const downloadLink = document.createElement("a");
        downloadLink.href = dataURL;
        downloadLink.download = "webpage.png";
        downloadLink.click();

        });
        });*/
    </script>
@endsection
