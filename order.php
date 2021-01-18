<?php
//include header.php file
ob_start();
include('Header.php');
?>

<?php

/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('Template/_order-template.php') :  include ('Template/notFound/_cart_notFound.php');
/*  include cart items if it is not empty */

/*  include top sale section */
/*  include top sale section */

?>


<?php
//include footer.php file
include('Footer.php');
?>