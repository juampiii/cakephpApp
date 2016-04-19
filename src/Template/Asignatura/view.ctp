<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asignatura'), ['action' => 'edit', $asignatura->Código_asignatura]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asignatura'), ['action' => 'delete', $asignatura->Código_asignatura], ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->Código_asignatura)]) ?> </li>
        <li><?= $this->Html->link(__('List Asignatura'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asignatura'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asignatura view large-9 medium-8 columns content">
    <h3><?= h($asignatura->Código_asignatura) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Asignatura') ?></th>
            <td><?= h($asignatura->Codigo_asignatura) ?></td>
        </tr>
        <tr>
            <th><?= __('TitulacionCodigo Titulacion') ?></th>
            <td><?= h($asignatura->TitulacionCodigo_titulacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($asignatura->Nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Creditos ECTS') ?></th>
            <td><?= h($asignatura->Creditos_ECTS) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Profesor') ?></h4>
        <?php if (!empty($asignatura->profesor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('DNI') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Apellidos') ?></th>
                <th><?= __('Codigo CV') ?></th>
                <th><?= __('Dirección') ?></th>
                <th><?= __('Teléfono') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($asignatura->profesor as $profesor): ?>
            <tr>
                <td><?= h($profesor->DNI) ?></td>
                <td><?= h($profesor->Nombre) ?></td>
                <td><?= h($profesor->Apellidos) ?></td>
                <td><?= h($profesor->Codigo_CV) ?></td>
                <td><?= h($profesor->Dirección) ?></td>
                <td><?= h($profesor->Teléfono) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profesor', 'action' => 'view', $profesor->DNI]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profesor', 'action' => 'edit', $profesor->DNI]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profesor', 'action' => 'delete', $profesor->DNI], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->DNI)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
