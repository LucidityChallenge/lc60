<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dreams Controller
 *
 * @property \App\Model\Table\DreamsTable $Dreams
 *
 * @method \App\Model\Entity\Dream[] paginate($object = null, array $settings = [])
 */
class DreamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Participants']
        ];
        $dreams = $this->paginate($this->Dreams);

        $this->set(compact('dreams'));
        $this->set('_serialize', ['dreams']);
    }

    /**
     * View method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dream = $this->Dreams->get($id, [
            'contain' => ['Participants', 'DreamWithType', 'SubtaskDreamSuperName', 'SubtaskDreams', 'SuccessfulSubtask', 'SuccessfulSubtaskDividendScores', 'SuccessfulSubtaskTask', 'SuccessfulSubtaskTaskWithCalculatedScoring']
        ]);

        $this->set('dream', $dream);
        $this->set('_serialize', ['dream']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dream = $this->Dreams->newEntity();
        if ($this->request->is('post')) {
            $dream = $this->Dreams->patchEntity($dream, $this->request->getData());
            if ($this->Dreams->save($dream)) {
                $this->Flash->success(__('The dream '.($dream->id).' has been saved.'));

                return $this->redirect(['controller' => 'SubtaskDreams', 'action' => 'add',($dream->id)]);
            }
            $this->Flash->error(__('The dream could not be saved. Please, try again.'));
        }
        $participants = $this->Dreams->Participants->find('list', ['limit' => 200]);
        $this->set(compact('dream', 'participants'));
        $this->set('_serialize', ['dream']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dream = $this->Dreams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dream = $this->Dreams->patchEntity($dream, $this->request->getData());
            if ($this->Dreams->save($dream)) {
                $this->Flash->success(__('The dream has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream could not be saved. Please, try again.'));
        }
        $participants = $this->Dreams->Participants->find('list', ['limit' => 200]);
        $this->set(compact('dream', 'participants'));
        $this->set('_serialize', ['dream']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dream id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dream = $this->Dreams->get($id);
        if ($this->Dreams->delete($dream)) {
            $this->Flash->success(__('The dream has been deleted.'));
        } else {
            $this->Flash->error(__('The dream could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
