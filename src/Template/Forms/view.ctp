<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Form'), ['action' => 'edit', $form->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Form'), ['action' => 'delete', $form->id], ['confirm' => __('Are you sure you want to delete # {0}?', $form->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Forms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Form'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="forms view large-9 medium-8 columns content">
    <h3><?= h($form->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($form->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($form->apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Doc') ?></th>
            <td><?= h($form->doc) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($form->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($form->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($form->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Localidad') ?></th>
            <td><?= h($form->localidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($form->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Nivel Estudios') ?></th>
            <td><?= h($form->nivel_estudios) ?></td>
        </tr>
        <tr>
            <th><?= __('Profesion') ?></th>
            <td><?= h($form->profesion) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar Trabajo') ?></th>
            <td><?= h($form->lugar_trabajo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($form->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Doc') ?></th>
            <td><?= $this->Number->format($form->tipo_doc) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefonomov') ?></th>
            <td><?= $this->Number->format($form->telefonomov) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefonofij') ?></th>
            <td><?= $this->Number->format($form->telefonofij) ?></td>
        </tr>
        <tr>
            <th><?= __('Cod Postal') ?></th>
            <td><?= $this->Number->format($form->cod_postal) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha') ?></th>
            <td><?= h($form->fecha) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($form->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($form->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Estud Cursa') ?></h4>
        <?= $this->Text->autoParagraph(h($form->estud_cursa)); ?>
    </div>
    <div class="row">
        <h4><?= __('Centro Estud') ?></h4>
        <?= $this->Text->autoParagraph(h($form->centro_estud)); ?>
    </div>
    <div class="row">
        <h4><?= __('Idiomas') ?></h4>
        <?= $this->Text->autoParagraph(h($form->idiomas)); ?>
    </div>
    <div class="row">
        <h4><?= __('Estud Reali') ?></h4>
        <?= $this->Text->autoParagraph(h($form->estud_reali)); ?>
    </div>
    <div class="row">
        <h4><?= __('Centro Estud Reali') ?></h4>
        <?= $this->Text->autoParagraph(h($form->centro_estud_reali)); ?>
    </div>
</div>
