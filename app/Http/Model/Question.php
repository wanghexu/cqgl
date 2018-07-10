<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table='question';
    protected $primaryKey='id';
    public $timestamps=false;
    //定义黑名单为空，就是谁都可以插入，$fillable为白名单
    protected $guarded=[];
}
