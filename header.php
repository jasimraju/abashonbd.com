<?php $this->load->view('includes/topheader');?>
<style>
#menu-special{

margin:2px 0 0 -5px;
height:65px;
border: 1px solid #ffffff;
width: 230px;
color:red;
}
 #main-search-btn{
width:100px; 
background:#174082; 
color:#ffffff;
}
 #main-search-btn:hover{
background:#0d7205;
}
#headermain{
	  background:#2d4be2;
	  border:none;
	  color: black;
  }
    #navbarleft{
margin-left: 60px;
text-align: center;
height:60px;



}
#awhite{
	color:#ffffff;
}
.messageid-main-right{
	border: 2px solid #ffffff;
	border-radius:10px;
	
	height: 60px;
	width:300px;
}

</style>
<body>

		<nav class="navbar navbar-inverse bg-primary"  id="headermain">
			  <div class="container" id="containerwidth">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a class="navbar-brand " href="#" id="awhite" >Logo</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						  <ul class="nav navbar-nav" id="navbarleft">
							<li class="text-cente" id="menu-special"><a href="#" id="awhite" >BUY/RENT Properties! <br>Post Your Requirement - FREE!</a></li>
							<li class="dropdown" style="margin-top:10px;"><a href="#" id="awhite">For Sale<span class="caret"></span></a>
										<div id="pop_me" class="dropdown-menu" id="dropdown-menu-main" style="background:#ffffff; border-radius: 10px; width:500px; color:black; margin-top:0px;">
												  <div class="row">
														 <div class="col-md-4">
																  <h4 class="menu-h3">Residential</h4>
																	  <ul>
																		  <li class="menu-li"> Apartment/Flat</li>
																		  <li class="menu-li"> Indepentd/House</li>
																		  <li class="menu-li"> Duplex/Home</li>
																		  <li class="menu-li"> Studio Apartment</li>
																	  </ul>
														</div >
														   <div class="col-md-4">
																   <h4 class="menu-h3">Commercial</h4>
																	   <ul>
																		  <li class="menu-li"> Office Space</li>
																		  <li class="menu-li"> Industrial Space</li>
																		  <li class="menu-li"> Shop Showroom</li>
																	  </ul>
														  </div >
														   <div class="col-md-4">
																	<h4 class="menu-h3">Land/Plot</h4>
																	   <ul>
																		  <li class="menu-li"> Residential Plot</li>
																		  <li class="menu-li"> Commercial  Plot</li>
																		  <li class="menu-li"> Agriculture Plot</li>
																	  </ul>
														  </div >
													</div>
											<div class="menu-li-footer">
												<h3 class="menu-footer-h3">Sell Your Property Here</h3>
											</div>
								</div>
							
							
							</li>
							<li class="dropdown" style="margin-top:10px;"><a href="#" id="awhite" >For Rent<span class="caret"></span></a>
									<div id="pop_me" class="dropdown-menu" style="background:#ffffff; border-radius: 10px; width:500px; color:black; margin-top:0px;">
												  <div class="row">
														 <div class="col-md-4">
																  <h4 class="menu-h3">Residential</h4>
																	  <ul>
																		  <li class="menu-li"> Apartment/Flat</li>
																		  <li class="menu-li"> Indepentd/House</li>
																		  <li class="menu-li"> Duplex/Home</li>
																		  <li class="menu-li"> Studio Apartment</li>
																	  </ul>
														</div >
														   <div class="col-md-4">
																   <h4 class="menu-h3">Commercial</h4>
																	   <ul>
																		  <li class="menu-li"> Office Space</li>
																		  <li class="menu-li"> Industrial Space</li>
																		  <li class="menu-li"> Shop Showroom</li>
																	  </ul>
														  </div >
														   <div class="col-md-4">
																	<h4 class="menu-h3">Land/Plot</h4>
																	   <ul>
																		  <li class="menu-li"> Residential Plot</li>
																		  <li class="menu-li"> Commercial  Plot</li>
																		  <li class="menu-li"> Agriculture Plot</li>
																	  </ul>
														  </div >
													</div>
											<div class="menu-li-footer">
												<h3 class="menu-footer-h3">Rent Out Your Property Here</h3>
											</div>
								</div>
							</li>
					<li style="margin-top:10px;"><a href="#" id="awhite">Companies & Developers</a></li>
					<li style="margin-top:10px;"><a href="#" id="awhite">Loan & Finance</a></li>
					<li style="margin-top:10px;"><a href="#" id="awhite">Resources</a></li>
				  </ul>
				  
				  <ul class="nav navbar-nav navbar-right" id="navbarright">
				  <li  style="width:200px;"><a href="#" id="awhite" >SELL/RENT Properties! <br>Post Your Ad - FREE!</a></li>
					<li style="margin-top:10px;"><a href="#" id="awhite" >Login</a></li>
				  </ul>
				</div>
			  </div>
		</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                          <li data-target="#myCarousel" data-slide-to="7"></li>
                          <li data-target="#myCarousel" data-slide-to="8"></li>
                          <li data-target="#myCarousel" data-slide-to="9"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/2.jpg" style="width:100%; height:430px;" alt="abashonbd">
					
			  </div>

			  <div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/3.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			  </div>
                         <div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/6.jpg" style="width:100%; height:430px;"" alt="abashonbd">
				   
			  </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/7.jpg" style="width:100%; height:430px;"" alt="abashonbd">
				   
			 </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/13.jpg" style="width:100%; height:430px;"" alt="abashonbd">
				   
			 </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/15.jpg" style="width:100%; height:430px;"" alt="abashonbd">
				   
			 </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/31.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			 </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/35.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			 </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/39.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			  </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/45.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			  </div>
			<div class="item">
				<img src="<?php echo base_url();?>assets/img/mainslideimg/100.jpg" style="width:100%; height:430px;" alt="abashonbd">
				   
			  </div>
			</div>

			
	</div>
	<div id="socialstylefix">
		<ul>
				<li id="socialstyle"><i class="fa fa-facebook"></i><b>Like Us on <br>Facebook</b></li>
				<li id="socialstyle"><i class="fa fa-linkedin"></i><b>Like Us on <br>Link din</b></li>
				<li id="socialstyle"><i class="fa fa-youtube"></i><b>Like Us on <br>YouTube</b></li>
		</ul>
	</div>
		<div class="center" id="main_search">
			<form class="form-inline">
	
				<select class="form-control" >
					<option value="">Buy</option>
					<option value="">Rent</option>
				</select>
		
				<select class="form-control" >
						<option value="">Division</option>
						<option value="">Dhaka</option>
						<option value="">Chittagong </option>
		
				</select>
				<select class="form-control" >
						<option value="">City</option>
						<option value="">Dhaka</option>
						<option value="">Chittagong </option>
				
				</select>
				<select class="form-control" >
						<option value="">Area</option>
						<option value="">uttara</option>
						<option value="">khilkhatong</option>
				</select>
				<select class="form-control" >
						<option value="">Property Type</option>
						<option value="">Land</option>
						<option value="">Building</option>
				</select>
				<div style="float:right; margin:0 20px 0 0;">
				<input type="text" name="productid" placeholder="Product ID" class="form-control">
				<button type="submit" id="main-search-btn"  class="btn btn-default">Search</button>
				</div>
			</form>
		</div>
	</dir>