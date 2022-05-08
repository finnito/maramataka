<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class FinnitoModuleMaramatakaRemoveUnique extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $stream = $this->streams()->findBySlugAndNamespace('lessons', 'maramataka');

        if ($assignment = $stream->getAssignment("slug")) {
            $assignment->unique = 0;
            $assignment->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $stream = $this->streams()->findBySlugAndNamespace('lessons', 'maramataka');
        
        if ($assignment = $stream->getAssignment("slug")) {
            $assignment->unique = 1;
            $assignment->save();
        }
    }
}
