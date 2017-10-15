<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use App\User;
use App\Role;
use App\Staff;
use App\Doctor;
use App\Course;
use App\Employee;
use App\Student;
use Redirect;
class adminController extends Controller
{

        public function admin_dashboard()
    {


    	 $Staff = DB::table('users')
               ->join('roles', 'users.role_id', '=', 'roles.id')
              ->where('roles.name',"Staff")
               ->count();
    	 $Doctor= DB::table('users')
               ->join('roles', 'users.role_id', '=', 'roles.id')
              ->where('roles.name',"Doctor")
               ->count();
		$Patient = DB::table('users')
               ->join('roles', 'users.role_id', '=', 'roles.id')
              ->where('roles.name',"Patient")
               ->count();
    	 $Management = DB::table('users')
               ->join('roles', 'users.role_id', '=', 'roles.id')
              ->where('roles.name',"Management")
               ->count();

    	$users = DB::table('users') ->join('roles', 'users.role_id', '=', 'roles.id')->select('users.id','users.first_name','users.last_name','users.middle_name','users.email','roles.name' )->paginate(15000); 

        return view('layouts.admin.Admin_Dashboard',compact('users', 'Staff','Doctor','Patient', 'Management'));

    }

	








}