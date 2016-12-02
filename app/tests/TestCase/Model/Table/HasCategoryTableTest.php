<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HasCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HasCategoryTable Test Case
 */
class HasCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HasCategoryTable
     */
    public $HasCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.has_category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HasCategory') ? [] : ['className' => 'App\Model\Table\HasCategoryTable'];
        $this->HasCategory = TableRegistry::get('HasCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HasCategory);

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
