<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Signups'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="signups form large-9 medium-8 columns content">
    <?= $this->Form->create($signup) ?>
    <fieldset>
        <legend><?= __('Add Signup') ?></legend>
        <?php
            echo $this->Form->control('now_date_unix');
            echo $this->Form->control('end_date');
            echo $this->Form->control('end_date_unix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
