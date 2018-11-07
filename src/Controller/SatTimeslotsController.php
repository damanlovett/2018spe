<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SatTimeslots Controller
 *
 * @property \App\Model\Table\SatTimeslotsTable $SatTimeslots
 *
 * @method \App\Model\Entity\SatTimeslot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SatTimeslotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs']
        ];
        $satTimeslots = $this->paginate($this->SatTimeslots);

        $this->set(compact('satTimeslots'));
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
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs'],
            'conditions' => ['SatTimeslots.user_id' => $id]
        ];
        $satTimeslots =
            $satTimeslots = $this->paginate($this->SatTimeslots);

        $this->set(compact('satTimeslots'));
    }


    /**
     * Employer interview method
     *
     * @return \Cake\Http\Response|void
     */
    public function einterview()
    {
        // TODO add during production $id = EmployerID
        $id = 2;
        $this->paginate = [
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs'],
            'conditions' => ['SatTimeslots.employer_id' => $id]
        ];
        $friTimeslots =
            $friTimeslots = $this->paginate($this->FriTimeslots);

        $this->set(compact('satTimeslots'));
    }

    /**
     * View method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $satTimeslot = $this->SatTimeslots->get($id, [
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs']
        ]);

        $this->set('satTimeslot', $satTimeslot);
    }

    /**
     * Candidate view method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function cview($id = null)
    {
        $satTimeslot = $this->SatTimeslots->get($id, [
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs']
        ]);

        $this->set('satTimeslot', $satTimeslot);
    }

    /**
     * Employer view method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eview($id = null)
    {
        $satTimeslot = $this->SatTimeslots->get($id, [
            'contain' => ['Employers', 'SatSchedules', 'Users', 'Jobs']
        ]);

        $this->set('satTimeslot', $satTimeslot);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $satTimeslot = $this->SatTimeslots->newEntity();
        if ($this->request->is('post')) {
            $satTimeslot = $this->SatTimeslots->patchEntity($satTimeslot, $this->request->getData());
            if ($this->SatTimeslots->save($satTimeslot)) {
                $this->Flash->success(__('The sat timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->SatTimeslots->Employers->find('list', ['limit' => 200]);
        $satSchedules = $this->SatTimeslots->SatSchedules->find('list', ['limit' => 200]);
        $users = $this->SatTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satTimeslot', 'employers', 'satSchedules', 'users', 'jobs'));
    }

    /**
     * Employer add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function eadd()
    {
        $satTimeslot = $this->SatTimeslots->newEntity();
        if ($this->request->is('post')) {
            $satTimeslot = $this->SatTimeslots->patchEntity($satTimeslot, $this->request->getData());
            if ($this->SatTimeslots->save($satTimeslot)) {
                $this->Flash->success(__('The sat timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->SatTimeslots->Employers->find('list', ['limit' => 200]);
        $satSchedules = $this->SatTimeslots->SatSchedules->find('list', ['limit' => 200]);
        $users = $this->SatTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satTimeslot', 'employers', 'satSchedules', 'users', 'jobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $satTimeslot = $this->SatTimeslots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $satTimeslot = $this->SatTimeslots->patchEntity($satTimeslot, $this->request->getData());
            if ($this->SatTimeslots->save($satTimeslot)) {
                $this->Flash->success(__('The sat timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->SatTimeslots->Employers->find('list', ['limit' => 200]);
        $satSchedules = $this->SatTimeslots->SatSchedules->find('list', ['limit' => 200]);
        $users = $this->SatTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satTimeslot', 'employers', 'satSchedules', 'users', 'jobs'));
    }


    /**
     * Employer edit method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function eedit($id = null)
    {
        $satTimeslot = $this->SatTimeslots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $satTimeslot = $this->SatTimeslots->patchEntity($satTimeslot, $this->request->getData());
            if ($this->SatTimeslots->save($satTimeslot)) {
                $this->Flash->success(__('The sat timeslot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat timeslot could not be saved. Please, try again.'));
        }
        $employers = $this->SatTimeslots->Employers->find('list', ['limit' => 200]);
        $satSchedules = $this->SatTimeslots->SatSchedules->find('list', ['limit' => 200]);
        $users = $this->SatTimeslots->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatTimeslots->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satTimeslot', 'employers', 'satSchedules', 'users', 'jobs'));
    }

    /**
     * Remove method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function remove($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $satTimeslot = $this->SatTimeslots->get($id);
        if ($this->SatTimeslots->delete($satTimeslot)) {
            $this->Flash->success(__('The sat timeslot has been deleted.'));
        } else {
            $this->Flash->error(__('The sat timeslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sat Timeslot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $satTimeslot = $this->SatTimeslots->get($id);
        if ($this->SatTimeslots->delete($satTimeslot)) {
            $this->Flash->success(__('The sat timeslot has been deleted.'));
        } else {
            $this->Flash->error(__('The sat timeslot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
