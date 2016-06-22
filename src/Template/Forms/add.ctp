
<div class="forms form small-7 small-centered columns content">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Formulario UVA 2016') ?></legend>
        <?php
            echo $this->Form->input('Nombre:');
            echo $this->Form->input('Apellidos:');
            
            $tipdoc = [
                        [ 'text' => 'DNI', 'value' => '1', 'attr_name' => 'DNI' ],
                        [ 'text' => 'NIE', 'value' => '2', 'attr_name' => 'NIE' ],
                        [ 'text' => 'PASAPORTE', 'value' => '3', 'other_attr_name' => 'PASAPORTE' ],
                        ];
            echo $this->Form->select('Tipo de documento:', $tipdoc);
            echo $this->Form->input('Documento de identidad:');
            echo $this->Form->input('email', ['label' =>'Correo electrónico:']);
            
            $sexo = [
                        [ 'text' => 'HOMBRE', 'value' => '1', 'attr_name' => 'HOMBRE' ],
                        [ 'text' => 'MUJER', 'value' => '2', 'attr_name' => 'MUJER' ],
                    ];

            echo $this->Form->select('Sexo:', $sexo);
            echo $this->Form->input('fecha', ['label' =>'Fecha de Nacimiento:']);
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