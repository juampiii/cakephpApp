<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsignaturaFixture
 *
 */
class AsignaturaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asignatura';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Codigo_asignatura' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'TitulacionCodigo_titulacion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nombre' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Creditos_ECTS' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'se_compone' => ['type' => 'index', 'columns' => ['TitulacionCodigo_titulacion'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Codigo_asignatura'], 'length' => []],
            'se_compone' => ['type' => 'foreign', 'columns' => ['TitulacionCodigo_titulacion'], 'references' => ['titulacion', 'Codigo_titulacion'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Codigo_asignatura' => 'a2dc5e5a-88de-45dc-ad95-bfcd06901abf',
            'TitulacionCodigo_titulacion' => 'Lorem ipsum dolor sit amet',
            'Nombre' => 'Lorem ipsum dolor sit amet',
            'Creditos_ECTS' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
