<?php
/**
 * Plugin Name: popupplugin
 * Description:       Handle the login process.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            oumaima
 */
 

wp_enqueue_script('jquery'); 
function popupplugintext( $content ) {
    
    $content.='<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
         
    
        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>
    
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';
        return $content  ;
    }
   // jQuery alert to pop up when the page loads.

   function pop_jquery_test() {
    $src = plugins_url('js/jquerytest.js', __FILE__);
    wp_register_script( 'jquerytest', $src );
    wp_enqueue_script( 'jquerytest' );
    
    wp_enqueue_script( 'jquery' );
   // Add bootstrap CSS
   wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
   wp_enqueue_style( 'bootstrap-css' );
   wp_register_style( 'style-css', 'css/style.css', false, NULL, 'all' );
   wp_enqueue_style( 'style-css' );
   // Add popper js
   wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true );
   wp_enqueue_script( 'popper-js' );

   // Add bootstrap js
   wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true );
   wp_enqueue_script( 'bootstrap-js' );
   wp_register_style('your_namespace', plugins_url('css/style.css',__FILE__ ));
    wp_enqueue_style('your_namespace');

}
add_action('init','pop_jquery_test'); 
add_filter( 'the_content', 'popupplugintext' );
?>