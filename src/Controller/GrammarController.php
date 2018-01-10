<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class GrammarController extends AppController {
    public function initialize() {
        parent::initialize();
    }

    public function index($id) {
        $grammar = $this->Grammar->find()->where(['grammar_tag_id' => $id]);
        $grammarTag = TableRegistry::get('GrammarTags')->findById($id)->first();
        $this->set('grammar', $grammar);
        $this->set('grammarTag', $grammarTag);
    }

    public function add() {
        $grammar = $this->Grammar->newEntity();
        $options = $this->Grammar->GrammarTags->find('list');
        $this->set('grammar', $grammar);
        $this->set('options', $options);

        if (!$this->request->is('post')) {
            return $this->render();
        }
        $grammar = $this->Grammar->patchEntity($grammar, $this->request->getData());
        if ($this->Grammar->save($grammar)) {
            $this->Flash->success('Complete.');
            return $this->redirect(['action' => 'index', $grammar->grammar_tag_id]);
        }
        $this->Flash->error('Warning.');
    }

    public function detail($id) {
        $grammar = $this->Grammar->findById($id)->first();
        $this->set('grammar', $grammar);
    }
}
