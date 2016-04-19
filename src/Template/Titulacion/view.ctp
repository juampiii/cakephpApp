<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Titulacion'), ['action' => 'edit', $titulacion->Codigo_titulacion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Titulacion'), ['action' => 'delete', $titulacion->Codigo_titulacion], ['confirm' => __('Are you sure you want to delete # {0}?', $titulacion->Codigo_titulacion)]) ?> </li>
        <li><?= $this->Html->link(__('List Titulacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Titulacion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="titulacion view large-9 medium-8 columns content">
    <h3><?= h($titulacion->Codigo_titulacion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Titulacion') ?></th>
            <td><?= h($titulacion->Codigo_titulacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($titulacion->Nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Plan') ?></th>
            <td><?= h($titulacion->Plan) ?></td>
        </tr>
    </table>
</div>
