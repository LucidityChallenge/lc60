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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'LC60';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cakeDescription ?>: <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('lcek.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <link rel="stylesheet" href="/css/pixel.css"/>
    <?php if ($ieCond = $this->fetch('notie')): ?>

       <!--[if lt IE 9]><?= $ieCond ?></script><![endif]-->
    <?php endif; ?>
    <?= $this->fetch('script') ?>
<?php echo '<script class="code_end" type="text/javascript">'; ?>
window.onload = function() {callCount()};

var finalDate;
var remaining;
var difference;
var refreshIntervalId;

function updatePage(){

  remaining = Math.floor(difference + finalDate - ((new Date().getTime()) / 1000));
  
  var seconds = remaining % 60;  
  var minutes = ((remaining - seconds) / (60))% 60;
  var hours = (remaining / (60*60)) % (24);
  var days = remaining / (60*60*24);

  document.getElementById("day_count").innerHTML = Math.floor(days) + ' day' + ((Math.floor(days)  != 1)? 's' : '') ;
  document.getElementById("hour_count").innerHTML = Math.floor(hours) + ' hour' + ((Math.floor(hours)  != 1)? 's' : '');
  document.getElementById("minute_count").innerHTML = Math.floor(minutes) + ' minute' + ((Math.floor(minutes)  != 1)? 's' : '');
  document.getElementById("second_count").innerHTML = (seconds) + ' second' + (((seconds)  != 1)? 's' : '');
}

function countDown(){
	if (remaining > 0)
	{
	  remaining--;
	}
	else
	{
	  remaining = 0; // mostly useless if seconds go down one by one.
	  clearInterval(refreshIntervalId);
	  //could call a full refresh here, I am not sure if it's the best idea yet.	  
	  //window.location.assign('<?= $signup->signup_url ?>');
	}
	
	updatePage();
}

function startCountDown(start, end){
        //remaining = (end - start);
        finalDate = end;
        difference = ((new Date().getTime()) / 1000) - start;
        updatePage();
	refreshIntervalId = setInterval(countDown, 100);
}

function callCount() {
    startCountDown(<?= (time()) ?>,<?= (1503608400+60*60*(3*24+2))  ?>);
}
</script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="/"><?= /*$this->fetch('title')*/ $this->Html->image('lc60t.png', ['alt' => 'LC60']) ?></a> </h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
		<li><a href="/signups/#signup">Signups</a></li>
		<li><a href="/news/">News</a></li>
		<li><a href="/tasks/">Tasks</a></li>		
                <li><a href="/subtask-values/">Subtasks &amp; Values</a></li>
                <li><a href="/scores/">Scores &amp; Participants</a></li>
                <li><a href="/dreams/">Dreams</a></li>
                <li><a target="_blank" href="http://ld4all.com/">LD4all</a></li>                
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
<!--          <h1>During Week 4 tolerance. Values subject to change. Past scores will be maintained.</h1> -->
	<h1 align="center">LC60® is Officially Over. Thank you for participating.</h1>
<!--	<p align="center" id="count" class="pixel_text"><?= 'Please post all your claims within:' ?><br/><span id="day_count"></span> <span id="hour_count"></span> <span id="minute_count"></span> <span id="second_count"></span><br>(Before 2017-08-27 23:00:00 UTC)</p> -->
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
