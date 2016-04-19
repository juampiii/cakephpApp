<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asignatura'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asignatura index large-9 medium-8 columns content">
    <h3><?= __('Asignatura') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Codigo_asignatura') ?></th>
                <th><?= $this->Paginator->sort('TitulacionCodigo_titulacion') ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Creditos_ECTS') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asignatura as $asignatura): ?>
            <tr>
                <td><?= h($asignatura->Codigo_asignatura) ?></td>
                <td><?= h($asignatura->TitulacionCodigo_titulacion) ?></td>
                <td><?= h($asignatura->Nombre) ?></td>
                <td><?= h($asignatura->Creditos_ECTS) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asignatura->Código_asignatura]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asignatura->Código_asignatura]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asignatura->Código_asignatura], ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->Código_asignatura)]) ?>
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
