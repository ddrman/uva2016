
<div class="forms form small-7 small-centered columns content">


    <?= $this->Form->create($form) ?>
    <fieldset>
        <h1><?= __('Formulario UVA 2016') ?></h1>
        <?php
            echo $this->Form->input('nombre', ['label' =>'Nombre:(*)', 'class' => 'form-control']);
            echo $this->Form->input('apellidos', ['label' =>'Apellidos:(*)', 'class' => 'form-control']);
            echo $this->Form->label('tip_doc', ['label' =>'Tipo de documento de idenatidad:(*)']);
            
            $tipdoc = [
                        [ 'text' => 'DNI', 'value' => '1', 'attr_name' => 'DNI' ],
                        [ 'text' => 'NIE', 'value' => '2', 'attr_name' => 'NIE' ],
                        [ 'text' => 'PASAPORTE', 'value' => '3', 'other_attr_name' => 'PASAPORTE' ],
                        ];
            echo $this->Form->select('tipo_doc' ,$tipdoc, ['class' => 'form-control']);
            echo $this->Form->input('doc', ['label' =>'Documento de identidad:(*)', 'class' => 'form-control']);
            echo $this->Form->input('email', ['label' =>'Correo electrónico:(*)', 'class' => 'form-control']);
            

            echo $this->Form->label('sexo', ['label' =>'Sexo:(*)']);
            echo $this->Form->select('sexo',['Hombre','Mujer'],
                                        ['empty' => '(Elige una)','class' => 'form-control']);
            echo $this->Form->input('fecha', ['label' =>'Fecha de Nacimiento:(*)','minYear' => date('Y') - 90, 'format' => 'dd-mm-YYYY',
                ]);

            echo $this->Form->input('telefonomov', ['label' =>'Teléfono Móvil:(*)', 'class' => 'form-control']);
            echo $this->Form->input('telefonofij', ['label' =>'Teléfono Fijo:', 'class' => 'form-control']);
            echo $this->Form->input('direccion', ['label' =>'Dirección:(*)', 'class' => 'form-control']);
            echo $this->Form->input('localidad', ['label' =>'Localidad:(*)', 'class' => 'form-control']);
            echo $this->Form->input('cod_postal', ['label' =>'Código Postal:(*)', 'class' => 'form-control']);
            echo $this->Form->input('nacionalidad', ['label' =>'Nacionalidad:', 'class' => 'form-control']);
            echo $this->Form->label('nivel_estudios', ['label' =>'Nivel de Estudios:(*)']);
            echo $this->Form->select('nivel_estudios',['Primaria','Secundaria' , 'Bacillerato', 'Diplomado', 'Ingeniero','Ingeniero Técnico','Arquitecto','Arquitecto Técnico','Licenciado','Ciclo Grado Medio','Ciclo Grado Superior'],
                                        ['empty' => '(Elige una)','class' => 'form-control']);
            echo $this->Form->input('estud_cursa', ['label' =>'Estudios que cursa actualmente:', 'class' => 'form-control']);
            echo $this->Form->input('centro_estud', ['label' =>'Centro de estudios en el que cursa:', 'class' => 'form-control']);
            echo $this->Form->input('idiomas', ['label' =>'Idiomas que habla:', 'class' => 'form-control']);
            echo $this->Form->input('estud_reali', ['label' =>'Estudios realizados:', 'class' => 'form-control']);
            echo $this->Form->input('centro_estud_reali', ['label' =>'Centros en el que realizó los estudios:', 'class' => 'form-control']);
            echo $this->Form->input('profesion', ['label' =>'Profesión Actual:(*)', 'class' => 'form-control']);
            echo $this->Form->input('lugar_trabajo', ['label' =>'Lugar de trabajo:(*)', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
