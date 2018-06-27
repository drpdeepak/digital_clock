<?php



Route::get('dclock', 'Digital\Clock\DigitalClockController@dateAdd');
Route::get('date_add/{days}/{format}', 'Digital\Clock\DigitalClockController@dateAdd');
Route::get('date_sub/{days}/{format}', 'Digital\Clock\DigitalClockController@dateSub');
Route::get('date_diff/{date1}/{date2}', 'Digital\Clock\DigitalClockController@dateDiff');
Route::get('date_format/{date}/{format}', 'Digital\Clock\DigitalClockController@dateFormat');
Route::get('getdate/{format}', 'Digital\Clock\DigitalClockController@getDate');

