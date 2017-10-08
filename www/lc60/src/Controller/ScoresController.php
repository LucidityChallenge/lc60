<?php
namespace App\Controller;

use App\Controller\RssController;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Routing\Router;
use App\Model\Entity\Score;

/**
 * Scores Controller
 *
 * @property \App\Model\Table\ScoresTable $Scores
 *
 * @method \App\Model\Entity\Score[] paginate($object = null, array $settings = [])
 */
class ScoresController extends RssController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [//'Participants'
            ]
        ];
        $scores = $this->paginate($this->Scores);
        
        foreach ($scores as $score)
        {
	  $this->positionName($score);
        }

        $this->set(compact('scores'));
        $this->set('_serialize', ['scores']);
    }
    
    
    /**
     * Index method
     *
     * @return null
     */
    public function positionName(Score $score)
    {
	  $mod = $score->position % 10;	  
	  
	  if (($mod >= 4) || (($score->position >= 11) && ($score->position <= 13)))
	  {
	    $score->position_name = 'th';
	  }
	  else
	  {
	    switch ($mod)
	    {
	    case 1:
	    {
	      $score->position_name = 'st';
	      break;
	    }
	    case 2:
	    {
	      $score->position_name = 'nd';
	      break;
	    }
	    case 3:
	    {
	      $score->position_name = 'rd';
	      break;
	    }
	    default:
	    {
	      $score->position_name = 'th';
	    }
	    }
	  }
    }
    

    /**
     * View method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $score = $this->Scores->get($id, [
            'contain' => [//'Participants'
            ]
        ]);

        $this->set('score', $score);
        $this->set('_serialize', ['score']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $score = $this->Scores->newEntity();
        if ($this->request->is('post')) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $participants = $this->Scores->Participants->find('list', ['limit' => 200]);
        $this->set(compact('score', 'participants'));
        $this->set('_serialize', ['score']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $score = $this->Scores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $participants = $this->Scores->Participants->find('list', ['limit' => 200]);
        $this->set(compact('score', 'participants'));
        $this->set('_serialize', ['score']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $score = $this->Scores->get($id);
        if ($this->Scores->delete($score)) {
            $this->Flash->success(__('The score has been deleted.'));
        } else {
            $this->Flash->error(__('The score could not be deleted. Please, try again.'));
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
      $title= 'LC60Sc';
      $description= 'Lucidity Challenge 60 Top Scores';
      $ttl = 1200;

      $rssString = ($this->rssHead($baseUrl,$title,$description,$ttl));

      $queryScores = $this->Scores->find()
	   // ->contain('Participants')
	    ->where(['participant_id <' => '150'])
	    ->order(['total_score' => 'desc'])
	    ->limit(10)
      ;
      
      foreach ($queryScores as $score)
      {     
	$this->positionName($score);
	$itemTitle =  $score->position.$score->position_name. ': '. $score->participant.' ('.$score->total_score.' points)';
	$itemDescription = '';
	$itemUrl = $baseUrl.'participants/view/'.$score->participant_id;
	$permalink = $baseUrl.'participants/view/'.$score->participant_id;
	$publishTime =  date('r');

	$rssString = $rssString.($this->rssItem($itemTitle,$itemDescription,$itemUrl,$permalink,$publishTime));
      }

      $rssString = $rssString.($this->rssTail());

      return $this->rssBody($rssString);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index','view']);
    }
}
