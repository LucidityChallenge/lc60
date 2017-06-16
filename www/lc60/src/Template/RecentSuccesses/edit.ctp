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
                ['action' => 'delete', $recentSuccess->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recentSuccess->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recent Successes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dream Types'), ['controller' => 'DreamTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream Type'), ['controller' => 'DreamTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recentSuccesses form large-9 medium-8 columns content">
    <?= $this->Form->create($recentSuccess) ?>
    <fieldset>
        <legend><?= __('Edit Recent Success') ?></legend>
        <?php
            echo $this->Form->control('participant_id', ['options' => $participants]);
            echo $this->Form->control('dream_id', ['options' => $dreams, 'empty' => true]);
            echo $this->Form->control('dream_type_id', ['options' => $dreamTypes, 'empty' => true]);
            echo $this->Form->control('dream_timestamp');
            echo $this->Form->control('dream_url');
            echo $this->Form->control('contemporary_task_id');
            echo $this->Form->control('contemporary_task_start');
            echo $this->Form->control('contemporary_task_expiration');
            echo $this->Form->control('subtask_id', ['options' => $subtasks]);
            echo $this->Form->control('subtask_task_id');
            echo $this->Form->control('subtask_super_id');
            echo $this->Form->control('subtask_name');
            echo $this->Form->control('subtask_category_id', ['options' => $subtaskCategories, 'empty' => true]);
            echo $this->Form->control('subtask_base_value');
            echo $this->Form->control('subtask_max_value');
            echo $this->Form->control('subtask_starting_demand');
            echo $this->Form->control('subtask_inflation_rate');
            echo $this->Form->control('subtask_demand_cutoff');
            echo $this->Form->control('subtask_task_period_demand');
            echo $this->Form->control('subtask_description');
            echo $this->Form->control('subtask_url');
            echo $this->Form->control('subtask_accumulative');
            echo $this->Form->control('subtask_owner_participant_id');
            echo $this->Form->control('subtask_category_name');
            echo $this->Form->control('subtask_category_class');
            echo $this->Form->control('subtask_category_description');
            echo $this->Form->control('subtask_success_count');
            echo $this->Form->control('contemporary_demand');
            echo $this->Form->control('contemporary_demand_positive');
            echo $this->Form->control('inner_function');
            echo $this->Form->control('external_function');
            echo $this->Form->control('final_value');
            echo $this->Form->control('subtask_dividend_rate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
