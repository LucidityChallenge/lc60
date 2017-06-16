<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskType $subtaskType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Type'), ['action' => 'edit', $subtaskType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Type'), ['action' => 'delete', $subtaskType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskTypes view large-9 medium-8 columns content">
    <h3><?= h($subtaskType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask Type Name') ?></th>
            <td><?= h($subtaskType->subtask_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Subtasks') ?></h4>
        <?php if (!empty($subtaskType->subtasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Image') ?></th>
                <th scope="col"><?= __('Subtask Symbol') ?></th>
                <th scope="col"><?= __('Subtask Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskType->subtasks as $subtasks): ?>
            <tr>
                <td><?= h($subtasks->id) ?></td>
                <td><?= h($subtasks->task_id) ?></td>
                <td><?= h($subtasks->subtask_super_id) ?></td>
                <td><?= h($subtasks->subtask_name) ?></td>
                <td><?= h($subtasks->subtask_category_id) ?></td>
                <td><?= h($subtasks->subtask_base_value) ?></td>
                <td><?= h($subtasks->subtask_max_value) ?></td>
                <td><?= h($subtasks->subtask_starting_demand) ?></td>
                <td><?= h($subtasks->subtask_inflation_rate) ?></td>
                <td><?= h($subtasks->subtask_demand_cutoff) ?></td>
                <td><?= h($subtasks->subtask_description) ?></td>
                <td><?= h($subtasks->subtask_url) ?></td>
                <td><?= h($subtasks->subtask_accumulative) ?></td>
                <td><?= h($subtasks->subtask_task_period_demand) ?></td>
                <td><?= h($subtasks->participant_id) ?></td>
                <td><?= h($subtasks->subtask_dividend_rate) ?></td>
                <td><?= h($subtasks->subtask_image) ?></td>
                <td><?= h($subtasks->subtask_symbol) ?></td>
                <td><?= h($subtasks->subtask_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subtasks', 'action' => 'view', $subtasks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subtasks', 'action' => 'edit', $subtasks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subtasks', 'action' => 'delete', $subtasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtasks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
