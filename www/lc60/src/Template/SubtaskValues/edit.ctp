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
                ['action' => 'delete', $subtaskValue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskValue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Values'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskValues form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskValue) ?>
    <fieldset>
        <legend><?= __('Edit Subtask Value') ?></legend>
        <?php
            echo $this->Form->control('current_task_id');
            echo $this->Form->control('contemporary_task_id');
            echo $this->Form->control('subtask_id', ['options' => $subtasks]);
            echo $this->Form->control('subtask_starting_demand');
            echo $this->Form->control('subtask_success_count');
            echo $this->Form->control('subtask_success_count_total');
            echo $this->Form->control('subtask_task_period_demand');
            echo $this->Form->control('subtask_task_id');
            echo $this->Form->control('subtask_super_id');
            echo $this->Form->control('subtask_name');
            echo $this->Form->control('subtask_category_id', ['options' => $subtaskCategories, 'empty' => true]);
            echo $this->Form->control('subtask_base_value');
            echo $this->Form->control('subtask_max_value');
            echo $this->Form->control('subtask_inflation_rate');
            echo $this->Form->control('subtask_demand_cutoff');
            echo $this->Form->control('subtask_description');
            echo $this->Form->control('subtask_accumulative');
            echo $this->Form->control('subtask_owner_participant_id');
            echo $this->Form->control('subtask_category_name');
            echo $this->Form->control('subtask_category_class');
            echo $this->Form->control('contemporary_demand_cur');
            echo $this->Form->control('contemporary_demand_positive_cur');
            echo $this->Form->control('contemporary_demand_pre');
            echo $this->Form->control('contemporary_demand_positive_pre');
            echo $this->Form->control('final_value_pre');
            echo $this->Form->control('final_value_cur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
