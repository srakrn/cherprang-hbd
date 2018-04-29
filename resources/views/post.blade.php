@extends('main')

@section('content')
    <div class="card">
        <h5 class="card-header">ร่วมอวยพรวันเกิดเฌอปราง</h5>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <h5>พบข้อผิดพลาด</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <p>สามารถกรอกข้อความอวยพรวันเกิดได้บริเวณด้านล่าง</p>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">ชื่อที่จะปรากฏ</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50" required>
                <small id="name-count">เหลือ 50 ตัวอักษร</small>
            </div>
            <div class="form-group">
                <label for="wish">ข้อความอวยพร</label>
                <textarea class="form-control" id="wish" name="wish" rows="3" maxlength="280" required></textarea>
                <small id="wish-count">เหลือ 280 ตัวอักษร</small>
            </div>
            <button type="submit" class="btn btn-primary">อวยพรวันเกิด!</button>
        </form>
    </div>
    </div>
@endsection

@section('sidebar')
<a class="btn btn-light" style="width: 100%" href="..">ดูคำอวยพร</a>
@endsection

@section('footer')
<script>
$('#wish').keyup(function () {
  var max = 280;
  var len = $(this).val().length;
  if (len > max) {
    $('#wish-count').text('เกินความยาวแล้วจ้า~ จะกดส่งไม่ไปนะ');
  } else {
    var char = max - len;
    $('#wish-count').text('เหลือ ' + char + ' ตัวอักษร');
  }
});
$('#name').keyup(function () {
  var max = 50;
  var len = $(this).val().length;
  if (len > max) {
    $('#name-count').text('เกินความยาวแล้วจ้า~ จะกดส่งไม่ไปนะ');
  } else {
    var char = max - len;
    $('#name-count').text('เหลือ ' + char + ' ตัวอักษร');
  }
});

</script>
@endsection