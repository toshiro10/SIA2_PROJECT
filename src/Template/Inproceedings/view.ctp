<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inproceeding $inproceeding
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inproceeding'), ['action' => 'edit', $inproceeding->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inproceeding'), ['action' => 'delete', $inproceeding->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inproceeding->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inproceedings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inproceeding'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inproceedings view large-9 medium-8 columns content">
    <h3><?= h($inproceeding->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lkey') ?></th>
            <td><?= h($inproceeding->lkey) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($inproceeding->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($inproceeding->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crossref') ?></th>
            <td><?= h($inproceeding->crossref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Booktitle') ?></th>
            <td><?= h($inproceeding->booktitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($inproceeding->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ee') ?></th>
            <td><?= h($inproceeding->ee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pages') ?></th>
            <td><?= h($inproceeding->pages) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inproceeding->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Book') ?></th>
            <td><?= $this->Number->format($inproceeding->id_book) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id State') ?></th>
            <td><?= $this->Number->format($inproceeding->id_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mdate') ?></th>
            <td><?= h($inproceeding->mdate) ?></td>
        </tr>
    </table>
</div>
