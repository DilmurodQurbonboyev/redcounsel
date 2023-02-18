<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteLog;
use App\Models\User;
use Stevebauman\Location\Facades\Location;

class LogController extends Controller
{
    public function index()
    {
        return view('admin.logs.index');
    }

    public function show($id)
    {

        $log = SiteLog::query()
            ->findOrFail($id);
        $position = Location::get(ip2long($log->user_ip));
        return view('admin.logs.show', compact('log', 'position'));
    }
}
