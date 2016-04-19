<?php
namespace App\Model\Table;

use App\Model\Entity\Asignatura;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asignatura Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Profesor
 */
class AsignaturaTable extends Table
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

        $this->table('asignatura');
        $this->displayField('Código_asignatura');
        $this->primaryKey('Código_asignatura');

        $this->belongsToMany('Profesor', [
            'foreignKey' => 'asignatura_id',
            'targetForeignKey' => 'profesor_id',
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
            ->allowEmpty('Codigo_asignatura', 'create');

        $validator
            ->requirePresence('TitulacionCodigo_titulacion', 'create')
            ->notEmpty('TitulacionCodigo_titulacion');

        $validator
            ->allowEmpty('Nombre');

        $validator
            ->allowEmpty('Creditos_ECTS');

        return $validator;
    }
}
