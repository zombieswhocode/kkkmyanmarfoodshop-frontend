@extends('layout.main')
@section('content')

	<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="/assets/img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">စားပြဲႀကိဳတင္မွာယူရန္</h2>
					
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
								<h3>စားပြဲႀကိဳတင္ယူရန္</h3>
								<!-- Paragraph -->
								<p>ျမန္မာ ထမင္းဟင္း နဲ႔ ပတ္သက္၍ မ်က္ႏွာ မပ်က္ေစရန္ ကူညီပါရေစ။ လူၾကီးမင္း ၏ မြန္ျမတ္ေသာ အလွဴအတန္း ဧည္႔ခံပြဲမ်ား ၌ လိုအပ္ေသာ အပိုင္းအလိုက္ ဧည္ခံေကၽြးေမြး မႈကို တာဝန္ယူ ေဆာင္ရြက္ေပးပါမည္။ ပြဲအစမွ အဆံုး ေကၽြးေမြးဧည္ခံ ျပင္ဆင္သည္႔ အပိုင္းမွ စ၍ သိမ္းဆည္းျပီးဆံုးသည္ အထိ လူၾကီးမင္း စိတ္ပူရန္ မလိုပါ။ ဖုန္းဆက္ဖို႔သာ လိုပါသည္။</p>
								<!-- Image Slider -->
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img class="img-responsive" src="/assets/img/booking/table1.jpg" alt="" />
										</div>
										<div class="item">
											<img class="img-responsive" src="/assets/img/booking/table2.jpg" alt="" />
										</div>
										<div class="item">
											<img class="img-responsive" src="/assets/img/booking/table3.jpg" alt="" />
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<span class="fa fa-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<span class="fa fa-chevron-right"></span>
									</a>
								</div>
							</div>
							<div class="col-md-5">
								<!-- Booking form area -->
								<div class="booking-form">
									<!-- Heading -->
									<h4>ေဖာင္ျဖည့္ရန္</h4>
									<!-- Paragraph -->
									<p></p>
									<!-- Booking form -->
									<form role="form">
										<!-- Form label -->
										<label>နာမည္</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="နာမည္ေရးပါ" />
										</div>
										<!-- Form label -->
										<label>အီးေမးလ္(Email)</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="email" placeholder="Email ေရးေပးပါ" />
										</div>
										<!-- Form label -->
										<label>ဖုန္းနံပါတ္</label>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" placeholder="ဖုန္းနံပါတ္ေရးေပးပါ" />
										</div>
										<!-- Form label -->
										<label>လူအေရအတြက္</label>
										<div class="form-group">
											<!-- Form drop down -->
											<select class="form-control">
												<option>၁ ေယာက္</option>
												<option>၂ ေယာက္</option>
												<option>၃ ေယာက္</option>
												<option>၄ ေယာက္</option>
												<option>၅ ေယာက္</option>
												<option>၆ ေယာက္</option>
												<option>၇ ေယာက္</option>
												<option>၈ ေယာက္</option>
											</select>
										</div>
										<!-- Form label -->
										<label>အပို လိုအပ္ခ်က္မ်ား</label>
										<div class="form-group">
											<!-- Form text area -->
											<textarea class="form-control" rows="3" placeholder="လိုအပ္ခ်က္မ်ားေရးေပါ"></textarea>
										</div>
										<!-- Form button -->
										<button class="btn btn-danger btn-sm" type="submit">အတည္ျပဳသည္</button>&nbsp;
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Booking End -->
			
				<!-- Showcase Start -->
				
				@include('include.showcase');
				
				<!-- Showcase End -->
				
			</div><!-- / Inner Page Content End -->	
			
@stop