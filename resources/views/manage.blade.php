@extends('main')

@section('content')
    <div class="card">
        <h5 class="card-header">แก้ไขคำอวยพร (สิทธิ์เฉพาะผู้ดูแลระบบ)</h5>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
        @endif
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">หมายเลขคำอวยพร</label>
                <input type="text" class="form-control" id="id" name="id" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="hidden">สถานะคำอวยพร</label>
                <select class="form-control" id="hidden" name="hidden" required>
                    <option value="1" disabled selected>---</option>
                    <option value="0">แสดง</option>
                    <option value="1">ซ่อน</option>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Administrator username</label>
                <input type="username" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Administrator password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">อวยพรวันเกิด!</button>
        </form>
    </div>
    </div>
@endsection

@section('sidebar')
<a class="btn btn-light" style="width: 100%" href="..">ดูคำอวยพร</a>
@endsection