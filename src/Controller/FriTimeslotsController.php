<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FriTimeslots Controller
 *
 * @property \App\Model\Table\FriTimeslotsTable $FriTimeslots
 *
 * @method \App\Model\Entity\FriTimeslot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FriTimeslotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs']
        ];
        $friTimeslots = $this->paginate($this->FriTimeslots);

        $this->set(compact('friTimeslots'));
    }

    /**
     * Candidate Interview method
     *
     * @return \Cake\Http\Response|void
     */
    public function interviews()
    {
        // TODO add during production $id = $this->UserAuth->getUserId();
        $id = 2;
        $this->paginate = [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs'],
            'conditions' => ['FriTimeslots.user_id' => $id]
        ];
        $friTimeslots =
            $friTimeslots = $this->paginate($this->FriTimeslots);

        $this->set(compact('friTimeslots'));
    }

    /**
     * Employer Interview method
     *
     * @return \Cake\Http\Response|void
     */
    public function einterviews($id = null)
    {
        // TODO add during production $id = EmployerID
        $id = 2;
        $this->paginate = [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs'],
            'conditions' => ['FriTimeslots.employer_id' => $id]
        ];
        $friTimeslots =
            $friTimeslots = $this->paginate($this->FriTimeslots);

        $this->set(compact('friTimeslots'));
    }

    /**
     * View method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $friTimeslot = $this->FriTimeslots->get($id, [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs']
        ]);

        $this->set('friTimeslot', $friTimeslot);
    }

    /**
     * Candidate view method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function cview($id = null)
    {
        $friTimeslot = $this->FriTimeslots->get($id, [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs']
        ]);

        $this->set('friTimeslot', $friTimeslot);
    }

    /**
     * Employer view method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eview($id = null)
    {
        $friTimeslot = $this->FriTimeslots->get($id, [
            'contain' => ['Employers', 'FriSchedules', 'Users', 'Jobs']
        ]);

        $this->set('friTimeslot', $friTimeslot);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $friTimeslot = $this->FriTimeslots->newEntity();
        if ($this->request->is('post')) {
            $friTimeslot = $this->FriTimeslots->patchEntity($friTimeslot, $this->request->getData());
            if ($this->FriTimeslots->save($friTimeslot)) {
                $this->Flash->success(__('The fri timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->FriTimeslots->Employers->find('list', ['limit' => 200]);
        $friSchedules = $this->FriTimeslots->FriSchedules->find('list', ['limit' => 200]);
        $users = $this->FriTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friTimeslot', 'employers', 'friSchedules', 'users', 'jobs'));
    }

    /**
     * Employer add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function eadd()
    {
        $friTimeslot = $this->FriTimeslots->newEntity();
        if ($this->request->is('post')) {
            $friTimeslot = $this->FriTimeslots->patchEntity($friTimeslot, $this->request->getData());
            if ($this->FriTimeslots->save($friTimeslot)) {
                $this->Flash->success(__('The fri timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->FriTimeslots->Employers->find('list', ['limit' => 200]);
        $friSchedules = $this->FriTimeslots->FriSchedules->find('list', ['limit' => 200]);
        $users = $this->FriTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friTimeslot', 'employers', 'friSchedules', 'users', 'jobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $friTimeslot = $this->FriTimeslots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $friTimeslot = $this->FriTimeslots->patchEntity($friTimeslot, $this->request->getData());
            if ($this->FriTimeslots->save($friTimeslot)) {
                $this->Flash->success(__('The fri timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->FriTimeslots->Employers->find('list', ['limit' => 200]);
        $friSchedules = $this->FriTimeslots->FriSchedules->find('list', ['limit' => 200]);
        $users = $this->FriTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friTimeslot', 'employers', 'friSchedules', 'users', 'jobs'));
    }

    /**
     * Employer edit method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function eedit($id = null)
    {
        $friTimeslot = $this->FriTimeslots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $friTimeslot = $this->FriTimeslots->patchEntity($friTimeslot, $this->request->getData());
            if ($this->FriTimeslots->save($friTimeslot)) {
                $this->Flash->success(__('The fri timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->FriTimeslots->Employers->find('list', ['limit' => 200]);
        $friSchedules = $this->FriTimeslots->FriSchedules->find('list', ['limit' => 200]);
        $users = $this->FriTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friTimeslot', 'employers', 'friSchedules', 'users', 'jobs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fri Timeslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $friTimeslot = $this->FriTimeslots->get($id);
        if ($this->FriTimeslots->delete($friTimeslot)) {
            $this->Flash->success(__('The fri timeslot has been deleted.'));
        } else {
            $this->Flash->error(__('The fri timeslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
