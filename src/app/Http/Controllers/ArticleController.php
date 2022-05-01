<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            (object)[
                'id' => 1,
                'radio_title' => '番組名1',
                'radio_date' => "放送日時1",
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object)[
                'id' => 1,
                'radio_title' => '番組名2',
                'radio_date' => "放送日時2",
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => 'ユーザー名2',
                ],
            ],
            (object)[
                'id' => 1,
                'radio_title' => '番組名3',
                'radio_date' => '放送日時3',
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => 'ユーザー名3',
                ],
            ],
        ];
        return view('articles.index', ['articles' => $articles]);
    }
}
