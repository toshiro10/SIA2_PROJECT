<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inproceeding $inproceeding
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inproceeding->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inproceeding->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inproceedings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inproceedings form large-9 medium-8 columns content">
    <?= $this->Form->create($inproceeding) ?>
    <fieldset>
        <legend><?= __('Edit Inproceeding') ?></legend>
        <?php
            echo $this->Form->control('id_book');
            echo $this->Form->control('id_state');
            echo $this->Form->control('mdate');
            echo $this->Form->control('lkey');
            echo $this->Form->control('title');
            echo $this->Form->control('year');
            echo $this->Form->control('crossref');
            echo $this->Form->control('booktitle');
            echo $this->Form->control('url');
            echo $this->Form->control('ee');
            echo $this->Form->control('pages');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
