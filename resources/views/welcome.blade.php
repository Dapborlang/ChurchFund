<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jowai PC</title>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <style>
            html, body {
                background-color: rgba(255, 255, 255, 0.5);
                background-image:url('{{asset('images/background.jpg')}}');
                background-repeat:no-repeat;
                background-size:cover;
                color: #1c1d22;
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
                font-size: 60px;
            }

            .links, .links > a, .dropdown > a {
                color: #1c1d22;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bgopacity
            {
                font-weight: bold;
                 background-color: rgba(255, 255, 255, 0.2);
            }

            /*.dropbtn {
                    background-color: #4CAF50;
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                }*/

                /* The container <div> - needed to position the dropdown content */
                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                /* Dropdown Content (Hidden by Default) */
                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                /* Links inside the dropdown */
                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                /* Change color of dropdown links on hover */
                .dropdown-content a:hover {background-color: #f1f1f1}

                /* Show the dropdown menu on hover */
                .dropdown:hover .dropdown-content {
                    display: block;
                }

                /* Change the background color of the dropdown button when the dropdown content is shown */
                .dropdown:hover .dropbtn {
                    background-color: #3e8e41;
                }
        </style>
        <script type="text/javascript">
            $( document ).ready(function() {
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        WELCOME! {{ Auth::user()->name }}
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif

            <div class="content bgopacity">
                <div class="title m-b-md">
                   Jowai Presbyterian Church
                </div>

                <div class="links">
                    <div style="background-color: rgba(255, 255, 255, 0.4); font-weight: bold; text-shadow: 2px 2px 3px #a2a7ad; font-size: 20px;">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                        Please Login
                        @endauth
                    </div>
                </div>
                <br>
                @if (Route::has('login'))
                              
                @endif
         
            </div>
        </div>
        <audio autoplay>
            <source src="{{asset('music/background.mp3')}}" type="audio/mpeg">
        </audio>
    </body>
</html>
