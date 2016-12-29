<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Connections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="connections form large-9 medium-8 columns content">
    <?= $this->Form->create($connection) ?>
    <fieldset>
        <legend><?= __('Add Connection') ?></legend>
        <?php
            echo $this->Form->input('moment');
            echo $this->Form->input('type');
            echo $this->Form->input('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
