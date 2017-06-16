<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\RecentSuccess[]|\Cake\Collection\CollectionInterface $recentSuccesses
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recent Success'), ['action' => 'add']) ?></li>
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
<div class="recentSuccesses index large-9 medium-8 columns content">
    <h3><?= __('Recent Successes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_task_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_task_expiration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_super_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_base_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_max_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_starting_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_inflation_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_demand_cutoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_task_period_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_accumulative') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_owner_participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_class') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_success_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_positive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inner_function') ?></th>
                <th scope="col"><?= $this->Paginator->sort('external_function') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_dividend_rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recentSuccesses as $recentSuccess): ?>
            <tr>
                <td><?= h($recentSuccess->id) ?></td>
                <td><?= $recentSuccess->has('participant') ? $this->Html->link($recentSuccess->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $recentSuccess->participant->id]) : '' ?></td>
                <td><?= $recentSuccess->has('dream') ? $this->Html->link($recentSuccess->dream->id, ['controller' => 'Dreams', 'action' => 'view', $recentSuccess->dream->id]) : '' ?></td>
                <td><?= $recentSuccess->has('dream_type') ? $this->Html->link($recentSuccess->dream_type->dream_type_name, ['controller' => 'DreamTypes', 'action' => 'view', $recentSuccess->dream_type->id]) : '' ?></td>
                <td><?= h($recentSuccess->dream_timestamp) ?></td>
                <td><?= h($recentSuccess->dream_url) ?></td>
                <td><?= $this->Number->format($recentSuccess->contemporary_task_id) ?></td>
                <td><?= h($recentSuccess->contemporary_task_start) ?></td>
                <td><?= h($recentSuccess->contemporary_task_expiration) ?></td>
                <td><?= $recentSuccess->has('subtask') ? $this->Html->link($recentSuccess->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $recentSuccess->subtask->id]) : '' ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_task_id) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_super_id) ?></td>
                <td><?= h($recentSuccess->subtask_name) ?></td>
                <td><?= $recentSuccess->has('subtask_category') ? $this->Html->link($recentSuccess->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $recentSuccess->subtask_category->id]) : '' ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_base_value) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_max_value) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_starting_demand) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_inflation_rate) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_demand_cutoff) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_task_period_demand) ?></td>
                <td><?= h($recentSuccess->subtask_url) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_accumulative) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_owner_participant_id) ?></td>
                <td><?= h($recentSuccess->subtask_category_name) ?></td>
                <td><?= h($recentSuccess->subtask_category_class) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_success_count) ?></td>
                <td><?= $this->Number->format($recentSuccess->contemporary_demand) ?></td>
                <td><?= $this->Number->format($recentSuccess->contemporary_demand_positive) ?></td>
                <td><?= $this->Number->format($recentSuccess->inner_function) ?></td>
                <td><?= $this->Number->format($recentSuccess->external_function) ?></td>
                <td><?= $this->Number->format($recentSuccess->final_value) ?></td>
                <td><?= $this->Number->format($recentSuccess->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recentSuccess->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recentSuccess->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recentSuccess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recentSuccess->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
