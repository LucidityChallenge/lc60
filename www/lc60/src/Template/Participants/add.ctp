<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['action' => 'index']) ?></li>
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
<div class="participants form large-9 medium-8 columns content">
    <?= $this->Form->create($participant) ?>
    <fieldset>
        <legend><?= __('Add Participant') ?></legend>
        <?php
            echo $this->Form->control('participant_name');
            echo $this->Form->control('participant_goal');
            echo $this->Form->control('participant_dj_url');
            echo $this->Form->control('participant_join_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
