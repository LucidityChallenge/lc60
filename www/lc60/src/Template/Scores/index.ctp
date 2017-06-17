<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Score[]|\Cake\Collection\CollectionInterface $scores
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scores index large-9 medium-8 columns content">
    <h3><?= __('Scores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('successful_subtasks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('average_subtask_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_subtask_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dividend_successes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('average_dividend_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_dividends') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_score') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $score): ?>
            <tr>
                <td><?=$this->Number->format($score->position) ?><span class="ordinal"><?php 
		  $mod = $score->position % 10;
		  
		  
		  if (($mod >= 4) || (($score->position >= 11) && ($score->position <= 13)))
		  {
		    echo 'th';
		  }
		  else
		  {
		    switch ($mod)
		    {
		    case 1:
		    {
		      echo 'st';
		      break;
		    }
		    case 2:
		    {
		      echo 'nd';
		      break;
		    }
		    case 3:
		    {
		      echo 'rd';
		      break;
		    }
		    default:
		    {
		    }
		    }
		  }       
                ?></span></td>
                <td><?= $score->has('participant') ? $this->Html->link($score->participant, ['controller' => 'Participants', 'action' => 'view', $score->participant_id]) : '' ?></td>
                <td><?= $this->Number->format($score->successful_subtasks) ?></td>
                <td><?= $this->Number->format($score->average_subtask_value) ?></td>
                <td><?= $this->Number->format($score->total_subtask_value) ?></td>
                <td><?= $this->Number->format($score->dividend_successes) ?></td>
                <td><?= $this->Number->format($score->average_dividend_value) ?></td>
                <td><?= $this->Number->format($score->total_dividends) ?></td>
                <td><?= $this->Number->format($score->total_score) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $score->participant_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $score->participant_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $score->participant_id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->participant_id)]) ?>
                </td>-->
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
