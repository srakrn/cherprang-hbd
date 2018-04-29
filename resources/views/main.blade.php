<!DOCTYPE html>
<html>
<head>
    <title>#HBDCherprangBNK48 🎂</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5mdXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"></link>
</head>
<body>
    <div class="tinter"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 sidebar text-white">
                <h1>#HBD<br/><b>CHERPRANG</b><br/>BNK48 🎂</h1>
                <p>ร่วมส่งข้อความอวยพรวันเกิดให้กับเฌอปราง BNK48 ได้ที่เว็บไซต์นี้ หรือร่วมทวิตติดแท็ก #HBDCherprangBNK48</p>
                @yield('sidebar')
                <hr/>
                <small>
                    <p>รูปภาพพื้นหลังจาก<a href="https://www.facebook.com/jorhorkor48/">จฮก</a></p>
                    <p>Made with love by <a href="https://srakrn.me/">@srakrn</a></p>
                </small>
            </div>
            <div class="col col-lg-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>