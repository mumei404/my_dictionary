<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class GrammarTable extends Table {
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTO('GrammarTags');
    }
}
