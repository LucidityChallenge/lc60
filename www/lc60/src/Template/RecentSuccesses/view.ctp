<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\RecentSuccess $recentSuccess
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recent Success'), ['action' => 'edit', $recentSuccess->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recent Success'), ['action' => 'delete', $recentSuccess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recentSuccess->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recent Successes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recent Success'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dream Types'), ['controller' => 'DreamTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream Type'), ['controller' => 'DreamTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recentSuccesses view large-9 medium-8 columns content">
    <h3><?= h($recentSuccess->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($recentSuccess->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $recentSuccess->has('participant') ? $this->Html->link($recentSuccess->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $recentSuccess->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream') ?></th>
            <td><?= $recentSuccess->has('dream') ? $this->Html->link($recentSuccess->dream->id, ['controller' => 'Dreams', 'action' => 'view', $recentSuccess->dream->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Type') ?></th>
            <td><?= $recentSuccess->has('dream_type') ? $this->Html->link($recentSuccess->dream_type->dream_type_name, ['controller' => 'DreamTypes', 'action' => 'view', $recentSuccess->dream_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Url') ?></th>
            <td><?= h($recentSuccess->dream_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $recentSuccess->has('subtask') ? $this->Html->link($recentSuccess->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $recentSuccess->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Name') ?></th>
            <td><?= h($recentSuccess->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category') ?></th>
            <td><?= $recentSuccess->has('subtask_category') ? $this->Html->link($recentSuccess->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $recentSuccess->subtask_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Url') ?></th>
            <td><?= h($recentSuccess->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Name') ?></th>
            <td><?= h($recentSuccess->subtask_category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Class') ?></th>
            <td><?= h($recentSuccess->subtask_category_class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Task Id') ?></th>
            <td><?= $this->Number->format($recentSuccess->contemporary_task_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Id') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_task_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Super Id') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_super_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Base Value') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Max Value') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Starting Demand') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Inflation Rate') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_inflation_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Demand Cutoff') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_demand_cutoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Period Demand') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_accumulative) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Owner Participant Id') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_owner_participant_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_success_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand') ?></th>
            <td><?= $this->Number->format($recentSuccess->contemporary_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Demand Positive') ?></th>
            <td><?= $this->Number->format($recentSuccess->contemporary_demand_positive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inner Function') ?></th>
            <td><?= $this->Number->format($recentSuccess->inner_function) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('External Function') ?></th>
            <td><?= $this->Number->format($recentSuccess->external_function) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value') ?></th>
            <td><?= $this->Number->format($recentSuccess->final_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Dividend Rate') ?></th>
            <td><?= $this->Number->format($recentSuccess->subtask_dividend_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Timestamp') ?></th>
            <td><?= h($recentSuccess->dream_timestamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Task Start') ?></th>
            <td><?= h($recentSuccess->contemporary_task_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contemporary Task Expiration') ?></th>
            <td><?= h($recentSuccess->contemporary_task_expiration) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Subtask Description') ?></h4>
        <?= $this->Text->autoParagraph(h($recentSuccess->subtask_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtask Category Description') ?></h4>
        <?= $this->Text->autoParagraph(h($recentSuccess->subtask_category_description)); ?>
    </div>
</div>
