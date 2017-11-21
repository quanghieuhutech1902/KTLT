<aside id="fh5co-hero" clsas="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
	   	<li style="background-image: url(<?php  echo $hinhanh[0]["img"]; ?>);">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
	   				<div class="slider-text-inner">
	   					<h2><?php  echo $hinhanh[0]["name"]; ?></h2>
	   			</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>
<div class="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 fh5co-heading animate-box">
				<h2 class="text-center"><?php  echo $hinhanh[0]["name"]; ?></h2>
				<p>
					<?php  echo $hinhanh[0]["discription"]; ?>
				</p>
			</div>
				<div class="pricing">
					<?php
					    foreach($baiviet as $bviet)
					    {
					       	echo'<div class="col-md-3 animate-box fadeInUp animated">';
						   	echo'<div class="price-box">';
						   	echo'<h2 class="pricing-plan">',$bviet["name"],'</h2>';
						  	echo '<div class="price"><sup class="currency">$</sup>',$bviet["id"],'<small>/month</small></div>';
						   	echo '<p>',$bviet["discription"],'</p>';
						    echo'<a href="#" class="btn btn-select-plan btn-sm">Xem chi tiết</a>';
							echo'</div>';
							echo'</div>';
					    }
					?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3 animate-box">
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. <a href="#">Learn More</a></p>
				</div>
			</div>

		</div>
	</div>