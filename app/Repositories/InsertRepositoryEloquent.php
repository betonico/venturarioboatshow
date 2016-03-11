<?php

namespace RioBoatShow\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use RioBoatShow\Entities\Insert;

/**
 * Class InsertRepositoryEloquent.
 *
 * @package namespace RioBoatShow\Repositories;
 */
class InsertRepositoryEloquent extends BaseRepository implements InsertRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Insert::class;
    }

    /**
     * Boot up the repository, pushing criteria.
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
