<?php

namespace App\Controller;

use Cake\Controller\Controller;

class GrammarTagsController extends AppController {
    public function initialize() {
        parent::initialize();
    }

    public function index() {
        $grammarTags = $this->GrammarTags->find();
        $this->set('grammarTags', $grammarTags);
    }

    public function add() {
        $grammarTag = $this->GrammarTags->newEntity();
        $this->set('grammarTag', $grammarTag);

        if (!$this->request->is('post')) {
            return $this->render();
        }
        $grammarTag = $this->GrammarTags->patchEntity($grammarTag, $this->request->getData());
        if ($this->GrammarTags->save($grammarTag)) {
            $this->Flash->success('Complete.');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error('Warning.');
    }

}
