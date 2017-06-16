<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
        <legend><?= __('Add Subtask to Dream') ?></legend>
        <?php
	    if ($subtaskDream->dream_id != null) echo h('Adding to Dream '. $subtaskDream->dream_id.'.');
            echo $this->Form->control('dream_id', ['options' => ($dreams), 'empty' => false]);
            echo h('Hint: please start with dream type and then DJ entry.');
            echo $this->Form->control('subtask_id', ['options' => ($subtasks), 'empty' => true]);
            //echo $this->Form->checkbox('Add more Subtasks to this dream.', ['empty' => false, 'value' => true]);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Cancel and show index'),['action' => 'index']) ?>&nbsp;&nbsp;&nbsp;
    <?= $this->Html->link(__('Cancel and show dream'),['controller' => 'dreams','action' => 'view',($subtaskDream->dream_id)]) ?>&nbsp;
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>    
</div>
