<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Asignatura'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asignatura form large-9 medium-8 columns content">
    <?= $this->Form->create($asignatura) ?>
    <fieldset>
        <legend><?= __('Add Asignatura') ?></legend>
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
