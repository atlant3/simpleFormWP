<?php
function wp_step_form( $atts = array(), $content = null ) {
  extract(shortcode_atts(array('title' => ''), $atts));

  return  ('<div class="container">
	  	<div class="row  justify-content-center align-items-center h-100">
	    	<div class="">

	    		<form id="wpForm" action="#">
					<div class="breadcrumbs">
						<ul>
							<li class="breadcrumb-item"><img src="'.get_stylesheet_directory_uri().'/icons/home.png"></li>
							<li class="breadcrumb-item">Contact info</li>
							<li class="breadcrumb-item">Quantity</li>
							<li class="breadcrumb-item">Price</li>
							<li class="breadcrumb-item">Done</li>			
						</ul>
					</div>

		<div class="tab">
			<h1>Contact info</h1>
			<div class="form-tab">
				<p><span>Name </span><input type="text" name="name" id="name"></p>
				<p><span>Email <sup>required</sup></span><input type="email" name="email" id="email"></p>
				<p><span>Phone </span><input type="number" name="phone" id="phone"></p>
			</div>
		</div>

		<div class="tab">
			<h1>Quantity</h1>
			<div class="form-tab">
				<p><span>Quantity <sup>required</sup> </span><input type="number" name="quantity" id="quantity"></p>
			</div>
		</div>

		<div class="tab">
			<h1>Price</h1>
			<span id="price"></span>
		</div>

		<div class="tab">
			<h1>Done</h1>
			<p id="okDone">✅ Your email was send successfully</p>
			<p id="errSendDone">⚠️ We cannot send you email right now. Use alternative way to contact us</p>
		</div>


		<div class="buttons">
			<button type="button" id="continueBtn" onclick="continueButton(1)">Continue</button>
			<button type="button" id="backBtn" onclick="continueButton(-1)"><span>Back</span></button>
		</div>

	</form>	


	    	</div>
		</div>
              <h2 class="form-title">'.$title.'</h2>
              <p class="form-description">'.$content.'</p>
	 </div>');

}

add_shortcode('r_test', 'wp_step_form');	