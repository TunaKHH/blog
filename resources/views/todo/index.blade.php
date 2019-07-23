<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.container{
    font-family: 微軟正黑體,Arial, Helvetica, sans-serif
}
.nav-first{
    padding-right: 0em;
}
.nav-end{
    padding-left: 0em;
    padding-left: 0em;
    
}
.nav{
    padding: 0em;
}
.news-title{
    font-size: 16px;
    font-weight: bold;
    color: #e73278;
    
}
</style>

<div class="container">
    <header class="row">
        @include('todo.nav')
    </header>
    <div class="row">
        <div class="col-3">
                <div id="fb-root"></div>
            <div class="fb-page" data-href="https://www.facebook.com/NAC2005/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NAC2005/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NAC2005/">技專校院電腦動畫競賽</a></blockquote></div>
        </div>
        <div class="col-1"></div>
        <div class="col-8">
            <div class="row news-title">
                <div class="col-2">公告日期</div>
                <div class="col-10">消息內容</div>
            </div>
            <div class="row news-content">
                <div class="col-2 news-content-date">2019-07-16</div>
                <div class="col-9 news-content-">獎狀與感謝狀校對事宜：請各組入圍團隊導演記得收信，並校對得獎名單與指導老師資訊，並在7/22前回覆。詳情請參閱信件內容。</div>
            </div>
        </div>
    </div>
    <footer class="row">
        @include('todo.footer')
    </footer>
<!-- 
    @foreach ($todos as $todo)
        <p>{{ $todo->id. '.'. $todo->title }}
            <form action="{{ url("todo/$todo->id")}}" method="POST">
                @csrf
                
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </p>
    @endforeach

    <form action="{{ url('todo')}}" method="POST" class="col-">
        @csrf
        <input type="text" placeholder="text" name="title">
        <input type="submit" >
    </form>
     -->

</div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.3&appId=436951796756423&autoLogAppEvents=1"></script>