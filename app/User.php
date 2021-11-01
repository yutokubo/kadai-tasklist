<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * このユーザが所有する投稿。（Taskモデルとの関係を定義）
     * Micropostのときと同様に記述することで、 UserのインスタンスからそのUserが持つ
     * Micropostsを $user->microposts()->get() もしくは $user->microposts 
     * という簡単な記述で取得できるようになります。
     */
     public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    /**
     * このユーザに関係するモデルの件数をロードする。
     * Userのインスタンスに {リレーション名}_count プロパティが追加され、
     * 件数を取得できるようになります。
     * $user->loadRelationshipCounts() のように呼び出し、
     * ビューで $user->microposts_count のように件数を取得できます。
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount('tasks');
    }
}
