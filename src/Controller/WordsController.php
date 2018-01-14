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

    public function edit($id) {
        $word = $this->Words->get($id);
        $options = $this->Words->Tags->find('list');
        $this->set('word', $word);
        $this->set('options', $options);

        if (!$this->request->is(['post', 'put'])) {
            return $this->render();
        }
        $word = $this->Words->patchEntity($word, $this->request->getData());
        if ($this->Words->save($word)) {
            $this->Flash->success('Complete.');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error('Warning.');

    }

    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $word = $this->Words->get($id);
        if ($this->Words->delete($word)) {
            $this->Flash->success('Deleted.');
            return $this->redirect(['action' => 'index']);
        }
    }
}
