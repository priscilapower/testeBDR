<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TarefaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TarefaTable Test Case
 */
class TarefaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TarefaTable
     */
    public $Tarefa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tarefa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tarefa') ? [] : ['className' => TarefaTable::class];
        $this->Tarefa = TableRegistry::getTableLocator()->get('Tarefa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tarefa);

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
