<?php

Route::get('/timezones/{timezone?}', 'bond\timezones\TimezonesController@getTimezone');