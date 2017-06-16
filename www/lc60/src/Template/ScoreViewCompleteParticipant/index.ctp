<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ScoreViewCompleteParticipant[]|\Cake\Collection\CollectionInterface $scoreViewCompleteParticipant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score View Complete Participant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scoreViewCompleteParticipant index large-9 medium-8 columns content">
    <h3><?= __('Score View Complete Participant') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_success_count_sum_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_success_count_participant_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_avg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dividend_count_sum_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dividend_count_participant_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_dividend_value_avg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_dividend_value_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_total_with_dividends') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scoreViewCompleteParticipant as $scoreViewCompleteParticipant): ?>
            <tr>
                <td><?= $scoreViewCompleteParticipant->has('participant') ? $this->Html->link($scoreViewCompleteParticipant->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $scoreViewCompleteParticipant->participant->id]) : '' ?></td>
                <td><?= h($scoreViewCompleteParticipant->participant_name) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->subtask_success_count_sum_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->subtask_success_count_participant_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_avg) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->dividend_count_sum_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->dividend_count_participant_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->final_dividend_value_avg) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->final_dividend_value_total) ?></td>
                <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_total_with_dividends) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scoreViewCompleteParticipant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scoreViewCompleteParticipant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scoreViewCompleteParticipant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewCompleteParticipant->id)]) ?>
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
