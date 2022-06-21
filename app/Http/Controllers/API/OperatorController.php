<?php

namespace App\Http\Controllers\API;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends \App\Http\Controllers\Controller
{
    public function index(Request $request)
    {
        $operator = new Operator;

        if ($request->has('search')) {
            $operator = $operator
                ->where('name', 'like', $request->query('search') . '%');
        }

        return response()->json($operator->paginate());
    }
}
