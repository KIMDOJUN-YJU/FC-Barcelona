<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(#e66999, #9160e5);
                color: #8A0829;
                font-family: '메이플스토리', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
                padding: 0;
                height: 100%;
            }
            html {
                background: #eee;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .menu {
                position: absolute;
                background: red;
                right: 10px;
                top: 0px;
                width: 100%;
                height: 70px;
            }
            .link {
                position: absolute;
                right: 10px;
                top: 10px;
                display: flex;
                justify-content: center;
            }
            .link > a {
                color: gold;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links {
                position: flex;
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .content {
                position: absolute;
               text-align:center;
                top: 10px;
                left: 10px;
                
            }
            .mainimage {
                position: absolute;
            }
            .mainimage > img{
                width: 1000px;
            }

            .links > a {
                color: gold;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > img{
                width: 50px;
            }
        </style>
    </head>
    <body>
            <div class="menu">
                <div class="link"> 
                    @auth
                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ url('/custom-login') }}">Login</a>
                        <a href="{{ url('/custom-register') }}">Register</a>
                    @endauth
                </div>    
            </div>
            <div class="content">
                <div class="links">
                    <img src="/img/logo.png">
                    <a href="/">FC바르셀로나</a>          
                    <a href="/member">선수 목록</a>
                    <a href="{{ route('questions.index') }}">자유게시판</a>
                </div>
            </div>
            <div class="mainimage">
                <img src="/img/2011 바르셀로나.jpg">
            </div>
    </body>
</html>
