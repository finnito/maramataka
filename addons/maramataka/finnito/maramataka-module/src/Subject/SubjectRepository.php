<?php namespace Finnito\MaramatakaModule\Subject;

use Finnito\MaramatakaModule\Subject\Contract\SubjectRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SubjectRepository extends EntryRepository implements SubjectRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SubjectModel
     */
    protected $model;

    /**
     * Create a new SubjectRepository instance.
     *
     * @param SubjectModel $model
     */
    public function __construct(SubjectModel $model)
    {
        $this->model = $model;
    }
}
