<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserGroups', 'Employers']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * Candidates method
     *
     * @return \Cake\Http\Response|void
     */
    public function candidates()
    {
        $this->paginate = [
            'contain' => ['UserGroups', 'Employers'],
            'conditions' => ['Users.can_num IS NOT' => null]
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['UserGroups', 'Employers', 'Groups', 'Activity', 'Announcements', 'FavCandidates', 'Favorites', 'Fees', 'FriSchedules', 'FriTimeslots', 'Jobs', 'LoginTokens', 'Messages', 'MyFiles', 'Packages', 'Posts', 'SatSchedules', 'SatTimeslots', 'ScheduledEmailRecipients', 'Transactions', 'UserActivities', 'UserContacts', 'UserDetails', 'UserEmailRecipients', 'UserEmailSignatures', 'UserEmailTemplates', 'UserSocials']
        ]);

        $this->set('user', $user);
    }

    /**
     * Candidate view method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function application($id = null)
    {
        $id = $_POST['id'];
        $user = $this->Users->get($id, [
            'contain' => ['UserGroups', 'Employers', 'Groups', 'Activity', 'Announcements', 'FavCandidates', 'Favorites', 'Fees', 'FriSchedules', 'FriTimeslots', 'Jobs', 'LoginTokens', 'Messages', 'MyFiles', 'Packages', 'Posts', 'SatSchedules', 'SatTimeslots', 'ScheduledEmailRecipients', 'Transactions', 'UserActivities', 'UserContacts', 'UserDetails', 'UserEmailRecipients', 'UserEmailSignatures', 'UserEmailTemplates', 'UserSocials']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $userGroups = $this->Users->UserGroups->find('list', ['limit' => 200]);
        $employers = $this->Users->Employers->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userGroups', 'employers', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $userGroups = $this->Users->UserGroups->find('list', ['limit' => 200]);
        $employers = $this->Users->Employers->find('list', ['limit' => 200]);
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userGroups', 'employers', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
