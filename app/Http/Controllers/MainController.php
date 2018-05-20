<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departments;
use App\dept_emp;
use App\employees;
use App\salaries;
use DB;
class MainController extends Controller
{

    public function showEmployees(){
    	$employee=DB::table('employees')->count();
    	$department=DB::table('departments')->count();
    	$dept_m=DB::table('dept_manager')->count();
    	//$showEmployee=DB::table('employees')->count();
    	return view('index',['employee'=>$employee,'department'=>$department,'dept_m'=>$dept_m]);
    }

    public function pageEmployees(){
    	$show = employees::paginate(13);
        return view('employees', compact('show', 'sal'));

    }
    public function infoEmployees($emp_no){
    	$sal=employees::find($emp_no);
    	$sal1 = DB::table('employees')    					
    					->where('employees.emp_no', '=', $emp_no)    					
    					->join('salaries', 'employees.emp_no', '=', 'salaries.emp_no')
    					->join('titles','titles.emp_no','=','employees.emp_no')
    					->join('dept_emp','employees.emp_no','=','dept_emp.emp_no')
    					->join('departments','departments.dept_no','=','dept_emp.dept_no')
    					
                        ->get();
          $sal2 = DB::table('employees')    					
    					->where('employees.emp_no', '=', $emp_no)    					
    					->join('salaries', 'employees.emp_no', '=', 'salaries.emp_no')
    					->join('titles','titles.emp_no','=','employees.emp_no')
    					->join('dept_emp','employees.emp_no','=','dept_emp.emp_no')
    					->join('departments','departments.dept_no','=','dept_emp.dept_no')
    					
                        ->get();
       
 
       $salary=DB::table('salaries')->leftjoin('employees','employees.emp_no','=','salaries.emp_no')->where('employees.emp_no','=',$emp_no)->get([DB::raw('salaries.salary'),DB::raw('salaries.from_date')]);

                        foreach ($sal1 as $key => $value) {

                        	
                        	# code...
                        	//var_dump($value->first_name, $value->last_name, $value->salary, $value->title);
                        	//var_dump($key['first_name, last_name, salaries.salary']);
                        	
                        }
                       // dd($var);
                      /*
                      ->join('dept_manager','dept_manager.emp_no','=','employees.emp_no')  
                      foreach ($var as $key => $value) {
                        	# code...
                        	var_dump($value->first_name, $value->last_name, $value->salary, $value->title);
                        	//var_dump($key['first_name, last_name, salaries.salary']);
                        }*/
                      
                        return view('salary',compact('sal1','sal2'),['sal'=>$sal,'salary'=>$salary]);
                        
    }
    public function ShowManagers(){
    	$manager=DB::table('employees')
        				->join('dept_manager','dept_manager.emp_no','=','employees.emp_no')  
        				->join('departments','departments.dept_no','=','dept_manager.dept_no')
        				->get();            
        				return view('manager',compact('manager'));
    }
}
