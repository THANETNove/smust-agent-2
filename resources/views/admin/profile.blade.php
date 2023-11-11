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


                <div class="content-box background-white mp-16">
                    <p class="add_head-content text-center mt-3">เพิ่ม profile</p>
                    <div class="flex-direction-row">
                        <div class="box-profile ">ชื่อ</div>
                        <div class="box-profile2">{{ Auth::user()->first_name }}</div>
                    </div>
                    <div class="flex-direction-row mt-01">
                        <div class="box-profile">นามสกุล</div>
                        <div class="box-profile2">{{ Auth::user()->last_name }}</div>
                    </div>
                    <div class="flex-direction-row mt-01">
                        <div class="box-profile">email</div>
                        <div class="box-profile2">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="flex-direction-row mt-01">
                        <div class="box-profile">รหัส Admin </div>
                        <div class="box-profile2">
                            <p>{{ Auth::user()->code }}
                                <span>
                                    <img class="copy-icon ml-16" id="copy-code"
                                        src="{{ URL::asset('/assets/image/home/link.png') }}"
                                        onclick="copyCode('{{ Auth::user()->code }}')">
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="flex-direction-row mt-01">
                        <div class="box-profile">ลิงค์สมัคร </div>
                        <div class="box-profile2">
                            <p> link นายหน้า <span> <img class="copy-icon ml-16" id="copy-url"
                                        src="{{ URL::asset('/assets/image/home/link.png') }}"
                                        onclick="copyUrlCode('{{ Auth::user()->code }}')"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyCode(data) {
            // Create a temporary textarea element
            var textarea = document.createElement('textarea');
            // Set the value of the textarea to the data you want to copy
            textarea.value = data;
            // Append the textarea to the document
            document.body.appendChild(textarea);
            // Select the text in the textarea
            textarea.select();
            try {
                // Execute the copy command
                document.execCommand('copy');
                console.log('Data copied to clipboard:', data);
            } catch (err) {
                console.error('Unable to copy data to clipboard', err);
            }
            // Remove the temporary textarea from the document
            document.body.removeChild(textarea);


        }

        function copyUrlCode(data) {
            // Get the URL from the address bar
            var urlToCopy = window.location.origin + '/' + 'register-broker/' + data;



            // Create a temporary input element
            var tempInput = document.createElement("input");


            // Set the input value to the URL
            tempInput.value = urlToCopy;

            // Append the input element to the body
            document.body.appendChild(tempInput);

            // Select the input value
            tempInput.select();

            // Copy the selected text
            document.execCommand("copy");

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Optional: Provide feedback to the user
            alert("URL copied to clipboard: " + urlToCopy);

        }
    </script>
@endsection
