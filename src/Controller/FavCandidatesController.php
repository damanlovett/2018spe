<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FavCandidates Controller
 *
 * @property \App\Model\Table\FavCandidatesTable $FavCandidates
 *
 * @method \App\Model\Entity\FavCandidate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FavCandidatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Employers']
        ];
        $favCandidates = $this->paginate($this->FavCandidates);

        $this->set(compact('favCandidates'));
    }

    /**
     * View method
     *
     * @param string|null $id Fav Candidate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $favCandidate = $this->FavCandidates->get($id, [
            'contain' => ['Users', 'Employers']
        ]);

        $this->set('favCandidate', $favCandidate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $favCandidate = $this->FavCandidates->newEntity();
        if ($this->request->is('post')) {
            $favCandidate = $this->FavCandidates->patchEntity($favCandidate, $this->request->getData());
            if ($this->FavCandidates->save($favCandidate)) {
                $this->Flash->success(__('The fav candidate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fav candidate could not be saved. Please, try again.'));
        }
        $users = $this->FavCandidates->Users->find('list', ['limit' => 200]);
        $employers = $this->FavCandidates->Employers->find('list', ['limit' => 200]);
        $this->set(compact('favCandidate', 'users', 'employers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fav Candidate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $favCandidate = $this->FavCandidates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $favCandidate = $this->FavCandidates->patchEntity($favCandidate, $this->request->getData());
            if ($this->FavCandidates->save($favCandidate)) {
                $this->Flash->success(__('The fav candidate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fav candidate could not be saved. Please, try again.'));
        }
        $users = $this->FavCandidates->Users->find('list', ['limit' => 200]);
        $employers = $this->FavCandidates->Employers->find('list', ['limit' => 200]);
        $this->set(compact('favCandidate', 'users', 'employers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fav Candidate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $favCandidate = $this->FavCandidates->get($id);
        if ($this->FavCandidates->delete($favCandidate)) {
            $this->Flash->success(__('The fav candidate has been deleted.'));
        } else {
            $this->Flash->error(__('The fav candidate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
