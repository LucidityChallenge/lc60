<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Subtask[]|\Cake\Collection\CollectionInterface $subtasks
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['controller' => 'SubtaskTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['controller' => 'SubtaskTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtasks index large-9 medium-8 columns content">
    <h3><?= __('Subtasks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_super_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_base_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_max_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_starting_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_inflation_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_demand_cutoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_accumulative') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_task_period_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_dividend_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_symbol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtasks as $subtask): ?>
            <tr>
                <td><?= $this->Number->format($subtask->id) ?></td>
                <td><?= $subtask->has('task') ? $this->Html->link($subtask->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtask->task->id]) : '' ?></td>
                <td><?= $subtask->has('subtask') ? $this->Html->link($subtask->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtask->subtask->id]) : '' ?></td>
                <td><?= h($subtask->subtask_name) ?></td>
                <td><?= $subtask->has('subtask_category') ? $this->Html->link($subtask->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtask->subtask_category->id]) : '' ?></td>
                <td><?= $this->Number->format($subtask->subtask_base_value) ?></td>
                <td><?= $this->Number->format($subtask->subtask_max_value) ?></td>
                <td><?= $this->Number->format($subtask->subtask_starting_demand) ?></td>
                <td><?= $this->Number->format($subtask->subtask_inflation_rate) ?></td>
                <td><?= $this->Number->format($subtask->subtask_demand_cutoff) ?></td>
                <td><?= h($subtask->subtask_url) ?></td>
                <td><?= h($subtask->subtask_accumulative) ?></td>
                <td><?= $this->Number->format($subtask->subtask_task_period_demand) ?></td>
                <td><?= $subtask->has('participant') ? $this->Html->link($subtask->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtask->participant->id]) : '' ?></td>
                <td><?= $this->Number->format($subtask->subtask_dividend_rate) ?></td>
                <td><?= h($subtask->subtask_image) ?></td>
                <td><?= $this->Number->format($subtask->subtask_symbol) ?></td>
                <td><?= $subtask->has('subtask_type') ? $this->Html->link($subtask->subtask_type->subtask_type_name, ['controller' => 'SubtaskTypes', 'action' => 'view', $subtask->subtask_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtask->id)]) ?>
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
