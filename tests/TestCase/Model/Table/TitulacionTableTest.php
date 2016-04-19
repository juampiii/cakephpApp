<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TitulacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TitulacionTable Test Case
 */
class TitulacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TitulacionTable
     */
    public $Titulacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.titulacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Titulacion') ? [] : ['className' => 'App\Model\Table\TitulacionTable'];
        $this->Titulacion = TableRegistry::get('Titulacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Titulacion);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
