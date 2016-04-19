<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Asignatura'), ['controller' => 'Asignatura', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asignatura'), ['controller' => 'Asignatura', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor) ?>
    <fieldset>
        <legend><?= __('Add Profesor') ?></legend>
        <?php
            echo $this->Form->input('Nombre');
            echo $this->Form->input('Apellidos');
            echo $this->Form->input('Codigo_CV');
            echo $this->Form->input('Dirección');
            echo $this->Form->input('Teléfono');
            echo $this->Form->input('asignatura._ids', ['options' => $asignatura]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
