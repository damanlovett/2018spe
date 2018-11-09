<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employers Controller
 *
 * @property \App\Model\Table\EmployersTable $Employers
 *
 * @method \App\Model\Entity\Employer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'conditions' => ['emp_num IS NOT' => null]
        ];
        $employers = $this->paginate($this->Employers);

        $this->set(compact('employers'));

        //$query = $this->Employers->find()->where(['emp_num' => true]);
        //$this->set('employers', $this->paginate($query));


    }

    /**
     * Manager method
     *
     * @return \Cake\Http\Response|void
     */

    public function manager()
    {
        $employers = $this->paginate($this->Employers);

        $this->set(compact('employers'));
    }

    /**
     * View method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employer = $this->Employers->get($id, [
            'contain' => ['Announcements', 'FavCandidates', 'FriSchedules', 'FriTimeslots', 'Jobs', 'Messages', 'Packages', 'Posts', 'SatSchedules', 'SatTimeslots', 'Transactions', 'Users']
        ]);

        $this->set('employer', $employer);
    }

    /**
     * Manager view method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function mview($id = null)
    {
        $employer = $this->Employers->get($id, [
            'contain' => ['Announcements', 'FavCandidates', 'FriSchedules', 'FriTimeslots', 'Jobs', 'Messages', 'Packages', 'Posts', 'SatSchedules', 'SatTimeslots', 'Transactions', 'Users']
        ]);

        $this->set('employer', $employer);
    }


    /**
     * Employer view method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function account($id = null)
    {
        //TODO Make $id employer_$id not a passed variable
        $id = 1;
        $employer = $this->Employers->get($id, [
            'contain' => ['Announcements', 'FavCandidates', 'FriSchedules', 'FriTimeslots', 'Jobs', 'Messages', 'Packages', 'Posts', 'SatSchedules', 'SatTimeslots', 'Transactions', 'Users']
        ]);

        $this->set('employer', $employer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employer = $this->Employers->newEntity();
        if ($this->request->is('post')) {
            $employer = $this->Employers->patchEntity($employer, $this->request->getData());
            if ($this->Employers->save($employer)) {
                $this->Flash->success(__('The employer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employer could not be saved. Please, try again.'));
        }
        $this->set(compact('employer'));
    }

    /**
     * Manager add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function madd()
    {
        $employer = $this->Employers->newEntity();
        if ($this->request->is('post')) {
            $employer = $this->Employers->patchEntity($employer, $this->request->getData());
            if ($this->Employers->save($employer)) {
                $this->Flash->success(__('The employer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employer could not be saved. Please, try again.'));
        }
        $this->set(compact('employer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employer = $this->Employers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employer = $this->Employers->patchEntity($employer, $this->request->getData());
            if ($this->Employers->save($employer)) {
                $this->Flash->success(__('The employer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employer could not be saved. Please, try again.'));
        }
        $this->set(compact('employer'));
    }

    /**
     * Manager edit method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function medit($id = null)
    {
        $employer = $this->Employers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employer = $this->Employers->patchEntity($employer, $this->request->getData());
            if ($this->Employers->save($employer)) {
                $this->Flash->success(__('The employer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employer could not be saved. Please, try again.'));
        }
        $this->set(compact('employer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employer = $this->Employers->get($id);
        if ($this->Employers->delete($employer)) {
            $this->Flash->success(__('The employer has been deleted.'));
        } else {
            $this->Flash->error(__('The employer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /**
     * Remove method
     *
     * @param string|null $id Employer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function remove($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employer = $this->Employers->get($id);
        if ($this->Employers->delete($employer)) {
            $this->Flash->success(__('The employer has been deleted.'));
        } else {
            $this->Flash->error(__('The employer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
