<?php
namespace App\Model\Table;

use App\Model\Entity\Titulacion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Titulacion Model
 *
 */
class TitulacionTable extends Table
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

        $this->table('titulacion');
        $this->displayField('Codigo_titulacion');
        $this->primaryKey('Codigo_titulacion');
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
            ->allowEmpty('Codigo_titulacion', 'create');

        $validator
            ->allowEmpty('Nombre');

        $validator
            ->allowEmpty('Plan');

        return $validator;
    }
}
