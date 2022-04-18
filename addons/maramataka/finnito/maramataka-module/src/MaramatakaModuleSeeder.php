<?php namespace Finnito\MaramatakaModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Finnito\MaramatakaModule\Subject\Contract\SubjectRepositoryInterface;
use Finnito\MaramatakaModule\Year\Contract\YearRepositoryInterface;

class MaramatakaModuleSeeder extends Seeder
{

    public function __construct(
        SubjectRepositoryInterface $subjects,
        YearRepositoryInterface $years
    ) {
        $this->subjects = $subjects;
        $this->years = $years;
    }

    public function run()
    {
        $this->subjects->create([
            'name' => "ESS 2022",
            'colour' => "#e67e22",
            'periods' => "Monday 09:45, Tuesday 14:10, Wednesday 12:50, Thursday 11:25"
        ]);

        $this->subjects->create([
            'name' => "12PHY 2022",
            'colour' => "#9b59b6",
            'periods' => "Monday 11:25, Wednesday 09:35, Thursday 13:10, Friday 08:45"
        ]);

        $this->subjects->create([
            'name' => "11SCI 2022",
            'colour' => "#3498db",
            'periods' => "Monday 08:45, Tuesday 13:10, Wednesday 11:20, Thursday 14:10, Friday 09:45"
        ]);

        $this->subjects->create([
            'name' => "9HUL 2022",
            'colour' => "#27ae60",
            'periods' => "Monday 14:10, Tuesday 08:45, Wednesday 08:45, Thursday 08:45"
        ]);

        $this->subjects->create([
            'name' => "9TLN 2022",
            'colour' => "#f1c40f",
            'periods' => "Tuesday 11:20, Wednesday 13:40, Friday 11:20"
        ]);

        $year = $this->years->create([
            "name" => "2022",
        ]);
        $year->subjects = [1, 2, 3, 4, 5];
        $year->save();
    }
}
