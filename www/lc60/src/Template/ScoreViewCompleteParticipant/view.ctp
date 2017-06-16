<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ScoreViewCompleteParticipant $scoreViewCompleteParticipant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Score View Complete Participant'), ['action' => 'edit', $scoreViewCompleteParticipant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Score View Complete Participant'), ['action' => 'delete', $scoreViewCompleteParticipant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewCompleteParticipant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Score View Complete Participant'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score View Complete Participant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scoreViewCompleteParticipant view large-9 medium-8 columns content">
    <h3><?= h($scoreViewCompleteParticipant->participant_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $scoreViewCompleteParticipant->has('participant') ? $this->Html->link($scoreViewCompleteParticipant->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $scoreViewCompleteParticipant->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant Name') ?></th>
            <td><?= h($scoreViewCompleteParticipant->participant_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count Sum Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->subtask_success_count_sum_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Success Count Participant Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->subtask_success_count_participant_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Avg') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_avg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend Count Sum Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->dividend_count_sum_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend Count Participant Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->dividend_count_participant_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Dividend Value Avg') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->final_dividend_value_avg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Dividend Value Total') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->final_dividend_value_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Value Total With Dividends') ?></th>
            <td><?= $this->Number->format($scoreViewCompleteParticipant->final_value_total_with_dividends) ?></td>
        </tr>
    </table>
</div>
