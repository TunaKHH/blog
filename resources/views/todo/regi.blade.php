@extends('todo.parent')
@section('body')
    <div class="row">
        <div class="col-11 center" style="text-align:center;margin:0px auto;">
            <div class="row sub-title">
                <span>
                    <img src="{{ asset('images/subar.png') }}" alt="" width="28px" height="20px"> 線上報名
                </span>
            </div>
            <div class="row" style="text-align:left">
                <div class="col-8 content">
                    <p>
                        如果您尚未登錄您的報名資料， 
                    </p>
                    <p>
                        請由此進入進行報名資料的登錄！
                    </p>
                    <button class="btn btn-primary">
                        我要參加線上報名!
                    </button>
                    <p>
                        ------------------------------------------------------------------------------
                    </p>
                    <p>
                        如果已經有報名資料
                    </p>
                    <p>
                        請由此進入修改您的報名資料！
                    </p>
                    <form method="POST" action="{{ asset('login') }}">
                        @csrf
                        <input type="text" class="">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection