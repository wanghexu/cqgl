<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='article';
    protected $primaryKey='art_id';
    public $timestamps=false;
    //定义黑名单为空，就是谁都可以插入，$fillable为白名单
    protected $guarded=[];
}
