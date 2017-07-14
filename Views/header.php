<section name="imageCover" id="xx">
	<div class="container-fluid mainImage">
		<div class="second">
    <div class="row ">
			 <div class="col-sm-5 col-sm-offset-1" >
       <transition name="header">
          <h2 class="header" v-show="soso">Nature</h2>
        </transition>  
        <transition name="header1" >
           <h3 class="header1" v-show="lolo">Save Nature from desertification</h3> 
        </transition>
        <div class="cover">
        <transition name="txtHere">
             <p class="txtHere" v-show="mimi">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis</p>
        </transition>
        </div>
</div>
       </div>
		</div>
	</div>	
</section>	

<section name="navBar">
  <div id="app">
          <ul class="nav nav-tabs" >
              <li role="presentation" :class="Suzy" ><a href="/ProtectNature/ItsOwers/Home/" >Home</a></li>
              <li role="presentation"  :class="Maro"><a href="/ProtectNature/ItsOwers/Profile/">Profile</a></li>
              <li role="presentation" :class="May"><a href="/ProtectNature/ItsOwers/Celebrities/" title="what celebrities say">Celebrities</a></li>
              <li role="presentation" :class="News"><a href="/ProtectNature/ItsOwers/News/">News</a></li>

        </ul>
    </div>
</section>