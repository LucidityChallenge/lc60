<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ScoreViewComplete $scoreViewComplete
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Score View Complete'), ['action' => 'edit', $scoreViewComplete->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Score View Complete'), ['action' => 'delete', $scoreViewComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewComplete->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Score View Complete'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score View Complete'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scoreViewComplete view large-9 medium-8 columns content">
    <h3><?= h($scoreViewComplete->participant_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $scoreViewComplete->has('participant') ? $this->Html->link($scoreViewComplete->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $scoreViewComplete->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count Sum Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->subtask_success_count_sum_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count Participant Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->subtask_success_count_participant_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Avg') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->final_value_avg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->final_value_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend Count Sum Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->dividend_count_sum_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend Count Participant Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->dividend_count_participant_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Dividend Value Avg') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->final_dividend_value_avg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Dividend Value Total') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->final_dividend_value_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Total With Dividends') ?></th>
            <td><?= $this->Number->format($scoreViewComplete->final_value_total_with_dividends) ?></td>
        </tr>
    </table>
</div>
