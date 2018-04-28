@extends('main')

@section('content')
    <div class="card">
        <h5 class="card-header">ร่วมอวยพรวันเกิดเฌอปราง</h5>
    <div class="card-body">
        <p>สามารถกรอกข้อความอวยพรวันเกิดได้บริเวณด้านล่าง</p>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">ชื่อที่จะปรากฏ</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50">
                <small>จำกัด 50 ตัวอักษร</small>
            </div>
            <div class="form-group">
                <label for="wish">ข้อความอวยพร</label>
                <textarea class="form-control" id="wish" name="wish" rows="3" maxlength="240"></textarea>
                <small>จำกัด 280 ตัวอักษร</small>
            </div>
            <button type="submit" class="btn btn-primary">อวยพรวันเกิด!</button>
        </form>
    </div>
    </div>
@endsection

@section('sidebar')
<a class="btn" style="width: 100%" href="..">ดูคำอวยพร</a>
@endsection