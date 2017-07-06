<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Participant[]|\Cake\Collection\CollectionInterface $participants
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Score View Complete'), ['controller' => 'ScoreViewComplete', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score View Complete'), ['controller' => 'ScoreViewComplete', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Score View Complete Participant'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score View Complete Participant'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Share Holder'), ['controller' => 'SubtaskShareHolder', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Share Holder'), ['controller' => 'SubtaskShareHolder', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Shares'), ['controller' => 'SubtaskShares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Share'), ['controller' => 'SubtaskShares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final Minimum'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final Minimum'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Calculated Total'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Calculated Total'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total Complete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total Complete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total Participant'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total Participant'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participants index large-9 medium-8 columns content">
    <h3><?= __('Participants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_goal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_dj_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_join_url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participants as $participant): ?>
            <tr>
                <td><?= $this->Number->format($participant->id) ?></td>
                <td><?= h($participant->participant_name) ?></td>
                <td><?= h($participant->participant_goal) ?></td>
                <td><?= h($participant->participant_dj_url) ?></td>
                <td><?= h($participant->participant_join_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $participant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participant->id)]) ?>
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
<?= $this->Html->meta(
    'News',
    ['action' => 'rss'],
    ['type' => 'rss', 'block' => true]
);
?>
