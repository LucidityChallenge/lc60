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
                ['action' => 'delete', $subtaskShareHolderComplete->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShareHolderComplete->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskShareHolderComplete form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskShareHolderComplete) ?>
    <fieldset>
        <legend><?= __('Edit Subtask Share Holder Complete') ?></legend>
        <?php
            echo $this->Form->control('subtask_id', ['options' => $subtasks]);
            echo $this->Form->control('participant_id', ['options' => $participants, 'empty' => true]);
            echo $this->Form->control('task_id', ['options' => $tasks]);
            echo $this->Form->control('subtask_super_id');
            echo $this->Form->control('subtask_name');
            echo $this->Form->control('subtask_category_id', ['options' => $subtaskCategories, 'empty' => true]);
            echo $this->Form->control('subtask_base_value');
            echo $this->Form->control('subtask_max_value');
            echo $this->Form->control('subtask_starting_demand');
            echo $this->Form->control('subtask_inflation_rate');
            echo $this->Form->control('subtask_demand_cutoff');
            echo $this->Form->control('subtask_description');
            echo $this->Form->control('subtask_url');
            echo $this->Form->control('subtask_accumulative');
            echo $this->Form->control('subtask_task_period_demand');
            echo $this->Form->control('participant_owner');
            echo $this->Form->control('subtask_dividend_rate');
            echo $this->Form->control('subtask_category_name');
            echo $this->Form->control('subtask_category_class');
            echo $this->Form->control('subtask_category_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
