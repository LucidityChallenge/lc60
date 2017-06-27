<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Signup[]|\Cake\Collection\CollectionInterface $signups
  */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('See Signup'), ['action' => 'index']) ?></li>
    </ul>
</nav>
-->
<div class="signups index large-9 medium-8 columns content">
<?php foreach ($signups as $signup): ?>
<h3><?= __('Are you ready to ').$this->Html->link('Sign up',$signup->signup_url).'?' ?></h3>

<h3>Get Hype.</h3>
<div>
<p id="intro">Do not waste time!</p>
<p id="count"><span id="day_count"></span> <span id="hour_count"></span> <span id="minute_count"></span> <span id="second_count"></span> </p>
<p id="target">Until  <?= ($signup->end_date) ?> UTC.</p>
<p><?= $this->Html->image($signup->signup_image_url,['alt' => 'Signups']) ?></p>
</div>
</div>
<?php endforeach; ?>
<?php echo '<script class="code" type="text/javascript">'; ?>
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
	  location.reload(true);
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
    startCountDown(<?= ($signup->now_date_unix) ?>,<?= ($signup->end_date_unix) ?>); //I replace these with seconds from DB. Current, Target.
}
</script>
