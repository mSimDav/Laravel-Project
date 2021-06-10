
<!DOCTYPE html>

<!doctype html>
<html lang="en">
  <head>
  	<title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../login/css/style.css">
        <style>
            body {
                overflow: hidden; 
            }
            .content-middle {
            margin: 0 auto;
            text-align: center;
            position: absolute;
            width: 100%;
            margin-top: -30px;
            }
        </style>
	</head>
	<body>
	<section class="ftco-section">
            <div class="content-middle">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(../login/images/login_2.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							@yield('content')
		        </div>
		      </div>
				</div>
			</div>
		</div>
            </div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>