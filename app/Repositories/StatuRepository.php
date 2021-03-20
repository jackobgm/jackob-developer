<?php

namespace App\Repositories;

use App\Models\Statu;
use App\Repositories\BaseRepository;

/**
 * Class StatuRepository
 * @package App\Repositories
 * @version January 25, 2021, 6:35 pm UTC
*/

class StatuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Statu::class;
    }
}
