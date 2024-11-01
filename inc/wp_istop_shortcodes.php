<?php 


add_shortcode('wp_isotop', 'wp_isotop_fn');

if(! function_exists('wp_isotop_fn')){

	function wp_isotop_fn(){
	?>


	        <section id="isotop_area">
	          <div class="container">
	            <div class="row">
	                <div class="col-md-12">

	                  <h1>Isotope</h1>
	                  <div id="filters" class="button-group">  

	                  <button class="button is-checked" data-filter="*">show all</button>
	                
	               <?php 
	               
	               $cats = get_terms('sp_isotop_cat');
	                if( $cats ){
	                   foreach ($cats as $cat ) {
	                    ?>

	                    <button class="button" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>

	                    <?php 
	                    } 
	                }else{
	                    echo '<button class="button" data-filter=".metal">metal</button>  
	                      <button class="button" data-filter=".transition">transition</button>
	                      <button class="button" data-filter=".alkali, .alkaline-earth">alkali</button>
	                      <button class="button" data-filter=":not(.transition)">not transition</button>
	                      <button class="button" data-filter=".metal:not(.transition)">metal</button>';
	                }
	                
	               ?>
	             
	                  </div>

	                  <div class="grid">
	<?php 
	$q = new WP_Query( array(
	    'post_type'     => 'sp_magic_isotop',
	    'posts_per_page'=> -1
	));

	if( $q->have_posts() ):
	while( $q->have_posts() ):$q->the_post();

	?>

	<div class="element-item transition metal 
	<?php 
	$cats = get_the_terms(get_the_id(), 'sp_isotop_cat');

	    if( is_array($cats) ){
	         foreach ( $cats as $cat ) {
	             echo $cat->slug.' ';
	        }
	    }
	 
	?>

	" data-category="transition">
	    
	    <?php the_post_thumbnail(); ?>
	    
	</div>


	<?php endwhile; ?>
	<?php else: ?>
	                    <div class="element-item transition metal " data-category="transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i1.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item metalloid " data-category="metalloid">
	                       
	                       <?php echo ' <img src="' . plugins_url( '../img/i2.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item post-transition metal " data-category="post-transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i3.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item post-transition metal " data-category="post-transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i4.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item transition metal " data-category="transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i5.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item alkali metal " data-category="alkali">
	                        <?php echo ' <img src="' . plugins_url( '../img/i1.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item alkali metal " data-category="alkali">
	                       <?php echo ' <img src="' . plugins_url( '../img/i3.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item transition metal " data-category="transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i5.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
	                        <?php echo ' <img src="' . plugins_url( '../img/i2.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item transition metal " data-category="transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i3.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item post-transition metal " data-category="post-transition">
	                        <?php echo ' <img src="' . plugins_url( '../img/i1.png', __FILE__ ) . '" >'; ?>
	                    </div>
	                    <div class="element-item metalloid " data-category="metalloid">
	                       <?php echo ' <img src="' . plugins_url( '../img/i5.png', __FILE__ ) . '" >'; ?>
	                    </div>
	        <?php endif; ?>            
	                </div>

	            </div>
	        </div>
	    </sectio



	<?php
	}
}

