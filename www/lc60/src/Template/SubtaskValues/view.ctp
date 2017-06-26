<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskValue $subtaskValue
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Value'), ['action' => 'edit', $subtaskValue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Value'), ['action' => 'delete', $subtaskValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskValue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Values'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Value'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskValues view large-9 medium-8 columns content">
    <h3><?= h($subtaskValue->subtask_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtaskValue->has('subtask') ? $this->Html->link($subtaskValue->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Name') ?></th>
            <td><?= h($subtaskValue->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category') ?></th>
            <td><?= $subtaskValue->has('subtask_category') ? $this->Html->link($subtaskValue->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskValue->subtask_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Name') ?></th>
            <td><?= h($subtaskValue->subtask_category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Class') ?></th>
            <td><?= h($subtaskValue->subtask_category_class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Task Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->current_task_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Task Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->contemporary_task_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Starting Demand') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_success_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count Total') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_success_count_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Period Demand') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_task_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Super Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_super_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Base Value') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Max Value') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Inflation Rate') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_inflation_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Demand Cutoff') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_demand_cutoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_accumulative) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Owner Participant Id') ?></th>
            <td><?= $this->Number->format($subtaskValue->subtask_owner_participant_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand Cur') ?></th>
            <td><?= $this->Number->format($subtaskValue->contemporary_demand_cur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand Positive Cur') ?></th>
            <td><?= $this->Number->format($subtaskValue->contemporary_demand_positive_cur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand Pre') ?></th>
            <td><?= $this->Number->format($subtaskValue->contemporary_demand_pre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand Positive Pre') ?></th>
            <td><?= $this->Number->format($subtaskValue->contemporary_demand_positive_pre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Pre') ?></th>
            <td><?= $this->Number->format($subtaskValue->final_value_pre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Cur') ?></th>
            <td><?= $this->Number->format($subtaskValue->final_value_cur) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Subtask Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtaskValue->subtask_description)); ?>
    </div>
</div>
