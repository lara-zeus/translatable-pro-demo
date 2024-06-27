<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('migrate:fresh --seed --force --quiet')
    ->daily();

Schedule::command('db:seed --class=BookFakerSeeder --force')
    ->daily();
