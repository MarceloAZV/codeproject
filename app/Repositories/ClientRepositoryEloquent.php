<?php
/**
 * Created by PhpStorm.
 * User: azv
 * Date: 08/09/15
 * Time: 11:17
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    /**
     * @return mixed
     */
    public function model()
    {
        return Client::class;

    }

}