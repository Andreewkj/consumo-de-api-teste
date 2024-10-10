<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entities\Sport;

class Sports extends BaseEndpoint
{
    public function get()
    {
        return $this->transform(
            $this->service
                ->api
                ->get('/sports')
                ->json('data'),
            Sport::class
        );
    }
}
