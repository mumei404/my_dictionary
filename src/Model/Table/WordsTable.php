<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class WordsTable extends Table {
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Tags');
    }
}
