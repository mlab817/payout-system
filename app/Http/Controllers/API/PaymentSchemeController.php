<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\PaymentSchemeResource;
use App\Models\PaymentScheme;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PaymentSchemeController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return PaymentSchemeResource::collection(PaymentScheme::all());
    }
}
