<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FriTimeslots Model
 *
 * @property \App\Model\Table\EmployersTable|\Cake\ORM\Association\BelongsTo $Employers
 * @property \App\Model\Table\FriSchedulesTable|\Cake\ORM\Association\BelongsTo $FriSchedules
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\JobsTable|\Cake\ORM\Association\BelongsTo $Jobs
 *
 * @method \App\Model\Entity\FriTimeslot get($primaryKey, $options = [])
 * @method \App\Model\Entity\FriTimeslot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FriTimeslot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FriTimeslot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FriTimeslot|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FriTimeslot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FriTimeslot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FriTimeslot findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FriTimeslotsTable extends Table
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

        $this->setTable('fri_timeslots');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id'
        ]);
        $this->belongsTo('FriSchedules', [
            'foreignKey' => 'fri_schedule_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id'
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
            ->time('start_time')
            ->allowEmpty('start_time');

        $validator
            ->time('end_time')
            ->allowEmpty('end_time');

        $validator
            ->scalar('length')
            ->maxLength('length', 10)
            ->allowEmpty('length');

        $validator
            ->scalar('modified_by')
            ->maxLength('modified_by', 36)
            ->allowEmpty('modified_by');

        $validator
            ->boolean('visible')
            ->allowEmpty('visible');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 4294967295)
            ->allowEmpty('notes');

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
        $rules->add($rules->existsIn(['employer_id'], 'Employers'));
        $rules->add($rules->existsIn(['fri_schedule_id'], 'FriSchedules'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));

        return $rules;
    }
}
