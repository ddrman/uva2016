
<div class="forms form small-11 small-centered columns content">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Add Form') ?></legend>
        <?php
            echo $this->Form->input('Nombre:');
            echo $this->Form->input('Apellidos:');
            echo $this->Form->input('Tipo de documento:');
            echo $this->Form->input('Documento de identidad:');
            echo $this->Form->input('Correo Electrónico:');
            echo $this->Form->input('Sexo:');
            echo $this->Form->input('Fecha de Nacimiento:');
            echo $this->Form->input('Teléfono Móvil:');
            echo $this->Form->input('Teléfono Fijo:');
            echo $this->Form->input('Dirección:');
            echo $this->Form->input('Localidad:');
            echo $this->Form->input('Código Postal:');
            echo $this->Form->input('Nacionalidad:');
            echo $this->Form->input('Nivel de estudios:');
            echo $this->Form->input('Estudios que cursa:');
            echo $this->Form->input('Centro de estudios en el que cursa:');
            echo $this->Form->input('Idiomas que habla:');
            echo $this->Form->input('Estudios realizados:');
            echo $this->Form->input('Centro de estudios realizados:');
            echo $this->Form->input('Prefesión:');
            echo $this->Form->input('Lugar de trabajo:');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
