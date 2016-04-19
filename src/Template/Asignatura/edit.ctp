<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $asignatura->Código_asignatura],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asignatura->Código_asignatura)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Asignatura'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asignatura form large-9 medium-8 columns content">
    <?= $this->Form->create($asignatura) ?>
    <fieldset>
        <legend><?= __('Edit Asignatura') ?></legend>
        <?php
            echo $this->Form->input('Codigo_asignatura');
            echo $this->Form->input('TitulacionCodigo_titulacion');
            echo $this->Form->input('Nombre');
            echo $this->Form->input('Creditos_ECTS');
            echo $this->Form->input('profesor._ids', ['options' => $profesor]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
