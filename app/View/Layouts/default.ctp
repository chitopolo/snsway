<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->script('bootstrap.min');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
	<link href='http://fonts.googleapis.com/css?family=Stalemate|Ropa+Sans|Satisfy|Fjalla+One' rel='stylesheet' type='text/css'>
</head>


<body>

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<header id="topHeader">


   <div class="navbar navbar-inverse  navbar-fixed-top   ">
  
  <div class="navbar-inner  ">
  <div class="container">
    <a class="brand" href="http://www.chitopolo.com/">Chitopolo</a>
    <ul class="nav">
    
    <li><?php echo $this->Html->link(__('Home'), '/'); ?></li>
    <li class="divider-vertical"></li>
    <li><?php echo $this->Html->link(__('Services'), array('controller' => 'Pages', 'action' => 'services')); ?></li>
    <li class="divider-vertical"></li>
    <li><?php  echo $this->Html->link(__('Portafolio'), array('controller' => 'Pages', 'action' => 'portafolio')); ?></li>
    <li class="divider-vertical"></li>
    <li><?php echo $this->Html->link(__('Who is ChitoPolo?'), array('controller' => 'Pages', 'action' => 'contact')); ?></li>
    <li class="divider-vertical"></li>
     
         
                
                
    </ul>
  </div>
  </div>

</div>
</div>
</header>
<!-- Here's where I want my views to be displayed -->


<!-- <div class="alert alert-success"> Deja tu email o logeate con tu facebook para recibir toda la informacion este 8 de Noviembre 2012 </div> -->

<div class="content">
<?php echo $this->fetch('content'); ?>
</div>
<!-- Add a footer to each displayed page -->
<div id="footer" >

<div class="container">


<div class="row" >
<div class="span3 offset5">
<p class="lead">By Rene Jesus Polo</p></div>
</div>
</div>
</body>
<footer>

<?php /* echo $this->element('sql_dump'); */ ?>
</footer>
</html>
