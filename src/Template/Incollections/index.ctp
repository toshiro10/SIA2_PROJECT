<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incollection[]|\Cake\Collection\CollectionInterface $incollections
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Incollection'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="incollections index large-9 medium-8 columns content">
    <h3><?= __('Incollections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publication_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pages') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crossref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_book') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($incollections as $incollection): ?>
            <tr>
                <td><?= $this->Number->format($incollection->id) ?></td>
                <td><?= h($incollection->mdate) ?></td>
                <td><?= h($incollection->modified) ?></td>
                <td><?= h($incollection->created) ?></td>
                <td><?= $this->Number->format($incollection->year) ?></td>
                <td><?= h($incollection->publication_key) ?></td>
                <td><?= h($incollection->title) ?></td>
                <td><?= h($incollection->pages) ?></td>
                <td><?= h($incollection->crossref) ?></td>
                <td><?= h($incollection->title_book) ?></td>
                <td><?= h($incollection->ee) ?></td>
                <td><?= h($incollection->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $incollection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $incollection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $incollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incollection->id)]) ?>
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
