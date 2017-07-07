<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Memos Controller
 *
 * @property \App\Model\Table\MemosTable $Memos
 *
 * @method \App\Model\Entity\Memo[] paginate($object = null, array $settings = [])
 */
class MemosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $memos = $this->paginate($this->Memos);

        $this->set(compact('memos'));
        $this->set('_serialize', ['memos']);
    }

    /**
     * View method
     *
     * @param string|null $id Memo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $memo = $this->Memos->get($id, [
            'contain' => []
        ]);

        $this->set('memo', $memo);
        $this->set('_serialize', ['memo']);
        
        $memo->memo_unread = 0;
        $this->Memos->save($memo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $memo = $this->Memos->newEntity();
        if ($this->request->is('post')) {
            $memo = $this->Memos->patchEntity($memo, $this->request->getData());
            if ($this->Memos->save($memo)) {
                $this->Flash->success(__('The memo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The memo could not be saved. Please, try again.'));
        }
        $this->set(compact('memo'));
        $this->set('_serialize', ['memo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Memo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $memo = $this->Memos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $memo = $this->Memos->patchEntity($memo, $this->request->getData());
            if ($this->Memos->save($memo)) {
                $this->Flash->success(__('The memo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The memo could not be saved. Please, try again.'));
        }
        $this->set(compact('memo'));
        $this->set('_serialize', ['memo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Memo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $memo = $this->Memos->get($id);
        if ($this->Memos->delete($memo)) {
            $this->Flash->success(__('The memo has been deleted.'));
        } else {
            $this->Flash->error(__('The memo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
