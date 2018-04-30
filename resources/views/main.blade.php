<!DOCTYPE html>
<html>
<head>
    <title>#happyCHERday 🎂</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ร่วมเขียนข้อความอวยพรวันเกิดให้กับเฌอปราง BNK48 ได้ที่เว็บไซต์นี้" />
    <meta property="og:image" content="{{ asset('img/happycherday-thumbnail.jpg') }}" />
    <meta property="og:image:wigth" content="1200" />
    <meta property="og:image:height" content="627" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="ร่วมเขียนข้อความอวยพรวันเกิดให้กับเฌอปราง BNK48 ได้ที่เว็บไซต์นี้" />
    <link rel="apple-touch-icon" href="{{ asset('img/touch-icon.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('img/touch-icon-192.png') }}">
    <meta name="theme-color" content="#F48FB1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"></link>
</head>
<body>
    <div class="tinter"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 sidebar text-white">
                <h1><a href="/">#HAPPY<br/><b>CHER</b><br/>DAY 🎂</a></h1>
                <p><br/>ร่วมส่งข้อความอวยพรวันเกิดให้กับเฌอปราง BNK48 ได้ที่เว็บไซต์นี้ หรือร่วมทวิตติดแท็ก #happyCHERday #HBDCherprangBNK48</p>
                <small>
                    <p>รูปภาพพื้นหลังจาก<a href="https://www.facebook.com/jorhorkor48/">จฮก.</a>, Made with love by <a href="https://srakrn.me/">@srakrn</a></p>
                </small>
                @yield('sidebar')
            </div>
            <div class="col-sm-12 col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@yield('footer')
</html>