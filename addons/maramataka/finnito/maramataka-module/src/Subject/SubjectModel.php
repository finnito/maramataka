<?php namespace Finnito\MaramatakaModule\Subject;

use Finnito\MaramatakaModule\Subject\Contract\SubjectInterface;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaSubjectsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectModel extends MaramatakaSubjectsEntryModel implements SubjectInterface
{
    use HasFactory;

    /**
     * @return SubjectFactory
     */
    protected static function newFactory()
    {
        return SubjectFactory::new();
    }
}
