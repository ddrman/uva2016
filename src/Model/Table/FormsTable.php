<?php
namespace App\Model\Table;

use App\Model\Entity\Form;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forms Model
 *
 */
class FormsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('forms');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellidos', 'create')
            ->notEmpty('apellidos');

        $validator
            ->integer('tipo_doc')
            ->requirePresence('tipo_doc', 'create')
            ->notEmpty('tipo_doc');

        $validator
            ->requirePresence('doc', 'create')
            ->notEmpty('doc')
            ->add('doc', [
                    'length' => [
                        'rule' => ['minLength', 9],
                        'message' => 'Necesita mínimo 9 caracteres',
                    ],
                    'maxLength' => [
                        'rule' => ['maxLength', 9],
                        'message' => 'No puede tener más de 9 caracteres'
                    ]
                ]);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('telefonomov')
            ->requirePresence('telefonomov', 'create')
            ->notEmpty('telefonomov');

        $validator
            ->integer('telefonofij')
            ->allowEmpty('telefonofij');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->requirePresence('localidad', 'create')
            ->notEmpty('localidad');

        $validator
            ->integer('cod_postal')
            ->requirePresence('cod_postal', 'create')
            ->notEmpty('cod_postal');

        $validator
            ->allowEmpty('nacionalidad');

        $validator
            ->requirePresence('nivel_estudios', 'create')
            ->notEmpty('nivel_estudios');

        $validator
            ->allowEmpty('estud_cursa');

        $validator
            ->allowEmpty('centro_estud');

        $validator
            ->allowEmpty('idiomas');

        $validator
            ->allowEmpty('estud_reali');

        $validator
            ->allowEmpty('centro_estud_reali');

        $validator
            ->requirePresence('profesion', 'create')
            ->notEmpty('profesion');

        $validator
            ->requirePresence('lugar_trabajo', 'create')
            ->notEmpty('lugar_trabajo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['doc']));
        return $rules;
    }
}
