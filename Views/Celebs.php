<section name = "Celebrities">
          <!-- condition appearanve of data -->
        <?php if($data=="Celebrities"):?>

        <div class="container">
        	<?php foreach($x as $y) :?>
        	 <div class="row " style="margin-top: 60px;">
              		<div class="col-sm-4 col-xsm-4">
                      <img src="http://localhost/ProtectNature/public/images/<?php echo $y['image'] ;?>" alt="" class="Images img-responsive">
                  </div>
              		<div class="col-sm-4 col-sm-offset-1 col-xsm-4 col-xsm-offset-4" style="margin-top: 40px;"><p>
              		<?php

              		    $info = $y['article'];
              		    if(strlen($info) > 349){
              		         $article=	substr($info,0,349);
              		                            } 
              		          echo $article.".....";?>
                      <a href="#">read more</a></p>
                    </div>
        	</div>
          <?php endforeach ;?>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-4">
               <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <?php for($y=1;$y< $x->count() ;$y++) :?>
                <li><a href="/ProtectNature/ItsOwers/Celebrities/<?php echo $y;?>"><?php echo $y;?></a></li>
              <?php endfor ;?>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            </div>
        </div>
        </div>
        <?php endif;?>
</section>