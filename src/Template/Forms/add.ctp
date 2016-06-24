
<div class="forms form small-7 small-centered columns content">
    <script>
  $(function() {
    $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true  
        });
  });
  </script>

    <?= $this->Form->create($form) ?>
    <form>
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
            $sexo = [
                        [ 'text' => 'HOMBRE', 'value' => '1', 'attr_name' => 'HOMBRE' ],
                        [ 'text' => 'MUJER', 'value' => '2', 'attr_name' => 'MUJER' ],
                    ];

            echo $this->Form->select('Sexo:', $sexo,['class' => 'form-control'] );
            echo $this->Form->input('fecha', ['label' =>'Fecha de Nacimiento:(*)','minYear' => date('Y') - 90, 'format' => 'dd-mm-YYYY',
                ]);

            echo $this->Form->input('telefonomov', ['label' =>'Teléfono Móvil:(*)', 'class' => 'form-control']);
            echo $this->Form->input('telefonofij', ['label' =>'Teléfono Fijo:', 'class' => 'form-control']);
            echo $this->Form->input('direccion', ['label' =>'Dirección:(*)', 'class' => 'form-control']);
            echo $this->Form->input('localidad', ['label' =>'Localidad:(*)', 'class' => 'form-control']);
            echo $this->Form->input('cod_postal', ['label' =>'Código Postal:(*)', 'class' => 'form-control']);
            echo $this->Form->input('nacionalidad', ['label' =>'Nacionalidad:', 'class' => 'form-control']);
            $nivel = [
                        [ 'text' => 'Primaria', 'value' => '1', 'attr_name' => 'Primaria' ],
                        [ 'text' => 'Secundaria', 'value' => '2', 'attr_name' => 'Secundaria' ],
                        [ 'text' => 'Bachillerato', 'value' => '3', 'other_attr_name' => 'Bachillerato' ],
                        [ 'text' => 'Diplomado', 'value' => '3', 'other_attr_name' => 'Diplomado' ],
                        [ 'text' => 'Ingeniero técnico', 'value' => '3', 'other_attr_name' => 'Ingeniero técnico' ],
                        [ 'text' => 'Arquitecto técnico', 'value' => '3', 'other_attr_name' => 'Arquitecto técnico' ],
                        [ 'text' => 'Licenciado', 'value' => '3', 'other_attr_name' => 'Licenciado' ],
                        [ 'text' => 'Ingeniero', 'value' => '3', 'other_attr_name' => 'Ingeniero' ],
                        [ 'text' => 'Arquitecto', 'value' => '3', 'other_attr_name' => 'Arquitecto' ],
                        [ 'text' => 'Doctor', 'value' => '3', 'other_attr_name' => 'Doctor' ],
                        [ 'text' => 'Ciclo Grado Medio', 'value' => '3', 'other_attr_name' => 'Ciclo Grado Medio' ],
                        [ 'text' => 'Ciclo Grado Superior', 'value' => '3', 'other_attr_name' => 'Ciclo Grado Superior' ],

                        ];
            echo $this->Form->label('nivel_estudios', ['label' =>'Nivel de estudios:(*)']);               
            echo $this->Form->select('nivel_estudios', $nivel, ['class' => 'form-control']);
            echo $this->Form->input('estud_cursa', ['label' =>'Estudios que cursa actualmente:', 'class' => 'form-control']);
            echo $this->Form->input('centro_estud', ['label' =>'Centro de estudios en el que cursa:', 'class' => 'form-control']);
            echo $this->Form->input('idiomas', ['label' =>'Idiomas que habla:', 'class' => 'form-control']);
            echo $this->Form->input('estud_reali', ['label' =>'Estudios realizados:', 'class' => 'form-control']);
            echo $this->Form->input('centro_estud_reali', ['label' =>'Centros en el que realizó los estudios:', 'class' => 'form-control']);
            echo $this->Form->input('profesion', ['label' =>'Profesión Actual:(*)', 'class' => 'form-control']);
            echo $this->Form->input('lugar_trabajo', ['label' =>'Lugar de trabajo:(*)', 'class' => 'form-control']);
        ?>
    </form>
    <?= $this->Form->button(__('Enviar'),['class'=>'btn btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
