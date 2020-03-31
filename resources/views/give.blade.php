@extends('layouts.applanding')
@section('title',"African Health Savers| Donate")
@section('content')

<div class="donate-banner">
	<div class="container">
		  <div class="donate-banner-main">
				<div class="col-md-6 donate-banner-left">
					<h3> DONATE </h3>
				</div>
				<div class="col-md-6 donate-banner-right">
					<ul> 
						<li><a href="#"> <span class="fa"> </span></a></li>
    	         	    <li><a href="#"> <span class="tw"> </span></a></li>
    	         	    <li><a href="#"> <span class="g"> </span></a></li>
    	         	    <li><a href="#"> <span class="e"> </span></a></li> 
					</ul>
				</div>
		<div class="clearfix"> </div>
		    </div>
	  </div>
</div>
<div class="donate">
	<div class="container">
		<div class="donate-main">
			<div class="col-md-4 donate-left">
				<img src="images/business.jpg">
				<h3>Make a difference </h3>
				<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
			</div>
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<h3> Select Amount</h3>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $15 </a>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $35 </a>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $100 </a>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $250 </a>
				<div class="radio-bot">
					<a href="#"> <input type="radio" name="dolars" value="$15"> $500 </a>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $2500 </a>
					<a href="#"> <input type="radio" name="dolars" value="$15"> $5000 </a>
					<a class="search" href="#"> <input type ="text" value="$ Other"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '$ Other';}"> </a>
				</div>	
					<p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
				</div>
				<div class="donate-top">
					<h3>Personal information</h3>
					<form>
						<input type="text" value="First Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"/>
						<input type="text" value="Last Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"/>
						<input type="text" value="Email Address*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"/>
						<input type="text" value="Phone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"/>
					 <div class="text-ad">
						<input type="text" value="Address*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"/>
					</div>
					<div class="text-sma">	
						<input type="text" value="City*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City*';}">
					    <select name="city">
							<option value="select your location"> states</option>
							<option value="saab">location1</option>
							<option value="fiat">location2</option>
							<option value="audi">location3</option>
						</select>
						<input type="text" value="Zip*" onfocus="this.value = '';" onblur="if (this.value =='') {this.value = 'Zip*';}">
					</div>
					<input type="submit" value="Donate">
					<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
 
@endsection
