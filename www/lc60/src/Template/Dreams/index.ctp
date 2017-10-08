<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Dream[]|\Cake\Collection\CollectionInterface $dreams
  */
?>
<div class="dreams index large-9 medium-8 columns content">
    <h3><?= __('Dreams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_url') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dreams as $dream): ?>
            <tr>
                <td><?= $this->Html->link($this->Number->format($dream->id), ['action' => 'view', $dream->id]) ?></td>
                <td><?= $dream->has('participant') ? $this->Html->link($dream->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $dream->participant->id]) : '' ?></td>
                <td><?= $this->Html->link($dream->dream_timestamp, ['action' => 'view', $dream->id])?></td>
                <td><?= $this->Html->link($dream->dream_url) ?></td>
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
