<?php

namespace App\Repositories;

use App\Models\Client;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\ClientRepository as ClientRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * 
     * @return ClientRepositoryEloquent
     * Responsavel por realizar a chamada
     * da nossa Model, para que nosso controller
     * não necessite chamar diretamente a model.
     */
    public function model() 
    {
        return Client::class;
    }

}