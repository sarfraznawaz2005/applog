<?php
/**
 * Created by PhpStorm.
 * User: Sarfraz
 * Date: 1/18/2018
 * Time: 6:23 PM
 */

namespace Sarfraznawaz2005\Applog;

use Illuminate\Routing\Controller as BaseController;

class ApplogController extends BaseController
{
    public function index()
    {
        if (request()->input('dl')) {

            return response()->download(AppLog::pathToLogFile(base64_decode(request()->input('dl'))));

        } elseif (request()->has('del')) {

            app('files')->delete(AppLog::pathToLogFile(base64_decode(request()->input('del'))));

            return redirect(request()->url());
        }

        return view('applog::logs', [
            'logs' => AppLog::all(),
            'current_file' => storage_path('logs/laravel.log'),
            'exists' => app('files')->exists(storage_path('logs/laravel.log'))
        ]);
    }
}