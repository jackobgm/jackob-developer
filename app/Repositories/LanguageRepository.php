<?php

namespace App\Repositories;

use App\Models\Language;
use App\Repositories\BaseRepository;

/**
 * Class LanguageRepository
 * @package App\Repositories
 * @version January 26, 2021, 1:13 am UTC
*/

class LanguageRepository extends BaseRepository
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
        return Language::class;
    }
}
