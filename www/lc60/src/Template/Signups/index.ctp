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
<?php $open = ( ($signup->now_date_unix) >= ($signup->open_date_unix) ); ?>
<?php if ($open) : ?>
<div class="landing">
<a name="open"></a><h3>Lucidity Challenge 60</h3>
<h4>The Special Challenge you should not miss!</h4>

<p>Dear people of LD4all, this is Tggtt! I am your host for Lucidity Challenge 60 (LC60).
Please greet the co-host as well, Mew151. It is our honor to host such a special event.</p>

<p>The Lucidity Challenge (LC) is a traditional game in LD4all. It has now reached the number 60.</p>

<p>60 is a very unique number, did you know it's divisible by 1, 2, 3, 4, 5, 6, 10, 12, 15, 20, 30, and 60?
There is no number below 60 with so many divisors. This is so special that it was chosen to divide minutes into seconds (and so on).</p>

<p>After five dozens of Lucidity Challenges, <b>LC60</b> (or LC:LX) is also special in every sense. It is a milestone for LD4all history, which has recently reached its 21st anniversary.</p>

<p>Here, the dreamer is the most important. And they are also given points for dreaming.
The highest score wins!</p>


<!--The winner of LC60 will be be asked to host LC 61! That is a real honor! However, If they don't want to, the option to host passes on the second place, and so on. Still, the primary objective of LC is to have fun, while the secondary is to train your LDing techniques as well as dream recall.

The LC60 is going to be unique in several ways, but first, we are going to tell you what is common to all other Lucidity Challenges.-->

<!--This challenge is going to maintain the fact that the hosts keep the scores and post the tasks. We will also allow personal goals with special additions!-->

<!--When claiming points, please be clear if you think you have succeeded on a specific subtask.

Dream Journals (DJ) are not required, however, it is also recommended to post a link to your DJ, after all it can improve your dream recall.
If you really want to post your dream here, the usage of spoiler tags is recommended!-->

<p></p>

<h4>We Heard the Community</h4>
<p class="bigemoji icon">&#128588;&nbsp;&#128588;</p>
<p>People asked to bring back subtasks. LC60 has 3 levels of tasks: Tasks, Subtasks and Subsubtasks.</p>
<p class="bigemoji icon">&#128587;&nbsp;&#128077;</p>
<p>We have added new ways of cooperation without enforcing people to join teams.</p>

<!--[size=16][b]Unlike previous challenges, we will not allow to post dreams from previous week.[/b][/size]
Do not miss the deadlines! We are going to provide only a small tolerance due to timezones!
Please accept our appologies, but this is required to implement the completely new scoring system of LC60.

Most subtasks are worth points, with clear instructions on what you are supposed to perform.
Some subtasks might include subsubtasks. In case you accomplish a subsubtask, you automatically claim its parent subtask.

This was created to add bonus subtasks that depend on others, as common in LC59 and others.
To make it clearer, consider the following example: "Subtask": Visit a place; "Subsubtask": Interact with a DC in that place.
When you complete the subsubtask, the subtask is automatically added as completed.-->

<p></p>

<h4>New Scoring, More Motivation</h4>
<p class="bigemoji icon">&#128164;&nbsp;&#128161;</p>
<p>Dream types are now considered prime subtasks.
They are the root of every other subtask you can claim.</p>

<p class="bigemoji icon">&#128555;&nbsp;&#128211;</p>
<p>Keeping a dream journal is not easy, but now it will give you points.</p>

<p class="bigemoji icon">&#127912;&nbsp;&#128214;&nbsp;&#9835; </p>
<p>LC60 is going to encourage you to share your dream art.</p>

<p class="bigemoji icon">&#128218;&nbsp;&#128218;</p>
<p>Your knowledge on Lucid Dreaming incubation techniques will also be rewarded.</p>

<p></p>

<h4>Fun is the only Mandatory Subtask</h4>
<p class="bigemoji icon">&#128516; &#128515; &#128516;</p>
<p>We are not forcing members to dream, this is a game that every one is invited.
New features will allow <b>everyone</b> to have fun, with or without their own dreams.</p>

<p class="bigemoji icon">&#128275; &#128273;</p>
<p>New unlockable subtasks could appear at any minute! Now you have even more reasons to check updates.</p>

<p class="bigemoji icon"><span class="notoemoji" style="font-size:150%">&#9822; &#9820;</span></p>
<p>New features include more strategic choices that will reward your ability to plan what to claim.</p>

<p class="bigemoji icon">&#9858; &#9860;</p>
<p>Help fellow participants. Bet on their upcoming succeses and earn points.</p>

<p></p>

<h4>Inovation on Balancing</h4>
<p class="bigemoji icon">&#127943;&nbsp;&#9878;&nbsp;&#127943;</p> 
<p>LC60 Balancing system is completely new. No one will be able to win too soon.</p>
<p class="bigemoji icon">&#127906;;&nbsp;&#127904;</p> 
<p>Subtasks will have their score balanced weekly. Harder subtasks more worth to try than ever.</p>

<p></p>

<h4>LC60: Transparency, Free News and Dreamocracy</h4>
<p class="bigemoji icon">&#9785; &#128173;</p>
<p>The scoring will not be based on subjectivity of the host.
There will be no creativity points. No control points.</p>
<p class="bigemoji icon">&#128221; &#10004;</p>
<p>We will do our best to add instructions to subtasks and subsubtasks to avoid confusion.
The way the scores are calculated are public and can be checked by anyone.</p>

<p class="bigemoji icon">&#128240; &#128251;</p>
<p>LC60 is going to include a newsroom with updates on the tasks, subtasks and successes!
News are going to be updated at least once a day. There is no more reason on idling if you are not having much dreams.</p>

<p class="bigemoji icon">&#9744; &#9746; &#9744;</p>
<p>Some subtasks will be supported by voting. <b>Open to anyone.</b>
Please pay attention, we are going to post polls to see what kind of dreams are you wishing for our LCers!</p>

<p class="bigemoji icon">&#128294; &#128269;</p>
<p>Were you searching for a reason to join or watch the LC even if you do not LD?
I have written plenty. But it is not enough.</p>

<p></p>

<h4>Daily Updates</h4>
<p class="bigemoji icon">&#128198; &#128199;</p>
<p>At least once a day, your scores will be updated. <b>This is our goal</b>.
You will be able to see your scores and how other participants are doing <b>better than ever</b>.</p>

<p></p>

<h4>Scoring</h4>
<p class="bigemoji icon">&#128200;  &#128202;</p>
<p>The scoring system of LC60 is unique! 	
Extreme changes were implemented to allow adaptative balancing and increase the competition and the cooperation.
You will be able to track your scoring with indepth details and graphs.</p>


<p>&nbsp;</p>
<br/>
<p>&nbsp;</p>

<?php endif; ?>
<div>
<h3><?= __('Are you ready to ').$this->Html->link('Sign up',$signup->signup_url).'?' ?></h3>
<a name="hype"></a><h3>Get Hype.</h3>
<div>
<p id="intro">Do not miss it!</p>
<p id="count"><?= ($open)? 'We will try to begin in' : 'We will open the signups in' ?>&nbsp;<span id="day_count"></span> <span id="hour_count"></span> <span id="minute_count"></span> <span id="second_count"></span> </p>
<p id="target"><?= ($open)? ($signup->begin_date) : ($signup->open_date) ?> UTC.</p>
<p><?= $this->Html->image($signup->signup_image_url,['alt' => 'Signups']) ?></p>
<br/>
<h4>Tggtt &amp; Mew151</h4>
</div>
</div>

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
	  <?= ($open) ? '' : 'window.location.reload(true);' ?>
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
    startCountDown(<?= ($signup->now_date_unix) ?>,<?= ($open) ? ($signup->begin_date_unix) : ($signup->open_date_unix) ?>); //I replace these with seconds from DB. Current, Target.
}
</script>
<?php endforeach; ?>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
<?php echo $this->Html->css('landing.css',['block'=>true]); ?>