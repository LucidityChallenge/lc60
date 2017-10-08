<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Dream[]|\Cake\Collection\CollectionInterface $dream
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participant'), ['controller' => 'Participant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask'), ['controller' => 'Subtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtask', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dream index large-9 medium-8 columns content">
    <h3><?= __('Dream') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('dream_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dream as $dream): ?>
            <tr>
                <td><?= $this->Number->format($dream->dream_id) ?></td>
                <td><?= $dream->has('participant') ? $this->Html->link($dream->participant->participant_id, ['controller' => 'Participant', 'action' => 'view', $dream->participant->participant_id]) : '' ?></td>
                <td><?= $this->Number->format($dream->dream_type_id) ?></td>
                <td><?= h($dream->dream_timestamp) ?></td>
                <td><?= h($dream->dream_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dream->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dream->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dream->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dream->dream_id)]) ?>
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
