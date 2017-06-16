<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Current Task'), ['controller' => 'CurrentTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Current Task'), ['controller' => 'CurrentTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasks index large-9 medium-8 columns content">
    <h3><?= __('Tasks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_expiration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $this->Number->format($task->id) ?></td>
                <td><?= h($task->task_title) ?></td>
                <td><?= h($task->task_start) ?></td>
                <td><?= h($task->task_expiration) ?></td>
                <td><?= h($task->task_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $task->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
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
