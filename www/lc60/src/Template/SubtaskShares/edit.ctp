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
                ['action' => 'delete', $subtaskShare->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShare->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Shares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskShares form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskShare) ?>
    <fieldset>
        <legend><?= __('Edit Subtask Share') ?></legend>
        <?php
            echo $this->Form->control('participant_id', ['options' => $participants]);        
            echo $this->Form->control('subtask_id', ['options' => $subtasks]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
