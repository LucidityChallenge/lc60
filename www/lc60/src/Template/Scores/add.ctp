<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scores form large-9 medium-8 columns content">
    <?= $this->Form->create($score) ?>
    <fieldset>
        <legend><?= __('Add Score') ?></legend>
        <?php
            echo $this->Form->control('position');
            echo $this->Form->control('participant_name');
            echo $this->Form->control('successful_subtasks');
            echo $this->Form->control('average_subtask_value');
            echo $this->Form->control('total_subtask_value');
            echo $this->Form->control('dividend_successes');
            echo $this->Form->control('average_dividend_value');
            echo $this->Form->control('total_dividends');
            echo $this->Form->control('total_score');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
