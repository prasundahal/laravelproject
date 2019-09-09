<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class particular extends Model
{

protected $fillable = [
   
        'suplier_id',
        'particulars',
        'quantity',
        'rateperunit',
        'piece',
        'amount'
    ]; 


  public function suplier()
    {
        
        return $this->hasone('App\suplier', 'id', 'suplier_id');
    }  
       
     public function sn()
    {
        
        return $this->hasone('App\suplier', 'supliers_name', 'supliers_name');
    }  
  
  public function parts()
    {
        
        return $this->hasOne('App\part', 'id', 'particulars');
    }  



}