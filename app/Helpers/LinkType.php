<?php

use AfromanSR\LaravelMathCaptcha\MathCaptcha;
use Carbon\Carbon;

function hrefType($link_type, $result)
{
    if ($link_type == 1) {
        return '#';
    }
    if ($link_type == 2) {
        return $result;
    }
    if ($link_type == 3) {
        return $result;
    }
    if ($link_type == 4) {
        return $result;
    }
    if ($link_type == 5) {
        return $result;
    }
    return $result;
}

function targetType($link_type)
{
    $result = '';
    $self = '_self';
    $blank = '_blank';

    if ($link_type == 2) {
        $result = $self;
        return $result;
    }
    if ($link_type == 3) {
        $result = $blank;
        return $result;
    }
    if ($link_type == 4) {
        $result = $self;
        return $result;
    }
    if ($link_type == 5) {
        $result = $blank;
        return $result;
    }
    return $result;
}

function displayDateOnly($date)
{
    return Carbon::parse($date)->format('d.m.Y');
}

function displayDateTime($date)
{
    return Carbon::parse($date)->format('d.m.Y H:i');
}

function displayTime($date): string
{
    return Carbon::parse($date)->format('H:i');
}

function average($required, $collected)
{
    return round($collected * 100 / $required);
}

function countYearOld($birth_date)
{
    return now()->format('Y') - Carbon::parse($birth_date)->format('Y');
}

function countDiff($last, $current)
{
    return $last > 0 ? round(((100 * $current) / $last) - 100) : 100;
}

function filesize_formatted($path): ?string
{
    $path = substr($path, 1);
    if (is_file($path)) {
        $size = filesize($path);
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $power = $size > 0 ? floor(log($size, 1024)) : 0;
        $result = number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
        return !empty($path) ? $result : null;
    } else {
        return null;
    }

}

function file_extension($path): ?string
{
    if ($path) {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        return $extension;
    } else {
        return null;
    }
//    $var = explode('/', $path);
//    dd(explode('.', $var[4])[1]);
//    img/file.svg

}
