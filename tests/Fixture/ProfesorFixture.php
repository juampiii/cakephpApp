<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfesorFixture
 *
 */
class ProfesorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'profesor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'DNI' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nombre' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellidos' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Codigo_CV' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Dirección' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Teléfono' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['DNI'], 'length' => []],
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
            'DNI' => '9d4a5dea-d06a-418d-8d28-5d6dd9eb3f07',
            'Nombre' => 'Lorem ipsum dolor sit amet',
            'Apellidos' => 'Lorem ipsum dolor sit amet',
            'Codigo_CV' => 'Lorem ipsum dolor sit amet',
            'Dirección' => 'Lorem ipsum dolor sit amet',
            'Teléfono' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
