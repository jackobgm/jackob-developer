<?php

namespace App\Repositories;

use App\Models\Website;
use App\Repositories\BaseRepository;

/**
 * Class WebsiteRepository
 * @package App\Repositories
 * @version January 23, 2021, 6:12 am UTC
*/

class WebsiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'domain_authority',
        'page_authority',
        'price',
        'link_type_id',
        'post_content_id'
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
        return Website::class;
    }
}
