 <?php if($data==""):?>

 <section name="home" class="home">
 	<div class="container" >
 		<div class="row section2">
 			<div class="col-sm-4">
 				<span class="glyphicon glyphicon-tree-deciduous tree" aria-hidden="true"></span>
 				<span>We Plan on Protecting Trees</span>
 				<p class="paragraph">A Tree Preservation Order is an order made by a local planning authority in England to protect specific trees, groups of trees or woodlands in the interests of amenity. An Order prohibits the:cutting down
topping lopping uprooting wilful damage wilful destruction of trees without the local planning authority’s written consent. </p>
 			</div>
 			<div class="col-sm-4">
 				<span class="glyphicon glyphicon-bishop tree" aria-hidden="true"></span>
 				<span>most efficient Agency in the world</span>
 				<p class="paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis </p>
 			</div>
 			<div class="col-sm-4">
 				<span class="glyphicon glyphicon-signal tree" aria-hidden="true"></span>
 				<span>most connected with public</span>
 				<p class="paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis </p>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-sm-6 col">
 				<h2>Welcome To our webiste</h2>
 			</div>
 			<div class="col-sm-4 col-sm-offset-1 col" >
 				<h3 class="articles">Articles</h3>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-sm-2">
 				<img src="http://localhost/ProtectNature/public/images/earth.png" alt="" class="earth img-responsive">
 			</div>
 			<div class="col-sm-4">
 				<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis</p>
 			</div>
 			<div class="col-sm-2 col-sm-offset-1">
 				  <?php //foreach($x as $y) :?>
                      <img src="http://localhost/ProtectNature/public/images/<?php echo $g['image'];?>" alt="" class="img-responsive ss">
                  <?php //endforeach ;?>
 			</div>
 			<div class="col-sm-s">
 				<p class="txt"><?php 
                  $info1 = $g['article'];
              		    if(strlen($info1) > 349){
              		         $article1=	substr($info1,0,250);
              		                            } 
              		          echo $article1.".....";?>
                      <a href="#">read more</a></p>
 			</div>
 		</div>
 	</div>
</section>
 <?php endif;?>