<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     */
    public function store($micropostId)
    {
        // 認証済みユーザが(閲覧者)が、投稿をお気に入り登録する
        \Auth::user()->favorite($micropostId);
        // 前のページにリダイレクトさせる。
        return back();
    }
    
    /**
     * 投稿のお気に入りを外すアクション
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、idのユーザを外す
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
