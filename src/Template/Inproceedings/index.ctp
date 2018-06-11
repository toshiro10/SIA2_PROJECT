<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inproceeding[]|\Cake\Collection\CollectionInterface $inproceedings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inproceeding'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inproceedings index large-9 medium-8 columns content">
    <h3><?= __('Inproceedings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_book') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lkey') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crossref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booktitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pages') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inproceedings as $inproceeding): ?>
            <tr>
                <td><?= $this->Number->format($inproceeding->id) ?></td>
                <td><?= $this->Number->format($inproceeding->id_book) ?></td>
                <td><?= $this->Number->format($inproceeding->id_state) ?></td>
                <td><?= h($inproceeding->mdate) ?></td>
                <td><?= h($inproceeding->lkey) ?></td>
                <td><?= h($inproceeding->title) ?></td>
                <td><?= h($inproceeding->year) ?></td>
                <td><?= h($inproceeding->crossref) ?></td>
                <td><?= h($inproceeding->booktitle) ?></td>
                <td><?= h($inproceeding->url) ?></td>
                <td><?= h($inproceeding->ee) ?></td>
                <td><?= h($inproceeding->pages) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inproceeding->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inproceeding->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inproceeding->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inproceeding->id)]) ?>
                </td>
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
