<?php namespace Finnito\MaramatakaModule\Year;

use Finnito\MaramatakaModule\Year\Contract\YearInterface;
use Anomaly\Streams\Platform\Model\Maramataka\MaramatakaYearsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YearModel extends MaramatakaYearsEntryModel implements YearInterface
{
    use HasFactory;

    /**
     * @return YearFactory
     */
    protected static function newFactory()
    {
        return YearFactory::new();
    }
}
