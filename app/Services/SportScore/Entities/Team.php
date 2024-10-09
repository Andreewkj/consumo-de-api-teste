<?php

namespace App\Services\SportScore\Entities;

class Team
{
    public int $id;
    public string $slug;

    public string $name;
    public ?string $country;
    public ?string $logo;

    public array $nameTranslations;

    public function __construct(
        array $data,
    ) {
        $this->id              = data_get($data, 'id');
        $this->slug            = data_get($data, 'slug');
        $this->name            = data_get($data, 'name');
        $this->nameTranslations = data_get($data, 'name_translations');
        $this->country = data_get($data, 'country');
        $this->logo    = data_get($data, 'logo');
    }
}
