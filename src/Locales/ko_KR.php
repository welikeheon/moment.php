<?php

// locale: Korean [ko]
// author: Heon Ju, Lee : http://github.com/welikeheon

return array(
    "months"        => explode('_', '1월_2월_3월_4월_5월_6월_7월_8월_9월_10월_11월_12월'),
    "monthsNominative"        => explode('_', '1월_2월_3월_4월_5월_6월_7월_8월_9월_10월_11월_12월'),
    "monthsShort"   => explode('_', '1월_2월_3월_4월_5월_6월_7월_8월_9월_10월_11월_12월'),
    "weekdays"      => explode('_', '월요일_화요일_수요일_목요일_금요일_토요일_일요일'),
    "weekdaysShort" => explode('_', '월_화_수_목_금_토_일'),
    "calendar"      => array(
        "sameDay"  => '[오늘]',
        "nextDay"  => '[내일]',
        "lastDay"  => '[어제]',
        "lastWeek" => '[지난 주] l',
        "sameElse" => 'l',
        "withTime" => 'H:i [분] ',
        "default"  => 'Y/m/d',
    ),
    "relativeTime"  => array(
        "future" => '%s 후',
        "past"   => '%s 전',
        "s"      => '몇 초',
        "m"      => '일분',
        "mm"     => '%d분',
        "h"      => '한 시간',
        "hh"     => '%d시간',
        "d"      => '하루',
        "dd"     => '%d일',
        "M"      => '한 달',
        "MM"     => '%d달',
        "y"      => '일 년',
        "yy"     => '%d년',
    ),
    "ordinal"       => '%d일',
    "week"          => array(
        "dow" => 0, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
);