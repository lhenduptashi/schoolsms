<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-group"></i> System <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('system/roles') }}">Roles</a></li> 
            <li><a href="{{ url('system/users') }}">Users</a></li>                
          </ul>
        </li>
        <li><a><i class="fa fa-group"></i> Employee <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('employee/employeedata') }}">List</a></li> 
            <li><a href="{{ url('employee/tour') }}">Tour_List</a></li>    
            <li><a href="{{ url('employee/leave') }}">Leave_List</a></li>                    
            <li><a href="{{ url('employee/payroll') }}">Payroll</a></li>                    
          </ul>
        </li>

        <li><a><i class="fa fa-group"></i> Student <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('Student/StudentDetail') }}">Student List</a></li>                    
          </ul>
        </li>

        <li><a><i class="fa fa-folder"></i> Academic <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('Academic/Class/create') }}">Class</a></li> 
            <li><a href="{{ url('Academic/Stream/create') }}">Stream</a></li>
            <li><a href="{{ url('Academic/Subject/create') }}">Subject</a></li>
            <li><a href="{{ url('Academic/Section/create') }}">Section</a></li>                   
          </ul>
        </li>

        <li><a><i class="fa fa-file-o"></i>Attendance <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('attendance/employee') }}">Employee</a></li>            
            <li><a href="">Student</a></li>            
          </ul>
        </li>

        <li><a><i class="fa fa-sign-in"></i>ADD <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('employee/designation/create') }}">Add Designation</a></li>            
            <li><a href="{{ url('employee/leave_type/create') }}">Add Leave_Type</a></li>   
            <li><a href="{{ url('ConfigurationFile/StudentScholarshipType/create') }}">Add Student Scholarship Type</a></li>
            <li><a href="{{ url('ConfigurationFile/StudentType/create') }}">Add Student Type</a></li>  
            <li><a href="{{ url('ConfigurationFile/AssessmentType/create') }}">Add Assessment Type</a></li>          
          </ul>
        </li>

        <li><a><i class="fa fa-share-alt"></i>Register <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('register/class-section') }}">Class Section</a></li> 
            {{-- <li><a href="{{ url('Register/StreamSubject/create') }}">Stream Subject</a></li> --}}
            {{-- <li><a href="{{ url('Register/ClassSectionStream') }}">Class Section Stream</a></li>                       --}}
          </ul>
        </li>

        <li><a><i class="fa fa-file-text-o"></i> Result <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="{{ url('result/assessment-mark-allocation/create') }}">Assessment Mark Allocation</a></li>
              <li><a> Academic Assessment</a>
                  <ul class="nav child_menu">
                      <li><a href="{{ url('result/continuous-assessment/create') }}">Continuous Assessment</a></li>
                      <li><a href="{{ url('result/continuous-assessment') }}">View Continuous Assessment</a></li>
                      <li><a href="{{ url('result/end-examination-assessment/create') }}">End Examination Assessment</a></li>
                      <li><a href="{{ url('result/end-examination-assessment') }}">View End Examination Assessment</a></li>
                  </ul>
              </li>                    
              <li><a href="{{ url('result/consolidated-marks') }}">Consolidated Marks</a></li>                               
          </ul>
      </li>

      </ul>
    </div>
   </div>