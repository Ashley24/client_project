<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>


<!-- <input id="box-toggle" type="checkbox">
<label for="box-toggle">Show geometry</label>  -->

<!-- 
<</ul> -->
<!-- <ul class="nav nav-pills nav-stacked">
   <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Background</a></li>
  <li role="presentation"><a href="#">Services</a></li>
</ul> -->


<body data-spy="scroll" data-target="#navbar-example">
 
  <div id="navbar-example">
    <ul class="nav nav-tabs" role="tablist">
     <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Background</a></li>
  <li role="presentation"><a href="#">Services</a></li>
    </ul>
  </div>
  ...
</body>





