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
                    <p>ชื่อ&nbsp; {{ Auth::user()->first_name }}&nbsp; &nbsp; &nbsp; &nbsp; นามสกุล&nbsp;
                        {{ Auth::user()->last_name }}</p>
                    <div class="row">
                        <div class="col-2">
                            <p>รหัส Admin </p>
                            <p>email </p>
                            <p>ลิงค์สมัคร</p>
                        </div>
                        <div class="col-10">
                            <p>{{ Auth::user()->code }}
                                <span>
                                    <img class="copy-icon ml-16" id="copy-code"
                                        src="{{ URL::asset('/assets/image/home/link.png') }}"
                                        onclick="copyCode('{{ Auth::user()->code }}')">
                                </span>
                            </p>
                            <p>{{ Auth::user()->email }}</p>
                            <p> link นายหน้า <span> <img class="copy-icon ml-16" id="copy-url"
                                        src="{{ URL::asset('/assets/image/home/link.png') }}"
                                        onclick="copyUrlCode('{{ Auth::user()->code }}')"></span></p>
                        </div>


                        {{--  <p>ชื่อ&nbsp; {{ Auth::user()->first_name }}&nbsp; &nbsp; &nbsp; &nbsp; นามสกุล&nbsp;
                        {{ Auth::user()->last_name }}</p>
                    <p>รหัส Admin &nbsp; {{ Auth::user()->code }}</p>
                    <p>email &nbsp; {{ Auth::user()->email }}</p>
                    <p>ลิงค์สมัคร &nbsp; {{ Auth::user()->email }}</p> --}}
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
