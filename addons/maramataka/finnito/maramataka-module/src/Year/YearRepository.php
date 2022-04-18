<?php namespace Finnito\MaramatakaModule\Year;

use Finnito\MaramatakaModule\Year\Contract\YearRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class YearRepository extends EntryRepository implements YearRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var YearModel
     */
    protected $model;

    /**
     * Create a new YearRepository instance.
     *
     * @param YearModel $model
     */
    public function __construct(YearModel $model)
    {
        $this->model = $model;
    }
}
