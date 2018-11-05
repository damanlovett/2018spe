<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employers Model
 *
 * @property \App\Model\Table\AnnouncementsTable|\Cake\ORM\Association\HasMany $Announcements
 * @property \App\Model\Table\FavCandidatesTable|\Cake\ORM\Association\HasMany $FavCandidates
 * @property \App\Model\Table\FriSchedulesTable|\Cake\ORM\Association\HasMany $FriSchedules
 * @property \App\Model\Table\FriTimeslotsTable|\Cake\ORM\Association\HasMany $FriTimeslots
 * @property \App\Model\Table\JobsTable|\Cake\ORM\Association\HasMany $Jobs
 * @property \App\Model\Table\MessagesTable|\Cake\ORM\Association\HasMany $Messages
 * @property \App\Model\Table\PackagesTable|\Cake\ORM\Association\HasMany $Packages
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\HasMany $Positions
 * @property \App\Model\Table\PostsTable|\Cake\ORM\Association\HasMany $Posts
 * @property \App\Model\Table\SatSchedulesTable|\Cake\ORM\Association\HasMany $SatSchedules
 * @property \App\Model\Table\SatTimeslotsTable|\Cake\ORM\Association\HasMany $SatTimeslots
 * @property \App\Model\Table\TransactionsTable|\Cake\ORM\Association\HasMany $Transactions
 * @property |\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\Users2Table|\Cake\ORM\Association\HasMany $Users2
 *
 * @method \App\Model\Entity\Employer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployersTable extends Table
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

        $this->setTable('employers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Announcements', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('FavCandidates', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('FriSchedules', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('FriTimeslots', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Packages', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Positions', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Posts', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('SatSchedules', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('SatTimeslots', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'employer_id'
        ]);
        $this->hasMany('Users2', [
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
            ->integer('emp_num')
            ->allowEmpty('emp_num');

        $validator
            ->scalar('institution')
            ->maxLength('institution', 100)
            ->allowEmpty('institution');

        $validator
            ->integer('interviewers')
            ->allowEmpty('interviewers');

        $validator
            ->integer('positions')
            ->allowEmpty('positions');

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
            ->scalar('website')
            ->maxLength('website', 100)
            ->allowEmpty('website');

        $validator
            ->integer('active')
            ->allowEmpty('active');

        return $validator;
    }
}
