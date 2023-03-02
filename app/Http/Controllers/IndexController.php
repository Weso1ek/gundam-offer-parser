<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function index()
    {
        Log::warning('There is a warning');

        Log::error(false);

        Log::notice(500);

        $person = '{"Peter":35, "John":37, "Yinka":43}';

        $data = json_decode($person, true);

        info($data);

        \Log::stack(['single', 'daily'])->info('registeration successful!');

        die('sfdsfdsfs');

        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
