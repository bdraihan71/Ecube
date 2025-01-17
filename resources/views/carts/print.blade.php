<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Events. Entertainment. Experience.">
	<meta name="author" content="Techynaf">
	<title>Ecube Entertainment</title>
	<!-- Bootstrap core CSS -->
	<link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="/frontend/vendor/font-awesome/css/all.css" rel="stylesheet" type="text/css">
	<!-- Animate CSS -->
	<link href="/frontend/vendor/animate/animate.min.css" rel="stylesheet">
	<!-- Owl CSS -->
	<link href="/frontend/vendor/owl/css/owl.carousel.min.css" rel="stylesheet">
	<!-- Fullpage CSS -->
	<link href="/frontend/vendor/fullpage/fullpage.min.css" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" href="/frontend/img/favicon.png">
	<!-- Custom styles -->
	<link href="/frontend/css/style.css" rel="stylesheet">
</head>

<body>
    <section id="ticket" class="ticket pb-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-8 ticket-text-line-height">
                    <br><br><br><br><br><br><br><br>
                    <p>{{$user->profile->f_name.' '.$user->profile->m_name.' '.$user->profile->l_name}}</p>
                    <p>{{$user->email}}</p>
                    <p>{{$user->profile->phone}}</p>
                    <p>{{$user->profile->address}}</p>
                    <p>{{$user->profile->division}}</p>
                </div>
                <div class="col-md-3 ticket-text-line-height">
                    <img class="img-fluid" src="/frontend/img/favicon.png">
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 ticket-text-line-height">
                    <h1 class="shaded">INVOICE</h1>
                    <p>Order Date: {{date("M d, Y", strtotime($purchase->created_at))}}</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 ticket-text-line-height">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchase->carts as $item)
                                <tr>
                                    <th scope="row">{{$item->product->name}}</th>
                                    <td>BDT {{number_format((float)$item->product->price, 2, '.', '')}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>BDT {{number_format((float)($item->product->price * $item->quantity), 2, '.', '')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><hr>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6 ticket-text-line-height">
                    
                </div>
                <div class="col-md-6 ticket-text-line-height">
                    <p>Subtotal <span class="float-right">BDT {{number_format((float)$total, 2, '.', '')}}</span></p>
                    <p>Shipping <span class="float-right">BDT {{number_format((float)$shipping[0], 2, '.', '')}}</span></p>
                    <hr>
                    <p>Total <span class="float-right text-danger">BDT {{number_format((float)($shipping[0] + $total), 2, '.', '')}}</span></p>
                </div>
            </div>
            <p class="text-danger">Items will be shipped within {{$shipping[1]}} days.</p>
        </div>      
    </section>
    <!-- Scripts for Bootstrap-4 -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Scripts for WOW -->
    <script src="vendor/animate/wow.min.js"></script>
    <!-- Scripts for OWL -->
    <script src="vendor/owl/js/owl.carousel.min.js"></script>
	<!-- Scripts for Fullpage -->
    <script src="vendor/fullpage/fullpage.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
	<script>
		$(document).ready(function(){
			$('.partners-carousel').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true,
					autoplay:true
				},
				600:{
					items:3,
					nav:false,
					autoplay:true
				},
				1000:{
					items:6,
					nav:true,
					autoplay:true
				}
			}
		});
	});
	</script>
</body>
</html>