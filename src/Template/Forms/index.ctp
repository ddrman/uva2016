<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Form'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="forms index large-9 medium-8 columns content">
        <h3><?= __('Formulario') ?></h3>
        <?= $this->Html->link('Exportar a CSV', [
        'controller' => 'forms', 
        'action' => 'export',
        '_ext' => 'csv',],
        ['class' => 'btn btn-success']) 
    ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('apellidos') ?></th>
                <th><?= $this->Paginator->sort('tipo_doc') ?></th>
                <th><?= $this->Paginator->sort('doc') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('sexo') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('telefonomov') ?></th>
                <th><?= $this->Paginator->sort('telefonofij') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('localidad') ?></th>
                <th><?= $this->Paginator->sort('cod_postal') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('nivel_estudios') ?></th>
                <th><?= $this->Paginator->sort('profesion') ?></th>
                <th><?= $this->Paginator->sort('lugar_trabajo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($forms as $form): ?>
            <tr>
                <td><?= $this->Number->format($form->id) ?></td>
                <td><?= h($form->nombre) ?></td>
                <td><?= h($form->apellidos) ?></td>
                <td><?= $this->Number->format($form->tipo_doc) ?></td>
                <td><?= h($form->doc) ?></td>
                <td><?= h($form->email) ?></td>
                <td><?= h($form->sexo) ?></td>
                <td><?= h($form->fecha) ?></td>
                <td><?= $this->Number->format($form->telefonomov) ?></td>
                <td><?= $this->Number->format($form->telefonofij) ?></td>
                <td><?= h($form->direccion) ?></td>
                <td><?= h($form->localidad) ?></td>
                <td><?= $this->Number->format($form->cod_postal) ?></td>
                <td><?= h($form->nacionalidad) ?></td>
                <td><?= h($form->nivel_estudios) ?></td>
                <td><?= h($form->profesion) ?></td>
                <td><?= h($form->lugar_trabajo) ?></td>
                <td><?= h($form->created) ?></td>
                <td><?= h($form->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $form->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $form->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $form->id], ['confirm' => __('Are you sure you want to delete # {0}?', $form->id)]) ?>
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
