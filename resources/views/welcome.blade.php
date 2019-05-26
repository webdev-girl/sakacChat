<!doctype html>
<html lang="{{ app()->getLocale() }}">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sakac Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
                margin-left: 50px;
            }
            .loader {
                position:absolute;
                top:80%;
                transform:translateY(-50%);
                width:100%;
                height:10px;
                text-align:center;
            }
            .loader span {
                width:30px;
                height:30px;
                background:#fff;
                display:inline-block;
                border-radius:50%;
                animation:animate 2s linear infinite;
                opacity:0;
            }
            .loader span:nth-child(1) {
                animation-delay:0.8s;
                /* background:#00c2ff; */
                margin: 0;
                background: #7F7FD5;
                background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            }
            .loader span:nth-child(2) {
                animation-delay:0.4s;
                /* background:#ffe837; */
                margin: 0;
                background: #white;
                background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                /* background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); */

            }
            .loader span:nth-child(3) {
                animation-delay:0.2s;
                /* background:#ff1b78; */
                margin: 0;
                background: #7F7FD5;
                background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            }
            .bottom{
                padding: 0 20px;
                margin-bottom: 17px;
            }

            .btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }


            @keyframes animate {
                0% {
                    transform: translateX(-200px);
                    opacity:0;
                }
                25% {
                    transform: translateX(-100px);
                    opacity:1;
                }
                50% {
                    transform: translateX(0);
                    opacity:1;
                }
                75% {
                    transform: translateX(0);
                    opacity:1;
                }
                100% {
                    transform: translateX(100px);
                    opacity:0;
                }
                90% {
                    transform: translateX(100px);
                    opacity:0;
                }
            }
            </style>

    </head>
    <body class="bg-welcome">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                    Sakac Chat
                </div>
            </div>
        </div>
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <div class="span2" >
            </div>
        </div>
    </body>
</html>
