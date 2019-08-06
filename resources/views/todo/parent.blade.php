<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
body{
    background-color:#eeeeee;
}
header{
    padding-bottom: 1em;
}
p{
    text-indent:-2em;
    margin-left: 1em;
    color: #004672;
    line-height: 2em;
    font-size: 14px
}
.content-area{
    padding-left: 3em;
}
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
.news-content{
    border-bottom-style: dashed;
    border-bottom-width: 1px; 
}
.sub-title{
    line-height: 2em;
    font-size: 16px;
    font-weight: bold;
    color: #e73278;
}
img > .subar{
    height: 20px;
    width: 28px;
}
.body-title{
    color: #e73278;
    font-size: 14px;
    font-weight: bold;
}
.body-copy{
    color: #004672;
    font-family: "微軟正黑體";
    line-height: 1.5em;
}
</style>

<div class="container">
    <header class="row">
        @include('todo.nav')
    </header>

    @include($body)

    <footer class="row">
        @include('todo.footer')
    </footer>

</div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.3&appId=436951796756423&autoLogAppEvents=1"></script>