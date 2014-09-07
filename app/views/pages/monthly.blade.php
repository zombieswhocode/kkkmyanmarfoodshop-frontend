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
										<button class="btn btn-danger btn-sm" type="submit">အတည္ျပဳသည္</button>
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
								<h4></h4>
								<!-- Paragraph -->
								
								<div class="panel panel-warning">
								  <!-- Default panel contents -->
								 	<div class="panel-heading">တစ္ေၾကာင္းပို႔ေစ်းႏႈန္း (မနက္စာ၊ ညစာ တစ္ႀကိမ္ပို႔)</div>
									<table class="table table-hover">

										<tbody>
											<tr>
												<td>တစ္ေယာက္စာ (B+)</td>
												<td>135000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
											</tr>
											<tr>
												<td>ႏွစ္ေယာက္စာ (A+)</td>
												<td>193000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
											</tr>
											<tr>
												<td>သံုးေယာက္စာ</td>
												<td>308000%</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
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
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
											</tr>
											<tr>
												<td>ႏွစ္ေယာက္စာ (A+)</td>
												<td>193000</td>
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
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
												<td><a data-toggle="modal" href="#orderForm" class="btn btn-warning pull-right" href="#">မွာယူမည္</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
							<div class="col-md-5">
								<!-- Booking form area -->
								<div class="booking-form">
									<!-- Heading -->
									<h4><b>ခ်ဳိင္႔ဆြဲ စနစ္အေၾကာင္း</b></h4>
									<hr>
									<!-- Paragraph -->
									<p><span class="red">အသားဟင္း ပါဝင္သည့္ပံုစံ</span><br />&nbsp;&nbsp; &nbsp;A ခ်ိဳင့္အမ်ိဳးအစားတြင္ မနက္စာအတြက္ အသားဟင္း (၄)တံုး ၊ ညေနစာအတြက္ အသားဟင္း (၄)တံုး ၊ အသီးအရြက္ေၾကာ္ (သို႕)အသုတ္၊ အရည္ေသာက္၊ ငါးပိတို႕စရာ တို႕ပါဝင္ပါမည္။<br /><br />&nbsp;&nbsp; &nbsp;B ခ်ိဳင့္အမ်ိဳးအစားတြက္ မနက္စာအတြက္ အသားဟင္း (၂)တံုး ၊ ညေနစာအတြက္ အသားဟင္း (၂)တံုး ၊ အသီးအရြက္ေၾကာ္ (သို႕)အသုတ္၊အရည္ေသာက္၊ ငါးပိတို႕စရာ တို႕ပါဝင္ ပါမည္။<br /><br />&nbsp;&nbsp; &nbsp;A ခ်ိဳင့္ႏွင့္ B ခ်ိဳင့္မွာ အသားဟင္း အေရအတြက္ သာကြာၿခားၿပီး အသီးအရြက္ေၾကာ္ (သို႕) အသုတ္၊ အရည္ေသာက္၊ ငါးပိတို႕စရာ တို႕မွာ အတူတူၿဖစ္ပါသည္။</p>

									<!-- Booking form -->
									
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