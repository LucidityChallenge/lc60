<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubtaskSpecials Controller
 *
 * @property \App\Model\Table\SubtaskSpecialsTable $SubtaskSpecials
 *
 * @method \App\Model\Entity\SubtaskSpecial[] paginate($object = null, array $settings = [])
 */
class SubtaskSpecialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $subtaskSpecials = $this->paginate($this->SubtaskSpecials);

        $this->set(compact('subtaskSpecials'));
        $this->set('_serialize', ['subtaskSpecials']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Special id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskSpecial = $this->SubtaskSpecials->get($id, [
            'contain' => []
        ]);

        $this->set('subtaskSpecial', $subtaskSpecial);
        $this->set('_serialize', ['subtaskSpecial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtaskSpecial = $this->SubtaskSpecials->newEntity();
        if ($this->request->is('post')) {
            $subtaskSpecial = $this->SubtaskSpecials->patchEntity($subtaskSpecial, $this->request->getData());
            if ($this->SubtaskSpecials->save($subtaskSpecial)) {
                $this->Flash->success(__('The subtask special has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask special could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskSpecial'));
        $this->set('_serialize', ['subtaskSpecial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Special id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskSpecial = $this->SubtaskSpecials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskSpecial = $this->SubtaskSpecials->patchEntity($subtaskSpecial, $this->request->getData());
            if ($this->SubtaskSpecials->save($subtaskSpecial)) {
                $this->Flash->success(__('The subtask special has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask special could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskSpecial'));
        $this->set('_serialize', ['subtaskSpecial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Special id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskSpecial = $this->SubtaskSpecials->get($id);
        if ($this->SubtaskSpecials->delete($subtaskSpecial)) {
            $this->Flash->success(__('The subtask special has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask special could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
