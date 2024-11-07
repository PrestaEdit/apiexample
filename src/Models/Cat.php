<?php

declare(strict_types=1);

namespace PrestaShop\Module\ApiExample\Models;

use \Configuration;

class Cat
{
    public $id;
    public $name;

    public function __construct($id = null)
    {
        if ($id == 1) {
            $this->name = Configuration::get('EX_CAT_' . (int)$id, null, null, null, 'Puff');
        }

        return $this;
    }
}
