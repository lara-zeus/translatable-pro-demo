<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('migrate:fresh --seed --force --quiet')
    ->daily();
