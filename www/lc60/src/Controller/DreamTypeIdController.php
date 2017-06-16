<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DreamTypeId Controller
 *
 * @property \App\Model\Table\DreamTypeIdTable $DreamTypeId
 *
 * @method \App\Model\Entity\DreamTypeId[] paginate($object = null, array $settings = [])
 */
class DreamTypeIdController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Dreams', 'DreamTypes']
        ];
        $dreamTypeId = $this->paginate($this->DreamTypeId);

        $this->set(compact('dreamTypeId'));
        $this->set('_serialize', ['dreamTypeId']);
    }

    /**
     * View method
     *
     * @param string|null $id Dream Type Id id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dreamTypeId = $this->DreamTypeId->get($id, [
            'contain' => ['Dreams', 'DreamTypes']
        ]);

        $this->set('dreamTypeId', $dreamTypeId);
        $this->set('_serialize', ['dreamTypeId']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dreamTypeId = $this->DreamTypeId->newEntity();
        if ($this->request->is('post')) {
            $dreamTypeId = $this->DreamTypeId->patchEntity($dreamTypeId, $this->request->getData());
            if ($this->DreamTypeId->save($dreamTypeId)) {
                $this->Flash->success(__('The dream type id has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream type id could not be saved. Please, try again.'));
        }
        $dreams = $this->DreamTypeId->Dreams->find('list', ['limit' => 200]);
        $dreamTypes = $this->DreamTypeId->DreamTypes->find('list', ['limit' => 200]);
        $this->set(compact('dreamTypeId', 'dreams', 'dreamTypes'));
        $this->set('_serialize', ['dreamTypeId']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dream Type Id id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dreamTypeId = $this->DreamTypeId->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dreamTypeId = $this->DreamTypeId->patchEntity($dreamTypeId, $this->request->getData());
            if ($this->DreamTypeId->save($dreamTypeId)) {
                $this->Flash->success(__('The dream type id has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream type id could not be saved. Please, try again.'));
        }
        $dreams = $this->DreamTypeId->Dreams->find('list', ['limit' => 200]);
        $dreamTypes = $this->DreamTypeId->DreamTypes->find('list', ['limit' => 200]);
        $this->set(compact('dreamTypeId', 'dreams', 'dreamTypes'));
        $this->set('_serialize', ['dreamTypeId']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dream Type Id id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dreamTypeId = $this->DreamTypeId->get($id);
        if ($this->DreamTypeId->delete($dreamTypeId)) {
            $this->Flash->success(__('The dream type id has been deleted.'));
        } else {
            $this->Flash->error(__('The dream type id could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
