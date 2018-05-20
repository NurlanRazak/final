<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $table='employees';
    public $primaryKey='emp_no';
    public $timestamps =false;
    
    public function departments(){
     return $this->belongsToMany('App\departments', 'dept_emp', 'emp_no', 'dept_no');	
    }
    public function salaries(){
    	return $this->belongsTo('App\salaries', 'emp_no');
    }
    
}
