<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Memo $memo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Memo'), ['action' => 'edit', $memo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Memo'), ['action' => 'delete', $memo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $memo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Memos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Memo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="memos view large-9 medium-8 columns content">
    <h3><?= h($memo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Memo Nickname') ?></th>
            <td><?= h($memo->memo_nickname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($memo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo Timestamp') ?></th>
            <td><?= h($memo->memo_timestamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo Unread') ?></th>
            <td><?= $memo->memo_unread ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Memo Message') ?></h4>
        <?= $this->Text->autoParagraph(h($memo->memo_message)); ?>
    </div>
</div>
