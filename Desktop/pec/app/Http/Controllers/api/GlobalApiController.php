<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use App\Models\GlobalOption;
use Illuminate\Http\Request;

class GlobalApiController extends Controller
{
    use ApiResponser;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_options = GlobalOption::get()->first();
        return $this->success([
            $all_options
        ]);
    }
}
