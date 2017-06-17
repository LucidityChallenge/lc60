<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Score $score
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Score'), ['action' => 'edit', $score->participant_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Score'), ['action' => 'delete', $score->participant_id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->participant_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scores view large-9 medium-8 columns content">
    <h3><?= h($score->participant_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $score->has('participant') ? $this->Html->link($score->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $score->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant Name') ?></th>
            <td><?= h($score->participant_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($score->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Successful Subtasks') ?></th>
            <td><?= $this->Number->format($score->successful_subtasks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Average Subtask Value') ?></th>
            <td><?= $this->Number->format($score->average_subtask_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Subtask Value') ?></th>
            <td><?= $this->Number->format($score->total_subtask_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend Successes') ?></th>
            <td><?= $this->Number->format($score->dividend_successes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Average Dividend Value') ?></th>
            <td><?= $this->Number->format($score->average_dividend_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Dividends') ?></th>
            <td><?= $this->Number->format($score->total_dividends) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Score') ?></th>
            <td><?= $this->Number->format($score->total_score) ?></td>
        </tr>
    </table>
</div>
