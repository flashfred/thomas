<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Connection'), ['action' => 'edit', $connection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Connection'), ['action' => 'delete', $connection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Connections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Connection'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="connections view large-9 medium-8 columns content">
    <h3><?= h($connection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($connection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($connection->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $this->Number->format($connection->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moment') ?></th>
            <td><?= h($connection->moment) ?></td>
        </tr>
    </table>
</div>
