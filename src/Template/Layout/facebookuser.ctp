<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
// pr($activeChallenge);die;
?>
<!DOCTYPE html>
<html>
<head>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	 <meta property="og:title" content="Weekly Challenge | <?= $activeChallenge->name ?>" />
	<meta property="og:url" content="<?= $activeChallenge->url ?>" />
	<meta property="article:published_time" content="<?= $activeChallenge->created ?>" />
	<meta property="article:modified_time" content="<?= $activeChallenge->modified ?>" />
	<meta property="og:updated_time" content="<?= $activeChallenge->modified ?>" />
	<meta property="og:image" content="<?= $activeChallenge->image_url ?>" />

	<?php echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));?>
	<!-- css and js plugins -->
	<?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    <!-- Inspenia Switchery for toggle buttons -->
    <?= $this->Html->css(['plugins/switchery/switchery'])?>

    <?= $this->Html->css('plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') ?>
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap Tour -->
    <?= $this->Html->css(["plugins/bootstrapTour/bootstrap-tour.min"]) ?>
    <!-- Gritter -->
    <?= $this->Html->script('jquery-2.1.1') ?>

    <!-- <?= $this->Html->css('plugins/sweetalert/sweetalert') ?> -->
    <!-- <?= $this->Html->script('plugins/sweetalert/sweetalert.min') ?> -->
    <?= $this->Html->script('sweetalert2/dist/sweetalert2.min.js',['block' => true]) ?>
    <?= $this->Html->css('sweetalert2/dist/sweetalert2.min.css') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-cookies.js"></script>
	
	<?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body style="background-color: #fff">
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav> -->
    <div id = "wrapper">
            <?=  $this->Form->hidden('baseUrl',['id'=>'baseUrl','value'=>$this->Url->build('/', true)]); ?>
            <?= $this->Flash->render() ?>
            <div>
                <?= $this->fetch('content') ?>
            </div>
        <footer>
        </footer>
    </div>
 <!-- Scripts -->

 <?= $this->Html->script('bootstrap.min') ?>
 <?= $this->Html->script('jquery.cookie') ?>

 <!-- Jquery UI Script-->
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <!-- Inspenia Switchery for toggle buttons -->
 <?= $this->Html->script(['plugins/switchery/switchery'])?>
 <?= $this->fetch('scriptBottom'); ?>
</body>
<div class="text-center" style="bottom:0;">
    <div>
       &copy;<?php echo ' '.(date("Y")).'-'.(date("Y")+1).' '?>Twinspark Technology and Consulting LLP. All rights reserved.
    </div>
</div>
</html>
