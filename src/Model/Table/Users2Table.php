<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users2 Model
 *
 * @property \App\Model\Table\UserGroupsTable|\Cake\ORM\Association\BelongsTo $UserGroups
 * @property \App\Model\Table\EmployersTable|\Cake\ORM\Association\BelongsTo $Employers
 *
 * @method \App\Model\Entity\Users2 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Users2 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Users2[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Users2|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Users2|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Users2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Users2[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Users2 findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Users2Table extends Table
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

        $this->setTable('users2');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserGroups', [
            'foreignKey' => 'user_group_id'
        ]);
        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 100)
            ->allowEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmpty('password');

        $validator
            ->integer('spe_num')
            ->allowEmpty('spe_num');

        $validator
            ->scalar('salt')
            ->maxLength('salt', 100)
            ->allowEmpty('salt');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->allowEmpty('last_name');

        $validator
            ->scalar('active')
            ->maxLength('active', 3)
            ->allowEmpty('active');

        $validator
            ->integer('email_verified')
            ->requirePresence('email_verified', 'create')
            ->notEmpty('email_verified');

        $validator
            ->boolean('edit_sch')
            ->allowEmpty('edit_sch');

        $validator
            ->dateTime('last_login')
            ->allowEmpty('last_login');

        $validator
            ->integer('by_admin')
            ->requirePresence('by_admin', 'create')
            ->notEmpty('by_admin');

        $validator
            ->scalar('ip_address')
            ->maxLength('ip_address', 50)
            ->allowEmpty('ip_address');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_group_id'], 'UserGroups'));
        $rules->add($rules->existsIn(['employer_id'], 'Employers'));

        return $rules;
    }
}
