<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class WordsController extends AppController {
    public function initialize() {
        parent::initialize();
    }

    public function index() {
        $words = $this->Words->find();
        $this->set('words', $words);
    }

    public function add() {
        $word = $this->Words->newEntity();
        $tags = $this->Words->Tags->find('list');
        $this->set('word', $word);
        $this->set('tags', $tags);

        if (!$this->request->is('post')) {
            return $this->render();
        }
        $word = $this->Words->patchEntity($word, $this->request->getData());
        if ($this->Words->save($word)) {
            $this->Flash->success(__('Complete.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Warning.'));
    }
}
