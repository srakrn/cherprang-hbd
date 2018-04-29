@extends('main')

@section('content')
    @if (session('wish'))
        <div class="alert alert-light">
            <h1>ร่วมอวยพรให้เฌอปรางสำเร็จ!</h1>
            <p>ขอบคุณที่ร่วมอวยพรวันเกิดให้เฌอปราง สามารถคลิกที่ปุ่มทวิต เพื่อทวิตคำอวยพรให้เฌอปรางได้ด้วยนะ
            <a class="twitter-share-button"
                href="https://twitter.com/intent/tweet?url=hbdcherprang.herokupp.com&text={{ session('wish')->wish}}%20#HBDCherprangBNK48"
            >
            Tweet</a></p>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a class="btn btn-primary" href="..">กลับไปที่หน้าแรก</a>
        </div>
    @else
        <div class="alert alert-danger">เหมือนจะมีข้อผิดพลาด แนะนำให้กลับไป<a href="..">หน้าแรก</a></div>
    @endif
@endsection

@section('sidebar')
@endsection