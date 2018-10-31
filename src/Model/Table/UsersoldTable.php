<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usersold Model
 *
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\Usersold get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usersold newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usersold[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usersold|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usersold|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usersold patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usersold[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usersold findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersoldTable extends Table
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

        $this->setTable('usersold');
        $this->setDisplayField('name');
        $this->setPrimaryKey('can_num');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
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
            ->scalar('id')
            ->maxLength('id', 36)
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->integer('can_num')
            ->allowEmpty('can_num', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->allowEmpty('last_name');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmpty('name');

        $validator
            ->scalar('username')
            ->maxLength('username', 100)
            ->allowEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->allowEmpty('password');

        $validator
            ->scalar('address')
            ->maxLength('address', 4294967295)
            ->allowEmpty('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmpty('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 100)
            ->allowEmpty('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 100)
            ->allowEmpty('zip');

        $validator
            ->scalar('institution')
            ->maxLength('institution', 100)
            ->allowEmpty('institution');

        $validator
            ->scalar('degree')
            ->maxLength('degree', 100)
            ->allowEmpty('degree');

        $validator
            ->scalar('website')
            ->maxLength('website', 4294967295)
            ->allowEmpty('website');

        $validator
            ->scalar('employer_ids')
            ->maxLength('employer_ids', 36)
            ->allowEmpty('employer_ids');

        $validator
            ->scalar('access')
            ->maxLength('access', 11)
            ->allowEmpty('access');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('active')
            ->allowEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
