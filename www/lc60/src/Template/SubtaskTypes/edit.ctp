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
                ['action' => 'delete', $subtaskType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskType) ?>
    <fieldset>
        <legend><?= __('Edit Subtask Type') ?></legend>
        <?php
            echo $this->Form->control('subtask_type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
