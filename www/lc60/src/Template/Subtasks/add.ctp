<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['controller' => 'SubtaskTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['controller' => 'SubtaskTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtasks form large-9 medium-8 columns content">
    <?= $this->Form->create($subtask) ?>
    <fieldset>
        <legend><?= __('Add Subtask') ?></legend>
        <?php
            echo $this->Form->control('task_id', ['options' => $tasks]);
            echo $this->Form->control('subtask_super_id', ['options' => $subtasks, 'empty' => true]);
            echo $this->Form->control('subtask_name');
            echo $this->Form->control('subtask_category_id', ['options' => $subtaskCategories, 'empty' => true]);
            echo $this->Form->control('subtask_base_value');
            echo $this->Form->control('subtask_max_value');
	    echo h('Note: Leave Max Value empty for constant score.');            
            echo $this->Form->control('subtask_starting_demand');
            echo $this->Form->control('subtask_inflation_rate');
            echo $this->Form->control('subtask_demand_cutoff');
            echo $this->Form->control('subtask_description');
            echo $this->Form->control('subtask_url');
            echo $this->Form->control('subtask_accumulative');
            echo $this->Form->control('subtask_task_period_demand');
            echo $this->Form->control('participant_id', ['options' => $participants, 'empty' => true]);
            echo $this->Form->control('subtask_dividend_rate');
            echo $this->Form->control('subtask_image');
            echo $this->Form->control('subtask_symbol');
            echo $this->Form->control('subtask_type_id', ['options' => $subtaskTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
