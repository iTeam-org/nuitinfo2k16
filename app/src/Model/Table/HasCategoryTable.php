<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HasCategory Model
 *
 * @method \App\Model\Entity\HasCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\HasCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HasCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HasCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HasCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HasCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HasCategory findOrCreate($search, callable $callback = null)
 */
class HasCategoryTable extends Table
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

        $this->table('has_category');
        $this->displayField('id');
        $this->primaryKey(['id', 'id_category']);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_category')
            ->allowEmpty('id_category', 'create');

        return $validator;
    }

    public function getClass($id) {
        $query = $this->find()
                ->where(['id' => $id]);
        return $query->category;
    }
}
}
