<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profesor'), ['action' => 'edit', $profesor->DNI]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profesor'), ['action' => 'delete', $profesor->DNI], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->DNI)]) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asignatura'), ['controller' => 'Asignatura', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asignatura'), ['controller' => 'Asignatura', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profesor view large-9 medium-8 columns content">
    <h3><?= h($profesor->DNI) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('DNI') ?></th>
            <td><?= h($profesor->DNI) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($profesor->Nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($profesor->Apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo CV') ?></th>
            <td><?= h($profesor->Codigo_CV) ?></td>
        </tr>
        <tr>
            <th><?= __('Dirección') ?></th>
            <td><?= h($profesor->Dirección) ?></td>
        </tr>
        <tr>
            <th><?= __('Teléfono') ?></th>
            <td><?= h($profesor->Teléfono) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Asignatura') ?></h4>
        <?php if (!empty($profesor->asignatura)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Codigo Asignatura') ?></th>
                <th><?= __('TitulacionCodigo Titulacion') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Creditos ECTS') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profesor->asignatura as $asignatura): ?>
            <tr>
                <td><?= h($asignatura->Codigo_asignatura) ?></td>
                <td><?= h($asignatura->TitulacionCodigo_titulacion) ?></td>
                <td><?= h($asignatura->Nombre) ?></td>
                <td><?= h($asignatura->Creditos_ECTS) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Asignatura', 'action' => 'view', $asignatura->Código_asignatura]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Asignatura', 'action' => 'edit', $asignatura->Código_asignatura]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Asignatura', 'action' => 'delete', $asignatura->Código_asignatura], ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->Código_asignatura)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
