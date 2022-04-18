<?php namespace Finnito\MaramatakaModule\Lesson;

use Finnito\MaramatakaModule\Lesson\Contract\LessonRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LessonRepository extends EntryRepository implements LessonRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LessonModel
     */
    protected $model;

    /**
     * Create a new LessonRepository instance.
     *
     * @param LessonModel $model
     */
    public function __construct(LessonModel $model)
    {
        $this->model = $model;
    }
}
