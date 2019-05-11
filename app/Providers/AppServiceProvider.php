<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          Schema::defaultStringLength(191);


          View::composer('frontEnd.includes.doctors',function($view){

           $users = DB::table('users')
                          ->join('doctor_profiles', 'users.id', '=', 'doctor_profiles.doctorId')
                          ->select('doctor_profiles.*', 'users.*')
                          ->take(4)
                          ->get();
          $view->with('users',$users);
        });
          View::composer('frontEnd.master',function($view){

           $doctor = DB::table('users')->where('user_Type','doctor')
                          ->count();
          $view->with('doctor',$doctor);
        });
          View::composer('frontEnd.master',function($view){

           $client = DB::table('users')->where('user_Type','user')
                          ->count();
          $view->with('client',$client);
        });
          View::composer('frontEnd.master',function($view){

           $app = DB::table('appointments')->count();
          $view->with('app',$app);
        });




             View::composer('backEnd.includes.sidebar',function($view){

           $userProfile = DB::table('users')
                          ->join('patient_profiles', 'users.id', '=', 'patient_profiles.userId')
                          ->select('patient_profiles.*', 'users.*')
                          ->where('userId',Auth::user()->id)
                          ->first();
                         //dd($userProfile);
          $view->with('userProfile',$userProfile);
        });


                View::composer('backEnd.includes.sidebar',function($view){

           $doctorProfile = DB::table('users')
                          ->join('doctor_profiles', 'users.id', '=', 'doctor_profiles.doctorId')
                          ->select('doctor_profiles.*', 'users.*')
                          ->where('doctorId',Auth::user()->id)
                          ->first();
          $view->with('doctorProfile',$doctorProfile);
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
