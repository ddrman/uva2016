<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $form->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $form->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Forms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="forms form large-9 medium-8 columns content">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Edit Form') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellidos');
            echo $this->Form->input('tipo_doc');
            echo $this->Form->input('doc');
            echo $this->Form->input('email');
            echo $this->Form->input('sexo');
            echo $this->Form->input('fecha');
            echo $this->Form->input('telefonomov');
            echo $this->Form->input('telefonofij');
            echo $this->Form->input('direccion');
            echo $this->Form->input('localidad');
            echo $this->Form->input('cod_postal');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('nivel_estudios');
            echo $this->Form->input('estud_cursa');
            echo $this->Form->input('centro_estud');
            echo $this->Form->input('idiomas');
            echo $this->Form->input('estud_reali');
            echo $this->Form->input('centro_estud_reali');
            echo $this->Form->input('profesion');
            echo $this->Form->input('lugar_trabajo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
