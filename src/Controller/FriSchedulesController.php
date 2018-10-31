<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FriSchedules Controller
 *
 * @property \App\Model\Table\FriSchedulesTable $FriSchedules
 *
 * @method \App\Model\Entity\FriSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FriSchedulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'Users', 'Jobs']
        ];
        $friSchedules = $this->paginate($this->FriSchedules);

        $this->set(compact('friSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Fri Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $friSchedule = $this->FriSchedules->get($id, [
            'contain' => ['Employers', 'Users', 'Jobs', 'FriTimeslots']
        ]);

        $this->set('friSchedule', $friSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $friSchedule = $this->FriSchedules->newEntity();
        if ($this->request->is('post')) {
            $friSchedule = $this->FriSchedules->patchEntity($friSchedule, $this->request->getData());
            if ($this->FriSchedules->save($friSchedule)) {
                $this->Flash->success(__('The fri schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri schedule could not be saved. Please, try again.'));
        }
        $employers = $this->FriSchedules->Employers->find('list', ['limit' => 200]);
        $users = $this->FriSchedules->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriSchedules->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friSchedule', 'employers', 'users', 'jobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fri Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $friSchedule = $this->FriSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $friSchedule = $this->FriSchedules->patchEntity($friSchedule, $this->request->getData());
            if ($this->FriSchedules->save($friSchedule)) {
                $this->Flash->success(__('The fri schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fri schedule could not be saved. Please, try again.'));
        }
        $employers = $this->FriSchedules->Employers->find('list', ['limit' => 200]);
        $users = $this->FriSchedules->Users->find('list', ['limit' => 200]);
        $jobs = $this->FriSchedules->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('friSchedule', 'employers', 'users', 'jobs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fri Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $friSchedule = $this->FriSchedules->get($id);
        if ($this->FriSchedules->delete($friSchedule)) {
            $this->Flash->success(__('The fri schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The fri schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
