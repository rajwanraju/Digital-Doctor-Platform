<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
              @if(Auth::user()->user_Type == 'admin')    
                  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/adminDashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    @elseif(Auth::user()->user_Type == 'doctor') 
                     <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/doctorDashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                     @elseif(Auth::user()->user_Type == 'user')
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/userDashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                      @endif

 @if(Auth::user()->user_Type == 'admin') 

             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('doctors')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Doctor List</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('Patients')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Patient List</span></a></li>

@elseif(Auth::user()->user_Type == 'doctor') 

@if($doctorProfile == null)

 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('profile/complete')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Complete Profile</span></a></li>

 

@else

 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('my/appointment')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">My Appointment</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('my/Patient')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">My Patient List</span></a></li>
 
              
@endif
               
@elseif(Auth::user()->user_Type == 'user')

@if($userProfile == null)

   
 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('user/profile')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Complete Profile</span></a></li>


               
@else




 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('doctor/list')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Doctor List</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('myappointment/list')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">My Appoitment List</span></a></li>  
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('user/prescription')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">My Prescription List</span></a></li>
             

@endif
@endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
