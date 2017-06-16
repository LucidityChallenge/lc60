<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\DreamType $dreamType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dream Type'), ['action' => 'edit', $dreamType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dream Type'), ['action' => 'delete', $dreamType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dream Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dreamTypes view large-9 medium-8 columns content">
    <h3><?= h($dreamType->dream_type_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dream Type Name') ?></th>
            <td><?= h($dreamType->dream_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Type Short Name') ?></th>
            <td><?= h($dreamType->dream_type_short_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dreamType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dream Type Id') ?></h4>
        <?php if (!empty($dreamType->dream_type_id)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->dream_type_id as $dreamTypeId): ?>
            <tr>
                <td><?= h($dreamTypeId->dream_id) ?></td>
                <td><?= h($dreamTypeId->dream_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DreamTypeId', 'action' => 'view', $dreamTypeId->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DreamTypeId', 'action' => 'edit', $dreamTypeId->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DreamTypeId', 'action' => 'delete', $dreamTypeId->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamTypeId->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask') ?></h4>
        <?php if (!empty($dreamType->successful_subtask)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->successful_subtask as $successfulSubtask): ?>
            <tr>
                <td><?= h($successfulSubtask->participant_id) ?></td>
                <td><?= h($successfulSubtask->dream_id) ?></td>
                <td><?= h($successfulSubtask->dream_timestamp) ?></td>
                <td><?= h($successfulSubtask->dream_type_id) ?></td>
                <td><?= h($successfulSubtask->dream_url) ?></td>
                <td><?= h($successfulSubtask->subtask_id) ?></td>
                <td><?= h($successfulSubtask->task_id) ?></td>
                <td><?= h($successfulSubtask->subtask_super_id) ?></td>
                <td><?= h($successfulSubtask->subtask_name) ?></td>
                <td><?= h($successfulSubtask->subtask_category_id) ?></td>
                <td><?= h($successfulSubtask->subtask_base_value) ?></td>
                <td><?= h($successfulSubtask->subtask_max_value) ?></td>
                <td><?= h($successfulSubtask->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtask->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtask->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtask->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtask->subtask_description) ?></td>
                <td><?= h($successfulSubtask->subtask_url) ?></td>
                <td><?= h($successfulSubtask->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtask->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtask->subtask_dividend_rate) ?></td>
                <td><?= h($successfulSubtask->subtask_category_name) ?></td>
                <td><?= h($successfulSubtask->subtask_category_class) ?></td>
                <td><?= h($successfulSubtask->subtask_category_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtask', 'action' => 'view', $successfulSubtask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtask', 'action' => 'edit', $successfulSubtask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtask', 'action' => 'delete', $successfulSubtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Scores') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_dividend_scores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dreamer Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Share Holder Count') ?></th>
                <th scope="col"><?= __('Final Dividend Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->successful_subtask_dividend_scores as $successfulSubtaskDividendScores): ?>
            <tr>
                <td><?= h($successfulSubtaskDividendScores->participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dreamer_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_url) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_name) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_description) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_url) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_success_count) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_demand_positive) ?></td>
                <td><?= h($successfulSubtaskDividendScores->inner_function) ?></td>
                <td><?= h($successfulSubtaskDividendScores->external_function) ?></td>
                <td><?= h($successfulSubtaskDividendScores->final_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_dividend_rate) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_share_holder_count) ?></td>
                <td><?= h($successfulSubtaskDividendScores->final_dividend_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'view', $successfulSubtaskDividendScores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'edit', $successfulSubtaskDividendScores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'delete', $successfulSubtaskDividendScores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendScores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->successful_subtask_task as $successfulSubtaskTask): ?>
            <tr>
                <td><?= h($successfulSubtaskTask->participant_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskTask->dream_url) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_name) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_description) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_url) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'view', $successfulSubtaskTask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'edit', $successfulSubtaskTask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'delete', $successfulSubtaskTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Scoring') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_task_with_calculated_scoring)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand_positive) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->inner_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->external_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->final_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
