<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
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
    </head>
    <body>
        <div class="container">
            <header class="row">
                <nav>
                    <div style="padding: 0em">
                        <img src="{{ asset('images/top.gif') }}" alt="" width="100%" >
                    </div>
                    <div class="row">
                        <div class="col nav-first">
                            <a href="{{ url('todo') }}">
                                <img src="{{ asset('images/nav/m-1a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/object') }}">
                                <img src="{{ asset('images/nav/m-2a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/rule') }}">
                                <img src="{{ asset('images/nav/m-3a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/regi') }}">
                                <img src="{{ asset('images/nav/m-4a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/result') }}">
                                <img src="{{ asset('images/nav/m-5a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/link') }}">
                                <img src="{{ asset('images/nav/m-6a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav">
                            <a href="{{ url('todo/result2') }}">
                                <img src="{{ asset('images/nav/m-7a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                        <div class="col nav-end">
                            <a href="{{ url('todo/course') }}">
                                <img src="{{ asset('images/nav/m-8a.jpg') }}" alt="" width="100%">
                            </a>
                        </div>
                    </div>
                </nav>
            </header>
            @yield('body')
            <footer class="row">
                <img src="{{ asset('images/footer.png') }}" alt="" width="100%" srcset="">
            </footer>
        
        </div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.3&appId=436951796756423&autoLogAppEvents=1"></script>
    </body>
</html>