<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Titulacion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="titulacion index large-9 medium-8 columns content">
    <h3><?= __('Titulacion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Codigo_titulacion') ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Plan') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titulacion as $titulacion): ?>
            <tr>
                <td><?= h($titulacion->Codigo_titulacion) ?></td>
                <td><?= h($titulacion->Nombre) ?></td>
                <td><?= h($titulacion->Plan) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $titulacion->Codigo_titulacion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $titulacion->Codigo_titulacion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $titulacion->Codigo_titulacion], ['confirm' => __('Are you sure you want to delete # {0}?', $titulacion->Codigo_titulacion)]) ?>
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
