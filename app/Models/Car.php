<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'cars';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'manufacturer_id',
        'model_id',
        'color_id',
        'year_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
   public function manufacturer(){
    return $this-> belongsTo(Manufacturer::class,'manufacturer_id');
   }
   public function model(){
    return $this-> belongsTo(ModelName::class,'model_id');
   }
   public function color(){
    return $this-> belongsTo(Color::class,'color_id');
   }
   public function year(){
    return $this-> belongsTo(Year::class,'year_id');
   }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
