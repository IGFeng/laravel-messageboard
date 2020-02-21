<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class message extends Model{
    protected $table='mb_message';
    protected $primaryKey='id';
    public $timestamps=false;
    Protected function asDateTime($val){
        return $val;
    }
}
