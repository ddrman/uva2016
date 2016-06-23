
<div class="forms form small-7 small-centered columns content">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Formulario UVA 2016') ?></legend>
        <?php
            echo $this->Form->input('nombre', ['label' =>'Nombre']);
            echo $this->Form->input('apellidos', ['label' =>'Apellidos']);
            echo $this->Form->label('tip_doc', ['label' =>'Tipo de documento de idenatidad:']);
            
            $tipdoc = [
                        [ 'text' => 'DNI', 'value' => '1', 'attr_name' => 'DNI' ],
                        [ 'text' => 'NIE', 'value' => '2', 'attr_name' => 'NIE' ],
                        [ 'text' => 'PASAPORTE', 'value' => '3', 'other_attr_name' => 'PASAPORTE' ],
                        ];
            echo $this->Form->select('tipo_doc' ,$tipdoc);
            echo $this->Form->input('doc', ['label' =>'Documento de identidad']);
            echo $this->Form->input('email', ['label' =>'Correo electrónico:']);
            
            echo $this->Form->label('sexo', ['label' =>'Sexo:']);
            $sexo = [
                        [ 'text' => 'HOMBRE', 'value' => '1', 'attr_name' => 'HOMBRE' ],
                        [ 'text' => 'MUJER', 'value' => '2', 'attr_name' => 'MUJER' ],
                    ];

            echo $this->Form->select('Sexo:', $sexo);
            echo $this->Form->input('fecha', ['label' =>'Fecha de Nacimiento:','minYear' => date('Y') - 50, 'format' => 'dd-mm-YYYY',
                        
                ]);
            echo $this->Form->input('telefonomov', ['label' =>'Teléfono Móvil']);
            echo $this->Form->input('telefonofij', ['label' =>'Teléfono Fijo']);
            echo $this->Form->input('direccion', ['label' =>'Dirección:']);
            echo $this->Form->input('localidad', ['label' =>'Localidad:']);
            echo $this->Form->input('cod_postal', ['label' =>'Código Postal:']);
            echo $this->Form->input('nacionalidad', ['label' =>'Nacionalidad:']);
            echo $this->Form->input('nivel_estudios', ['label' =>'Nivel de estudios:']);
            echo $this->Form->input('estud_cursa', ['label' =>'Estudios que cursa actualmente:']);
            echo $this->Form->input('centro_estud', ['label' =>'Centro de estudios en el que cursa:']);
            echo $this->Form->input('idiomas', ['label' =>'Idiomas que habla:']);
            echo $this->Form->input('estud_reali', ['label' =>'Estudios realizados:']);
            echo $this->Form->input('centro_estud_reali', ['label' =>'Centros en el que realizó los estudios:']);
            echo $this->Form->input('profesion', ['label' =>'Profesión Actual:']);
            echo $this->Form->input('lugar_trabajo', ['label' =>'Lugar de trabajo:']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
