<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class GrammarTag extends Entity {
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false
    ];
}
