<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskShareHolderComplete[]|\Cake\Collection\CollectionInterface $subtaskShareHolderComplete
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['action' => 'add']) ?></li>
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
<div class="subtaskShareHolderComplete index large-9 medium-8 columns content">
    <h3><?= __('Subtask Share Holder Complete') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
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
                <th scope="col"><?= $this->Paginator->sort('participant_owner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_dividend_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_class') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskShareHolderComplete as $subtaskShareHolderComplete): ?>
            <tr>
                <td><?= $this->Number->format($subtaskShareHolderComplete->id) ?></td>
                <td><?= $subtaskShareHolderComplete->has('subtask') ? $this->Html->link($subtaskShareHolderComplete->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShareHolderComplete->subtask->id]) : '' ?></td>
                <td><?= $subtaskShareHolderComplete->has('participant') ? $this->Html->link($subtaskShareHolderComplete->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtaskShareHolderComplete->participant->id]) : '' ?></td>
                <td><?= $subtaskShareHolderComplete->has('task') ? $this->Html->link($subtaskShareHolderComplete->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtaskShareHolderComplete->task->id]) : '' ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_super_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_name) ?></td>
                <td><?= $subtaskShareHolderComplete->has('subtask_category') ? $this->Html->link($subtaskShareHolderComplete->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskShareHolderComplete->subtask_category->id]) : '' ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_base_value) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_max_value) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_starting_demand) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_inflation_rate) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_demand_cutoff) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_url) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_accumulative) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_task_period_demand) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->participant_owner) ?></td>
                <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_dividend_rate) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_name) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_class) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskShareHolderComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShareHolderComplete->id)]) ?>
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
