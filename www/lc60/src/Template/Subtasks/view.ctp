<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Subtask $subtask
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask'), ['action' => 'edit', $subtask->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask'), ['action' => 'delete', $subtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtask->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['controller' => 'SubtaskTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['controller' => 'SubtaskTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtasks view large-9 medium-8 columns content">
    <h3><?= h($subtask->subtask_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $subtask->has('task') ? $this->Html->link($subtask->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtask->task->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtask->has('subtask') ? $this->Html->link($subtask->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtask->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Name') ?></th>
            <td><?= h($subtask->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category') ?></th>
            <td><?= $subtask->has('subtask_category') ? $this->Html->link($subtask->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtask->subtask_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Url') ?></th>
            <td><?= h($subtask->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $subtask->has('participant') ? $this->Html->link($subtask->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtask->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Image') ?></th>
            <td><?= ($subtask->subtask_image != null) ? $this->Html->image($subtask->subtask_image, ['alt' => ($subtask->subtask_name)]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Type') ?></th>
            <td><?= $subtask->has('subtask_type') ? $this->Html->link($subtask->subtask_type->subtask_type_name, ['controller' => 'SubtaskTypes', 'action' => 'view', $subtask->subtask_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtask->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Base Value') ?></th>
            <td><?= $this->Number->format($subtask->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Max Value') ?></th>
            <td><?= $this->Number->format($subtask->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Starting Demand') ?></th>
            <td><?= $this->Number->format($subtask->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Inflation Rate') ?></th>
            <td><?= $this->Number->format($subtask->subtask_inflation_rate) ?> (<?=$this->Number->format($subtask->subtask_inflation_rate-100)?>% per demand)</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Demand Cutoff') ?></th>
            <td><?= $this->Number->format($subtask->subtask_demand_cutoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Period Demand') ?></th>
            <td><?= $this->Number->format($subtask->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Dividend Rate') ?></th>
            <td><?= $this->Number->format($subtask->subtask_dividend_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Symbol') ?></th>
            <td><span class="emoji"><?= ($subtask->subtask_symbol != NULL) ? ('&#'.($subtask->subtask_symbol).';') : '' ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $subtask->subtask_accumulative ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Subtask Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtask->subtask_description)); ?>
    </div>
</div>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
