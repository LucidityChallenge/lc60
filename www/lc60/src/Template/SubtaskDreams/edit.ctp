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
                ['action' => 'delete', $subtaskDream->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskDream->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Dreams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskDreams form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskDream) ?>
    <fieldset>
        <legend><?= __('Edit Subtask of Dream') ?></legend>
        <?php
            echo $this->Form->control('subtask_id', ['options' => $subtasks, 'empty' => true]);
            echo $this->Form->control('dream_id', ['options' => $dreams, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
