<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;
use App\Models\Company;


class CompanyApiController extends Controller
{
    public function query(){
        $company=Company::first();
        return new CompanyResource($company);
    }
}
