<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Current Task'), ['controller' => 'CurrentTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Current Task'), ['controller' => 'CurrentTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasks form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Add Task') ?></legend>
        <?php
            echo $this->Form->control('task_title');
            echo $this->Form->control('task_start');
            echo $this->Form->control('task_expiration');
            echo $this->Form->control('task_text');
            echo $this->Form->control('task_url');
            echo $this->Form->control('task_image_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
