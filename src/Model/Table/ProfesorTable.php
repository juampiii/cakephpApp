<?php
namespace App\Model\Table;

use App\Model\Entity\Profesor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesor Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Asignatura
 */
class ProfesorTable extends Table
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

        $this->table('profesor');
        $this->displayField('DNI');
        $this->primaryKey('DNI');

        $this->belongsToMany('Asignatura', [
            'foreignKey' => 'profesor_id',
            'targetForeignKey' => 'asignatura_id',
            'joinTable' => 'profesor_asignatura'
        ]);
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
            ->allowEmpty('DNI', 'create');

        $validator
            ->allowEmpty('Nombre');

        $validator
            ->allowEmpty('Apellidos');

        $validator
            ->allowEmpty('Codigo_CV');

        $validator
            ->allowEmpty('Dirección');

        $validator
            ->allowEmpty('Teléfono');

        return $validator;
    }
}
