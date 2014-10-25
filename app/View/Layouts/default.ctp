<?php
/**
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

?>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
	Morarfora
	</title>
	<?php

		
		//echo $this->Html->css('cake.generic');
		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');	
		echo $this->Html->css(array('bootstrap.min.css','style.css'));	

	?>
</head>
<body>
<div id="content">
<?php
	echo $this->Session->flash();
	echo $this->fetch('content');	
	echo $this->element('sql_dump');
	echo $this->Html->script(array('jquery.min.js','recursos.js','bootstrap.min.js'));
?>
</body>
</html>
