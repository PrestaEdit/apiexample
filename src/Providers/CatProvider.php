<?php

declare(strict_types=1);

namespace PrestaShop\Module\ApiExample\Providers;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use PrestaShop\Module\ApiExample\Models\Cat;

class CatProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []) : Cat
    {
        return new Cat(id: $uriVariables['id']);
    }
}
