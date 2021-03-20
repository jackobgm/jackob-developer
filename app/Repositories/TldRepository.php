<?php

namespace App\Repositories;

use App\Models\Tld;
use App\Repositories\BaseRepository;

/**
 * Class TldRepository
 * @package App\Repositories
 * @version January 26, 2021, 12:21 am UTC
*/

class TldRepository extends BaseRepository
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
        return Tld::class;
    }
}
