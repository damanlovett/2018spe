<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uitables Controller
 *
 * @property \App\Model\Table\UitablesTable $Uitables
 *
 * @method \App\Model\Entity\Uitable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UitablesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $uitables = $this->paginate($this->Uitables);

        $this->set(compact('uitables'));
    }

    /**
     * View method
     *
     * @param string|null $id Uitable id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uitable = $this->Uitables->get($id, [
            'contain' => []
        ]);

        $this->set('uitable', $uitable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uitable = $this->Uitables->newEntity();
        if ($this->request->is('post')) {
            $uitable = $this->Uitables->patchEntity($uitable, $this->request->getData());
            if ($this->Uitables->save($uitable)) {
                $this->Flash->success(__('The uitable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uitable could not be saved. Please, try again.'));
        }
        $this->set(compact('uitable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Uitable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uitable = $this->Uitables->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uitable = $this->Uitables->patchEntity($uitable, $this->request->getData());
            if ($this->Uitables->save($uitable)) {
                $this->Flash->success(__('The uitable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uitable could not be saved. Please, try again.'));
        }
        $this->set(compact('uitable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Uitable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uitable = $this->Uitables->get($id);
        if ($this->Uitables->delete($uitable)) {
            $this->Flash->success(__('The uitable has been deleted.'));
        } else {
            $this->Flash->error(__('The uitable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
