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
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            html {
              background-image: url('https://www.scholastic.com/content/dam/teachers/lesson-plans/2016-2017/everyday-study-skills-lesson-plan-16-9.jpg');
              background-size: cover;
            }
            body{
              background-color: rgba(0, 0, 0, 0.6);
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
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
                color: #c0c3c5;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .button {
              /* background-color: #4CAF50; /* Green */ */
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              transition-duration: 0.4s;
              cursor: pointer;
              }

              .button3 {
                /* background-color: white; */
                color: #f44336;
                border: 2px solid #f44336;
              }

              .button3:hover {
                background-color: #f44336;
                color: white;
              }


              /* Dropdown Button */
              .dropbtn {
                padding: 16px;
                font-size: 16px;
                border: none;
              }

              /* The container <div> - needed to position the dropdown content */
              .dropdown {
                position: relative;
                display: inline-block;
              }

              /* Dropdown Content (Hidden by Default) */
              .dropdown-content {
                display: none;
                position: absolute;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
              }

              /* Links inside the dropdown */
              .dropdown-content a {
                color:white;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
              }

              /* Change color of dropdown links on hover */
              .dropdown-content a:hover {background-color: #ddd;color:#1d2021}

              /* Show the dropdown menu on hover */
              .dropdown:hover .dropdown-content {display: block;}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                      <div class="dropdown links">
                        <a class='dropbtn' href="#">Login</a>
                        <div class="dropdown-content">
                          <a href="{{ url('login/student') }}">Student</a>
                          <a href="{{ url('login/admin') }}">Admin</a>
                        </div>
                      </div>
                        @if (Route::has('register'))
                            <a href="{{ url('/register/student') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <a href="{{route('browse')}}" class="button button3"><h3>Browse Courses</h3></a>
                </div>
            </div>
        </div>
    </body>
</html>
