<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class FormController extends Controller
{
    /**
     * Сохраняет данные на сайт data
     */
    public function saveContact(Request $request)
    {
        $arrPageInfo = json_decode($request[0], true);
        Page::create($arrPageInfo);
        $lastPage = Page::latest()->first();
        return $lastPage->toJson();
    }
}
