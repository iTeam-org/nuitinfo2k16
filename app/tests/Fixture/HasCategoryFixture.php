<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HasCategoryFixture
 *
 */
class HasCategoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'has_category';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_category' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'CERTIFIED_FK_EID' => ['type' => 'index', 'columns' => ['id_category'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'id_category'], 'length' => []],
            'CERTIFIED_FK_EID' => ['type' => 'foreign', 'columns' => ['id_category'], 'references' => ['categories', 'id_category'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'CERTIFIED_FK_AcertifiedID' => ['type' => 'foreign', 'columns' => ['id'], 'references' => ['tickets', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id' => 1,
            'id_category' => 1
        ],
    ];
}
