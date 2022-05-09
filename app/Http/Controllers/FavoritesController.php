<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
    /**
     * 投稿をお気に入り登録するアクション。
     *
     * @param  $id  投稿のid
     * @return \Illuminate\Http\Response
     */
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り登録する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 登録のお気に入り登録を解除するアクション。
     *
     * @param  $id  投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿のお気に入り登録を解除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}