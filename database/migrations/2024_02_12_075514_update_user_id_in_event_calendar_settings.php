<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Set user_id to '39c8aaca-6227-42d9-a0c6-12c095993df0' for all records
        DB::table('event_calendar_settings')
            ->update(['user_id' => '39c8aaca-6227-42d9-a0c6-12c095993df0']);
    }

    public function down()
    {
        // You can implement a rollback if needed
    }
};
