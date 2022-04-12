<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Отправка данных для страницы
     */
    public function getPage(Request $request)
    {
        $arrPageInfo = json_decode($request[0], true);
        $a = $arrPageInfo['id'];
        $page = Page::where('id', $a)->first();
        return $page->toJson();
    }
}
