<?php

declare(strict_types=1);

namespace PrestaShop\Module\ApiExample\Processors;

use \Configuration;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use PrestaShop\Module\ApiExample\Models\Cat;

class CatProcessor implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []) : mixed
    {
        Configuration::updateValue('EX_CAT_' . (int) $uriVariables['id'], $data->name);

        return $data;
    }
}
