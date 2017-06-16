<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Dream[]|\Cake\Collection\CollectionInterface $dreams
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Dream Super'), ['controller' => 'SubtaskDreamSuper', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Dream Super'), ['controller' => 'SubtaskDreamSuper', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Dreams'), ['controller' => 'SubtaskDreams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Dream'), ['controller' => 'SubtaskDreams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dreams index large-9 medium-8 columns content">
    <h3><?= __('Dreams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dreams as $dream): ?>
            <tr>
                <td><?= $this->Number->format($dream->id) ?></td>
                <td><?= $dream->has('participant') ? $this->Html->link($dream->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $dream->participant->id]) : '' ?></td>
                <td><?= h($dream->dream_timestamp) ?></td>
                <td><?= h($dream->dream_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dream->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dream->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dream->id)]) ?>
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
