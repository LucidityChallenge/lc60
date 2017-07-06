<?php
namespace App\Controller;

use App\Controller\RssController;
use Cake\I18n\Time;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Participants Controller
 *
 * @property \App\Model\Table\ParticipantsTable $Participants
 *
 * @method \App\Model\Entity\Participant[] paginate($object = null, array $settings = [])
 */
class ParticipantsController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $participants = $this->paginate($this->Participants);

        $this->set(compact('participants'));
        $this->set('_serialize', ['participants']);
    }

    /**
     * View method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participant = $this->Participants->get($id, [
            'contain' => ['Dreams', 'Subtasks', 'DreamWithType', 'ScoreViewComplete','SubtaskShareHolderComplete','SuccessfulSubtaskTaskWithCalculatedScoring']
        ]);

        $this->set('participant', $participant);
        $this->set('_serialize', ['participant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participant = $this->Participants->newEntity();
        if ($this->request->is('post')) {
            $participant = $this->Participants->patchEntity($participant, $this->request->getData());
            if ($this->Participants->save($participant)) {
                $this->Flash->success(__('The participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participant could not be saved. Please, try again.'));
        }
        $this->set(compact('participant'));
        $this->set('_serialize', ['participant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participant = $this->Participants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participant = $this->Participants->patchEntity($participant, $this->request->getData());
            if ($this->Participants->save($participant)) {
                $this->Flash->success(__('The participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participant could not be saved. Please, try again.'));
        }
        $this->set(compact('participant'));
        $this->set('_serialize', ['participant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participant = $this->Participants->get($id);
        if ($this->Participants->delete($participant)) {
            $this->Flash->success(__('The participant has been deleted.'));
        } else {
            $this->Flash->error(__('The participant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
      
    /**
     * rss method
     *
     * @return \Cake\Http\Response|null
     */
    public function rss()
    {
      $baseUrl= (Router::url('/', true));
      $title= 'LC60NP';
      $description= 'Lucidity Challenge 60: New Participants';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));
	      
      $queryParticipants = $this->Participants->find()
	    ->where(['Participants.participant_join_timestamp <=' => Time::now()])
	    ->order('Participants.participant_join_timestamp','desc')
	    ->limit(10)
      ;

      foreach ($queryParticipants as $part)
      {
	$itemTitle = $part->participant_name.' has joined LC60.';
	$itemDescription = $part->participant_name.' joined LC60 on '.($part->participant_join_timestamp);
	$itemUrl = $part->participant_join_url;
	$permalink = $baseUrl.'participants/view/'.$part->id;
	$publishTime =  strtotime($part->participant_join_timestamp);

	$rssString = $rssString.($this->rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime));
      }

      $rssString = $rssString.($this->rssTail());

      return $this->rssBody($rssString);
    } 
}
