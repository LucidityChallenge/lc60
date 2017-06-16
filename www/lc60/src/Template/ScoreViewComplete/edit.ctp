<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $scoreViewComplete->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewComplete->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Score View Complete'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scoreViewComplete form large-9 medium-8 columns content">
    <?= $this->Form->create($scoreViewComplete) ?>
    <fieldset>
        <legend><?= __('Edit Score View Complete') ?></legend>
        <?php
            echo $this->Form->control('participant_id', ['options' => $participants]);
            echo $this->Form->control('subtask_success_count_sum_total');
            echo $this->Form->control('subtask_success_count_participant_total');
            echo $this->Form->control('final_value_avg');
            echo $this->Form->control('final_value_total');
            echo $this->Form->control('dividend_count_sum_total');
            echo $this->Form->control('dividend_count_participant_total');
            echo $this->Form->control('final_dividend_value_avg');
            echo $this->Form->control('final_dividend_value_total');
            echo $this->Form->control('final_value_total_with_dividends');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
