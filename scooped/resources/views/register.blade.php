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

            .full-height {
                height: 70vh;
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
                font-size: 14px;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1 class="display-4 font-weight-bold underline text-black text-center">Register</h1>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <form method ="POST" action="/register">
						{{csrf_field()}}
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" name="name">
						
						</div>
						
						<div class="form-group">
							
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
						
						<div class="form-group">
							
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						
						<div class="form-group">
							
							<label for="password_confirmation">Confirm Password</label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
						</div>
						
						<div class="form-group">
							
							<button type="submit" class="btn btn-primary">Register</button>
						</div>

					  <form>
                </div>
            </div>
        </div>
    </body>
</html>

