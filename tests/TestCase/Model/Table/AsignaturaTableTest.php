<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsignaturaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsignaturaTable Test Case
 */
class AsignaturaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsignaturaTable
     */
    public $Asignatura;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asignatura',
        'app.profesor',
        'app.profesor_asignatura'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Asignatura') ? [] : ['className' => 'App\Model\Table\AsignaturaTable'];
        $this->Asignatura = TableRegistry::get('Asignatura', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Asignatura);

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
