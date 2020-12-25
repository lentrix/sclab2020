<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="shortcut icon" href="{{asset('images/sclab_logo_50x.png')}}" type="image/png">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>Stars & Comet Laboratory</title>
</head>
<body>

    <div class="container">
        @include('partials.nav')
        @include('partials.error')
        @include('partials.info')

        @yield('content')
        <br>

        <footer class="bg-dark d-print-none">
            Copyright &copy; 2020 {{env('APP_NAME')}}. All rights reserved.
        </footer>
    </div>

    <script src="{{asset('/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 400,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
</body>
</html>
