<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incollection $incollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Incollection'), ['action' => 'edit', $incollection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Incollection'), ['action' => 'delete', $incollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incollection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Incollections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Incollection'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="incollections view large-9 medium-8 columns content">
    <h3><?= h($incollection->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Publication Key') ?></th>
            <td><?= h($incollection->publication_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($incollection->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pages') ?></th>
            <td><?= h($incollection->pages) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crossref') ?></th>
            <td><?= h($incollection->crossref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Book') ?></th>
            <td><?= h($incollection->title_book) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ee') ?></th>
            <td><?= h($incollection->ee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($incollection->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($incollection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($incollection->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mdate') ?></th>
            <td><?= h($incollection->mdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($incollection->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($incollection->created) ?></td>
        </tr>
    </table>
</div>
