<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $master->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $master->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="masters form large-9 medium-8 columns content">
    <?= $this->Form->create($master) ?>
    <fieldset>
        <legend><?= __('Edit Master') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('confirm_password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
