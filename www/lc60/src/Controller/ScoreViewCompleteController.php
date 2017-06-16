<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ScoreViewComplete Controller
 *
 * @property \App\Model\Table\ScoreViewCompleteTable $ScoreViewComplete
 *
 * @method \App\Model\Entity\ScoreViewComplete[] paginate($object = null, array $settings = [])
 */
class ScoreViewCompleteController extends AppController
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
        $scoreViewComplete = $this->paginate($this->ScoreViewComplete);

        $this->set(compact('scoreViewComplete'));
        $this->set('_serialize', ['scoreViewComplete']);
    }

    /**
     * View method
     *
     * @param string|null $id Score View Complete id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scoreViewComplete = $this->ScoreViewComplete->get($id, [
            'contain' => ['Participants']
        ]);

        $this->set('scoreViewComplete', $scoreViewComplete);
        $this->set('_serialize', ['scoreViewComplete']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scoreViewComplete = $this->ScoreViewComplete->newEntity();
        if ($this->request->is('post')) {
            $scoreViewComplete = $this->ScoreViewComplete->patchEntity($scoreViewComplete, $this->request->getData());
            if ($this->ScoreViewComplete->save($scoreViewComplete)) {
                $this->Flash->success(__('The score view complete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score view complete could not be saved. Please, try again.'));
        }
        $participants = $this->ScoreViewComplete->Participants->find('list', ['limit' => 200]);
        $this->set(compact('scoreViewComplete', 'participants'));
        $this->set('_serialize', ['scoreViewComplete']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Score View Complete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scoreViewComplete = $this->ScoreViewComplete->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scoreViewComplete = $this->ScoreViewComplete->patchEntity($scoreViewComplete, $this->request->getData());
            if ($this->ScoreViewComplete->save($scoreViewComplete)) {
                $this->Flash->success(__('The score view complete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score view complete could not be saved. Please, try again.'));
        }
        $participants = $this->ScoreViewComplete->Participants->find('list', ['limit' => 200]);
        $this->set(compact('scoreViewComplete', 'participants'));
        $this->set('_serialize', ['scoreViewComplete']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Score View Complete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scoreViewComplete = $this->ScoreViewComplete->get($id);
        if ($this->ScoreViewComplete->delete($scoreViewComplete)) {
            $this->Flash->success(__('The score view complete has been deleted.'));
        } else {
            $this->Flash->error(__('The score view complete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
