<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TitulacionFixture
 *
 */
class TitulacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'titulacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Codigo_titulacion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nombre' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Plan' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Codigo_titulacion'], 'length' => []],
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
            'Codigo_titulacion' => '2c773e69-e030-463e-8ee9-bbc52e6fbf5a',
            'Nombre' => 'Lorem ipsum dolor sit amet',
            'Plan' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
