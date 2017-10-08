<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Dream $dream
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dream'), ['action' => 'edit', $dream->dream_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dream'), ['action' => 'delete', $dream->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dream->dream_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dream'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participant'), ['controller' => 'Participant', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participant', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask'), ['controller' => 'Subtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtask', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dream view large-9 medium-8 columns content">
    <h3><?= h($dream->dream_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $dream->has('participant') ? $this->Html->link($dream->participant->participant_id, ['controller' => 'Participant', 'action' => 'view', $dream->participant->participant_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Url') ?></th>
            <td><?= h($dream->dream_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Id') ?></th>
            <td><?= $this->Number->format($dream->dream_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Type Id') ?></th>
            <td><?= $this->Number->format($dream->dream_type_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Timestamp') ?></th>
            <td><?= h($dream->dream_timestamp) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Subtask') ?></h4>
        <?php if (!empty($dream->subtask)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
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
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dream->subtask as $subtask): ?>
            <tr>
                <td><?= h($subtask->subtask_id) ?></td>
                <td><?= h($subtask->task_id) ?></td>
                <td><?= h($subtask->subtask_super_id) ?></td>
                <td><?= h($subtask->subtask_name) ?></td>
                <td><?= h($subtask->subtask_category_id) ?></td>
                <td><?= h($subtask->subtask_base_value) ?></td>
                <td><?= h($subtask->subtask_max_value) ?></td>
                <td><?= h($subtask->subtask_starting_demand) ?></td>
                <td><?= h($subtask->subtask_inflation_rate) ?></td>
                <td><?= h($subtask->subtask_demand_cutoff) ?></td>
                <td><?= h($subtask->subtask_description) ?></td>
                <td><?= h($subtask->subtask_url) ?></td>
                <td><?= h($subtask->subtask_accumulative) ?></td>
                <td><?= h($subtask->subtask_task_period_demand) ?></td>
                <td><?= h($subtask->subtask_owner_participant_id) ?></td>
                <td><?= h($subtask->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subtask', 'action' => 'view', $subtask->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subtask', 'action' => 'edit', $subtask->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subtask', 'action' => 'delete', $subtask->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtask->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
