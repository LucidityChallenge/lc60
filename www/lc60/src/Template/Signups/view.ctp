<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Signup $signup
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Signup'), ['action' => 'edit', $signup->now_date]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Signup'), ['action' => 'delete', $signup->now_date], ['confirm' => __('Are you sure you want to delete # {0}?', $signup->now_date)]) ?> </li>
        <li><?= $this->Html->link(__('List Signups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Signup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="signups view large-9 medium-8 columns content">
    <h3><?= h($signup->now_date) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($signup->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Now Date Unix') ?></th>
            <td><?= $this->Number->format($signup->now_date_unix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date Unix') ?></th>
            <td><?= $this->Number->format($signup->end_date_unix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Now Date') ?></th>
            <td><?= h($signup->now_date) ?></td>
        </tr>
    </table>
</div>
