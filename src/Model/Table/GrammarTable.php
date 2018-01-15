<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;

class GrammarTable extends Table {
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTO('GrammarTags');
    }

    public function validationDefault(Validator $validator) {
        $validator
            ->notEmpty('title')
            ->notEmpty('text')
            ->notEmpty('gtammat_tag_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['title', 'grammar_tag_id']));

        return $rules;
    }
}
