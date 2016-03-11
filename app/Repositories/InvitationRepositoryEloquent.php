<?php

namespace RioBoatShow\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use RioBoatShow\Entities\Invitation;

/**
 * Class InvitationRepositoryEloquent.
 *
 * @package namespace RioBoatShow\Repositories;
 */
class InvitationRepositoryEloquent extends BaseRepository implements InvitationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Invitation::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
