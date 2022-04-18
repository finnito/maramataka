<?php namespace Finnito\MaramatakaModule\Lesson;

use Finnito\MaramatakaModule\Lesson\Contract\LessonInterface;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaLessonsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Finnito\MaramatakaModule\Subject\SubjectModel;

class LessonModel extends MaramatakaLessonsEntryModel implements LessonInterface
{
    use HasFactory;

    /**
     * @return LessonFactory
     */
    protected static function newFactory()
    {
        return LessonFactory::new();
    }

    public function subject()
    {
        return $this->belongsTo(SubjectModel::class, 'subject_id');
    }
}
