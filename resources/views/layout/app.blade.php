<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>University Course and Result Management System</title>
</head>
<body>

<section id="app">
    <div class="menu-bar">
        <ul class="all-menus">
            <li class="menu-item">
                <a href="{{ route('departments') }}">
                    <i class="far fa-save icon"></i>
                    <span class="menu-name">Departments</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('course') }}">
                    <i class="far fa-list-alt icon"></i>
                    <span class="menu-name">Courses</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('teachers') }}">
                    <i class="fas fa-chalkboard-teacher icon"></i>
                    <span class="menu-name" class="menu-name">Teachers</span></a>
            </li>
            <li class="menu-item">
                <a href="{{ route('courseAssign') }}">
                    <i class="fas fa-arrows-alt icon"></i>
                    <span class="menu-name" class="menu-name">Course Assign</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('courseStatics') }}">
                    <i class="fas fa-signal icon"></i>
                    <span class="menu-name" class="menu-name">Course Statics</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('registerStudents') }}">
                    <i class="fas fa-users icon"></i>
                    <span class="menu-name">Register Students</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('allocateClassrooms') }}">
                    <i class="fab fa-buromobelexperte icon"></i>
                    <span class="menu-name">Allocate Classroom</span></a>
            </li>
            <li class="menu-item">
                <a href="{{ route('scheduleAndClassroom') }}">
                    <i class="far fa-calendar-alt icon"></i>
                    <span class="menu-name">Schedule & Classroom</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('enrollCourse') }}">
                    <i class="fas fa-sign-in-alt icon"></i>
                    <span class="menu-name">Enroll Course</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('saveStudentResult') }}">
                    <i class="fas fa-poll-h icon icon"></i>
                    <span class="menu-name">Save Results</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('viewResult') }}">
                    <i class="far fa-eye icon"></i>
                    <span class="menu-name">View Results</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('unAssignAllCourses') }}">
                    <i class="fas fa-sign-out-alt icon"></i>
                    <span class="menu-name">Un-assign Courses</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('deallocateAllClassrooms') }}"><i class="far fa-square icon"></i><span class="menu-name">Deallocate Classrooms</span></a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="app-bar">
            <h3 class="app-name">University Course & Result Management System</h3>
            <div class="settings-icon">
                <i class="fas fa-user-cog" onclick="settingsMenuToggle()"></i>
            </div>

            <!-- settings menu starts -->
            <div class="settings-menu">

                <div class="settings-menu-item">
                    <a href="">
                        <p>Home</p>
                        <i class="fas fa-home"></i>
                    </a>
                </div>

                <div class="settings-menu-item">
                    <a href="">
                        <p>Dark Mood</p>
                        <i class="fas fa-moon"></i>
                    </a>
                </div>

                <div class="settings-menu-item">
                    <a href="" >
                        <p>About</p>
                        <i class="fas fa-codepen"></i>
                    </a>
                </div>

                <div class="settings-menu-item">
                    <a href="">
                        <p>Github</p>
                        <i class="fas fa-code"></i>
                    </a>
                </div>

            </div>
            <!-- settings menu ends -->

        </div>


        @yield('content')



    </div>
</section>


<script src="js/script.js"></script>
<script src="fontawesome/js/all.js"></script>
</body>
</html>
