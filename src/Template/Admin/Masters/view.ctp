<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Master $master
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master'), ['action' => 'edit', $master->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master'), ['action' => 'delete', $master->id], ['confirm' => __('Are you sure you want to delete # {0}?', $master->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="masters view large-9 medium-8 columns content">
    <h3><?= h($master->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($master->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($master->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origin Password') ?></th>
            <td><?= h($master->origin_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($master->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($master->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($master->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($master->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($master->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($master->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $master->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
