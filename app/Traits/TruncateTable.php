<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    protected function truncate($table)
    {
        DB::table($table)->truncate();
    }
}