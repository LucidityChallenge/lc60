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
                ['action' => 'delete', $dream->dream_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dream->dream_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dream'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participant'), ['controller' => 'Participant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask'), ['controller' => 'Subtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtask', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dream form large-9 medium-8 columns content">
    <?= $this->Form->create($dream) ?>
    <fieldset>
        <legend><?= __('Edit Dream') ?></legend>
        <?php
            echo $this->Form->control('participant_id', ['options' => $participant]);
            echo $this->Form->control('dream_type_id');
            echo $this->Form->control('dream_timestamp');
            echo $this->Form->control('dream_url');
            echo $this->Form->control('subtask._ids', ['options' => $subtask]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
