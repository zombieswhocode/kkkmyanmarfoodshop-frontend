@extends('layout.main')
@section('content')

	<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="/assets/img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">ေအာ္ဒါမွာယူရန္</h2>
					
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Single Item Start -->
				
				<div class="single-item">
					<div class="container">
						<!-- Shopping single item contents -->
						<div class="single-item-content">
							<div class="row">
								<div class="col-md-4 col-sm-5">
									<!-- Product image -->
									<img class="img-responsive img-thumbnail" src="/assets/img/shopping/shop-single.jpg" alt="" />
								</div>
								<div class="col-md-8 col-sm-7">
									<!-- Heading -->
									<h3>ထမင္းသုပ္</h3>
									<div class="row">
										<div class="col-md-7 col-sm-12">
											<!-- Single item details -->
											<div class="item-details">
												<!-- Paragraph -->
												<p class="text-justify">ဧည္႔သည္ေတြ က သူတုိ႔ ခ်ဳိင္႔ထဲ ကို ထည္႔တဲ႔ ဟင္းေတြ က အက်န္ေတြ ထည္႔တာလား၊ သန္႔သန္႔ရွင္းရွင္းေကာ ျဖစ္ရဲ႕လား၊ စိတ္ခ် ရရဲ႕လား ဆိုတဲ႔ သူတို႔ စိတ္ထဲက ေမးခ်င္တဲ႔ ေမးခြန္းေတြ အတြက္ေလ႔လာခ်င္တယ္ဆိုရင္ ကၽြန္မတို႔ က မနက္ ခုႏွစ္နာရီခြဲကေန ရွစ္နာရီ ၄၅ မိနစ္ အခ်ိန္တြင္းမွာ လာေလ႔လာဖို႔ အခ်ိန္အျဖစ္သတ္မွတ္ေပးထားပါတယ္။ ၾကည္႔ျပီး အကဲျဖတ္ျပီး စိတ္ၾကိဳက္ျဖစ္ေတာ႔မွ မွာႏိုင္ေအာင္ပါ။
ဘာေၾကာင္႔လဲ ဆိုေတာ႔ ထမင္းဟင္းခ်က္တယ္ ဆိုတဲ႔ အလုပ္ဟာ စားသံုးသူ ရဲ႕ မ်က္စိေနာက္ကြယ္မွာ လုပ္တာျဖစ္တဲ႔ အတြက္ တစ္ေယာက္နဲ႔ တစ္ေယာက္ သံသယ ရွိႏိုင္တယ္။ စားတဲ႔လူေတြ ပိုျပီး ယံုၾကည္စိတ္ခ်မႈရွိေအာင္ အဲဒီလို ေလ႔လာတဲ႔ အခ်ိန္ဟာ တစ္ျမိဳ႕လံုး အတြက္ ခ်ဳိင္႔ထည္႔တဲ႔ အခ်ိန္မို႔ပါ။ </p>
												<!-- Heading -->
												<h5>Ingredients :-</h5>
												<!-- Recipe ingredients -->
												<ul class="list-unstyled">
													<li>
														<i class="fa fa-check"></i> ေျမပဲဆံ <span class="pull-right"> ၁၀၀ ဂရမ္</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> ဆီ <span class="pull-right"> ၂ က်ပ္သား</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> သၾကား <span class="pull-right"> ၁ ဂရမ္</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> ထမင္း<span class="pull-right"> ၅၀ ဂရမ္</span>
														<div class="clearfix"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-sm-12"> 
											<!-- Form inside table wrapper -->
											<div class="table-responsive">
												<!-- Ordering form -->
												<form role="form">
													<!-- Table -->
													<table class="table table-bordered">
														<tr>
															<td>Price</td>
															<td>$49</td>
														</tr>
														<tr>
															<td>Shipping</td>
															<td>Free</td>
														</tr>
														<tr>
															<td>Delivery Time</td>
															<td>45 Min</td>
														</tr>
														<tr>
															<td>Quantity</td>
															<td><div class="form-group">
																<select class="form-control input-sm">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>Payment Mode</td>
															<td><div class="form-group">
																<select class="form-control input-sm">
																	<option>Cash on delivery</option>
																	<option>Credit Card</option>
																	<option>Debit Card</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td><div class="form-group">
																<button type="submit" class="btn btn-danger btn-sm">အတည္ျပဳသည္</button>
															</div></td>
														</tr>
													</table>
												</form><!--/ Table End-->
											</div><!--/ Table responsive class end -->
										</div>
									</div><!--/ Inner row end  -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Single Item End -->
			
				<!-- Showcase Start -->
				
				@include('include.showcase');
				<!-- Showcase End -->
				
			</div><!-- / Inner Page Content End -->	
			
@stop