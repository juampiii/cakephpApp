<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asignatura'), ['controller' => 'Asignatura', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asignatura'), ['controller' => 'Asignatura', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor index large-9 medium-8 columns content">
    <h3><?= __('Profesor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('DNI') ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Apellidos') ?></th>
                <th><?= $this->Paginator->sort('Codigo_CV') ?></th>
                <th><?= $this->Paginator->sort('Dirección') ?></th>
                <th><?= $this->Paginator->sort('Teléfono') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profesor as $profesor): ?>
            <tr>
                <td><?= h($profesor->DNI) ?></td>
                <td><?= h($profesor->Nombre) ?></td>
                <td><?= h($profesor->Apellidos) ?></td>
                <td><?= h($profesor->Codigo_CV) ?></td>
                <td><?= h($profesor->Dirección) ?></td>
                <td><?= h($profesor->Teléfono) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profesor->DNI]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profesor->DNI]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profesor->DNI], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->DNI)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
