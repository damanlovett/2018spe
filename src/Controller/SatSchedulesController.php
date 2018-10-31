<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SatSchedules Controller
 *
 * @property \App\Model\Table\SatSchedulesTable $SatSchedules
 *
 * @method \App\Model\Entity\SatSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SatSchedulesController extends AppController
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
        $satSchedules = $this->paginate($this->SatSchedules);

        $this->set(compact('satSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Sat Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $satSchedule = $this->SatSchedules->get($id, [
            'contain' => ['Employers', 'Users', 'Jobs', 'SatTimeslots']
        ]);

        $this->set('satSchedule', $satSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $satSchedule = $this->SatSchedules->newEntity();
        if ($this->request->is('post')) {
            $satSchedule = $this->SatSchedules->patchEntity($satSchedule, $this->request->getData());
            if ($this->SatSchedules->save($satSchedule)) {
                $this->Flash->success(__('The sat schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat schedule could not be saved. Please, try again.'));
        }
        $employers = $this->SatSchedules->Employers->find('list', ['limit' => 200]);
        $users = $this->SatSchedules->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatSchedules->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satSchedule', 'employers', 'users', 'jobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sat Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $satSchedule = $this->SatSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $satSchedule = $this->SatSchedules->patchEntity($satSchedule, $this->request->getData());
            if ($this->SatSchedules->save($satSchedule)) {
                $this->Flash->success(__('The sat schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sat schedule could not be saved. Please, try again.'));
        }
        $employers = $this->SatSchedules->Employers->find('list', ['limit' => 200]);
        $users = $this->SatSchedules->Users->find('list', ['limit' => 200]);
        $jobs = $this->SatSchedules->Jobs->find('list', ['limit' => 200]);
        $this->set(compact('satSchedule', 'employers', 'users', 'jobs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sat Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $satSchedule = $this->SatSchedules->get($id);
        if ($this->SatSchedules->delete($satSchedule)) {
            $this->Flash->success(__('The sat schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The sat schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
