<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;

class WordsTable extends Table {
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Tags');
    }

    public function validationDefault(Validator $validator) {
        $validator
            ->notEmpty('name')
            ->notEmpty('meaning')
            ->notEmpty('tag_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
