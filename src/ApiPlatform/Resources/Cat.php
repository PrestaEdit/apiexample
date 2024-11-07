<?php

declare(strict_types=1);

namespace PrestaShop\Module\ApiExample\ApiPlatform\Resources;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use PrestaShop\Module\ApiExample\Processors\CatProcessor;
use PrestaShop\Module\ApiExample\Providers\CatProvider;

#[ApiResource(
    shortName: "Example module",
    routePrefix: '/example',
    operations: [
        new Get(
            uriTemplate: '/cat/{id}',
            requirements: ['id' => '\d+'],
            openapiContext: [
                'summary' => 'Miaou',
                'description' => 'I\'m a little cat',
                'parameters' => [
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => true,
                        'schema' => [
                            'type' => 'int',
                        ],
                        'description' => 'Id of the cat you are requesting the status from',
                    ],
                ],
            ],
            provider: CatProvider::class,
            extraProperties: [
                'scopes' => ['example'],
            ],
        ),
        new Put(
            uriTemplate: '/cat/{id}',
            provider: CatProvider::class,
            processor: CatProcessor::class,
            requirements: ['id' => '\d+'],
            openapiContext: [
                'summary' => 'Replaces the Cat',
            ],
            extraProperties: [
                'scopes' => ['example'],
            ],
        ),
    ],
)]
class Cat
{
    #[ApiProperty(identifier: true)]
    public ?int $id = null;

    public string $name = '';

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}
