@include ('partials.navbar')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drivers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


        <!-- Styles -->
        <style> 

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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Overview
                </div>
                    <br/>
                    <br/>
                    <p>Scooped is an application that serves as a platform which assists students in finding rides to and from school. Drivers post their starting and ending location, and students headed to the same area can sign up for a seat in the driver’s car. This provides value to drivers, as the fee they charge per seat helps them cover the expenses of commuting. Riders receive value through the cost and time savings they realize. With the cost of public transportation increasing, riders could realize savings of over 50% per ride. Public transportation can also be very time consuming, as multiple transfers are sometimes required. Not only this, but stops are more likely than not some distance away from a rider’s final destination. With an affordable and more time friendly alternative, students will be more willing to take these institutions into consideration, leading to increased registration. Schools will see an increase in funding and status, allowing them to provide better resources to students.
                    <br/><br/><br/>

                <a class="btn btn-outline-secondary text-black " href="login">Get Started</a>
            </div>
        </div>
    </body>
</html>
