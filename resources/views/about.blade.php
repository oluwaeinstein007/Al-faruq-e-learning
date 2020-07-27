<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us</title>
        <h5>Powered by <strong>L'Phi Hub</strong> </h5>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #009345;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #7FD825;
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
        </style>
    </head>
    <body>
    <div></div>
        <div>
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h1>About Al-Faruq E-Learning</h1>
            <div class="flex-center position-ref full-height">
            
            










                <h3>
            The Al-faruq E-Learning platform is designed to enhance learning without boundaries, borders, barriers or any form of physical limitations.
            
            The concept of the Al-faruq brand was initiated by Dr. Abdul-Hakeem Abdul-Lateef and birthed on the 30th of October, 1995.  Ever since, the brand has produced unnumerable and colossal geniuses that now bestride the academic and industrial landscape, locally and internationally.
           
             This platform(E-learning) is specifically designed to expose students to some LIKELY EXAMINATION QUESTIONS they will be faced with in national and international examination such as WAEC, JAMB, POST JAMB, SAT, IELTS and more. The videos were produced to give the candidates and viewers that rare kind of classroom experience with exceptional and gifted instructors/experts, applying uncommon teaching modules that are quite unconventional
            <p>WELCOME TO THE WORLD OF CHAMPIONS!</p> 
            </h3>        
            <p></p>


            <div class="links">
                <a href="{{ url('/') }}">Back</a>
            </div>


            </div>
                      
                
                
                




            </div>

        </div>

                

    </body>
</html>
