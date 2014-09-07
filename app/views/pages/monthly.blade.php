@extends('layout.main')
@section('content')
	<!-- Shopping cart Modal -->
		<div class="modal fade" id="orderForm" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">အခ်က္အလက္မ်ားျဖည့္သြင္းပါ</h4>
					</div>
					<div class="modal-body">
						<!-- Booking form area -->
								<div class="booking-form">
									
									<!-- Booking form -->
									<form role="form">
										<!-- Form label -->
										<label>နံမည္</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="နံမည္ျဖည့္သြင္းပါ" />
										</div>
										<!-- Form label -->
										<label>အီးေမးလ္(Email)</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="email" placeholder="Email" />
										</div>
										<!-- Form label -->
										<label>ဖုန္း</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="ဖုန္းနံပါတ္ျဖည့္သြင္းပါ" />
										</div>
										
										<!-- Form label -->
										<label>လိပ္စာ</label>
										<div class="form-group">
											<!-- Form text area -->
											<textarea class="form-control" rows="3" placeholder="လိပ္စာျဖည့္သြင္းါ"></textarea>
										</div>
										<!-- Form button -->
										<button class="btn btn-danger btn-sm" type="submit">Confirm</button>&nbsp;
										<button class="btn btn-default btn-sm" type="reset">Reset</button>
									</form>
								</div>
					</div>
					
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
	<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="/assets/img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">ခ်ိဳင့္ဆြဲမွာယူရန္</h2>
					
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Booking Start -->
				
				<div class="booking">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<!-- Heading -->
								<h3>ခ်ဳိင္႔ဆြဲ စနစ္အေၾကာင္း</h3>
								<!-- Paragraph -->
								
								<div class="panel panel-warning">
								  <!-- Default panel contents -->
								 	<div class="panel-heading">တစ္ေၾကာင္းပို႔ေစ်းႏႈန္း (မနက္စာ၊ ညစာ တစ္ႀကိမ္ပို႔)</div>
									<table class="table table-hover">

										<tbody>
											<tr>
												<td>တစ္ေယာက္စာ (B+)</td>
												<td>135000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
											<tr>
												<td>ႏွစ္ေယာက္စာ (A+)</td>
												<td>193000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
											<tr>
												<td>သံုးေယာက္စာ</td>
												<td>308000%</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div class="panel panel-info">
								  <!-- Default panel contents -->
								 	<div class="panel-heading">တစ္ေၾကာင္းပို႔ေစ်းႏႈန္း (မနက္စာ၊ ညစာ တစ္ႀကိမ္ပို႔)</div>
									<table class="table table-hover">

										<tbody>
											<tr>
												<td>တစ္ေယာက္စာ (B+)</td>
												<td>135000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
											<tr>
												<td>ႏွစ္ေယာက္စာ (A+)</td>
												<td>193000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
										
										</tbody>
									</table>
								</div>
								
								<div class="panel panel-success">
								  <!-- Default panel contents -->
								 	<div class="panel-heading">တစ္ေၾကာင္းပို႔ေစ်းႏႈန္း (မနက္စာ၊ ညစာ တစ္ႀကိမ္ပို႔)</div>
									<table class="table table-hover">

										<tbody>
											
											<tr>
												<td>သံုးေယာက္စာ</td>
												<td>308000%</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">Order now</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
							<div class="col-md-5">
								<!-- Booking form area -->
								<div class="booking-form">
									<!-- Heading -->
									<h3>Reservation</h3>
									<!-- Paragraph -->
									<p>Loren gypsum dolour sit amet, conjecture listing elite, sed do eiusmod tempor incident ut laboured et magna aliqua.</p>
									<!-- Booking form -->
									<form role="form">
										<!-- Form label -->
										<label>Full Name</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="Name" />
										</div>
										<!-- Form label -->
										<label>Email</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="email" placeholder="Email" />
										</div>
										<!-- Form label -->
										<label>Contact</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="Phone number" />
										</div>
										<!-- Form label -->
										<label>Booking Type</label>
										<div class="form-group">
											<!-- Form drop down -->
											<select class="form-control">
												<option>Single</option>
												<option>Couple</option>
												<option>Family</option>
												<option>Business</option>
											</select>
										</div>
										<!-- Form label -->
										<label>Extra Requirement</label>
										<div class="form-group">
											<!-- Form text area -->
											<textarea class="form-control" rows="3" placeholder="Requirement..."></textarea>
										</div>
										<!-- Form button -->
										<button class="btn btn-danger btn-sm" type="submit">Confirm</button>&nbsp;
										<button class="btn btn-default btn-sm" type="reset">Reset</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Booking End -->
			
				<!-- Showcase Start -->
				
				<div class="showcase">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="/assets/img/fruit2.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="/assets/img/fruit3.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Equine Porno Sumos</a></h3>
									<!-- Paragraph -->
									<p>Nam libero tempore, cum soluta nobis est minis voluptas assum simple and easy to distinguis quo.</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Showcase End -->
				
			</div><!-- / Inner Page Content End -->	
			
@stop