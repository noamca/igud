<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeDescription = __d('cake_dev', 'טנאקט אפליקציית קליטת גלויות');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="/css/bootstrap.css" /> 
</head>
<body>

<script>
window.setTimeout(function() {
$.ajax({
  url: "/users/updateLastActivity/" ,
  //other stuff you need to build your ajax request
 }).done(function(data) {
   //alert("רענן אותי F5 - בדיקה מנועם");
 })
}, 60000);

</script>


	<div id="container">
		<div id="content">
            <nav class="navbar navbar-default" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/tenekat/leads/add">קליטת רשומות</a></li>
                  <li><a href="/tenekat/leads/index">רשימת גלויות</a></li>
                  <li><a href="/tenekat/leads/preexport">ייצוא לאקסל</a></li>
                  <li><a href="/tenekat/leads/updatehospitals">עדכון בתי חולים</a></li>
                  <li><a href="/tenekat/cities">ערים</a></li>
                  <li><a href="/tenekat/hospitals">רשימת ביח</a></li>
                  <li><a href="/tenekat/users/logout">יציאה</a></li>
                  
                  <li class="divider"></li>
                </ul>
                <div style="float:left"><img src="/img/logo.png" height="80px"></div>
              </div><!-- /.navbar-collapse -->
            </nav>        
        
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://tenekat.manta-web.co.il',
					array('target' => '_blank', 'escape' => false)
				);
			?>
            <div id="copyright">מערכת זו נבנתה ב<a href="http://www.manta-web.co.il" target="_blank">מאנטהווב</a></div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
