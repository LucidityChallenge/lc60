<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ScoreViewComplete[]|\Cake\Collection\CollectionInterface $scoreViewComplete
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score View Complete'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scoreViewComplete index large-9 medium-8 columns content">
    <h3><?= __('Score View Complete') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
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
            <?php foreach ($scoreViewComplete as $scoreViewComplete): ?>
            <tr>
                <td><?= $scoreViewComplete->has('participant') ? $this->Html->link($scoreViewComplete->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $scoreViewComplete->participant->id]) : '' ?></td>
                <td><?= $this->Number->format($scoreViewComplete->subtask_success_count_sum_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->subtask_success_count_participant_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->final_value_avg) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->final_value_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->dividend_count_sum_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->dividend_count_participant_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->final_dividend_value_avg) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->final_dividend_value_total) ?></td>
                <td><?= $this->Number->format($scoreViewComplete->final_value_total_with_dividends) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $scoreViewComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scoreViewComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scoreViewComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewComplete->id)]) ?>
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
