@extends('layouts.member')
@section('content')
    @include('member.layouts._tab_info')
    <form action="{{route('member.info.store')}}" method="post">
        @csrf
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label>邮箱</label>
                            <input type="text" name="email" class="form-control" required
                                   value="{{old('email',$user['email']??'')}}">
                        </div>
                        <div class="form-group">
                            <label>验证码</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="code" placeholder="请输入验证码"
                                       value="{{old('code')}}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="sendCode">
                                        发送验证码
                                    </button>
                                </div>
                            </div>
                            <script>
                                send_code("#sendCode", '[name="email"]');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success btn-block d-sm-none mt-3">保存提交</button>
        <button class="btn btn-success mt-3 d-none d-sm-block">保存提交</button>
    </form>
@stop