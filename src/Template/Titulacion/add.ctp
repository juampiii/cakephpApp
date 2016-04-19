<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Titulacion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titulacion form large-9 medium-8 columns content">
    <?= $this->Form->create($titulacion) ?>
    <fieldset>
        <legend><?= __('Add Titulacion') ?></legend>
        <?php
            echo $this->Form->input('Nombre');
            echo $this->Form->input('Plan');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
