<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jsql\LaravelPlugin\JsqlController;

class TestJsqlController extends Controller
{

    public function refreshOptions() {
        dd(JsqlController::callJsqlApi([],'GET','options/all'));
    }

    public function deHashQueries(Request $request) {
        $hash = $request->input('hash');
        $result =  JsqlController::callJsqlApi([$hash],'POST','queries');

        return view('welcome', ['query' => $result['data'][0]['query'], 'hash' => '']);

    }

    public function hashQueries(Request $request) {
        $query = $request->input('query');
        $result = JsqlController::callJsqlApi([$query],'POST','hashes');

        return view('welcome', ['query' => $query, 'hash' => $result['data'][0]['token']]);
    }
}
