<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
<script src={{ asset("bower_components/jquery/dist/jquery.min.js") }}></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 --><!-- jQuery UI 1.11.4 -->
<script src={{ asset("bower_components/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Slimscroll -->
<script src={{ asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}></script>
<!-- FastClick -->
<script src={{ asset("bower_components/fastclick/lib/fastclick.js") }}></script>
  <!-- fullCalendar -->
 
  <link rel="stylesheet" href={{ asset("bower_components/fullcalendar/dist/fullcalendar.min.css") }}>
  <link rel="stylesheet" href={{ asset("bower_components/fullcalendar/dist/fullcalendar.print.min.css") }} media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("dist/css/AdminLTE.min.css") }}>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href={{ asset("dist/css/skins/skin-blue.min.css") }}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 --><script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 

  <style type="text/css">
   
    .table-sortable tbody tr {
    cursor: move;
}

.alert-validate{
color: red;
}
  </style>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('admin.index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
     
          <!-- Tasks Menu -->
       
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src={{ asset("dist/img/user2-160x160.jpg")}} class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ auth()->user()->name }} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                


                <div class="pull-right">
                  @auth

                      <div >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                 @endauth
                </div>
               
             




              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

<li class="treeview">
          <a href="{{ route('admin.index') }}">
            <i class="fa fa-user"></i>
            <span>users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.index') }}"><i class="fa  fa-list"></i> Liste user</a></li>
         <li><a href="{{ route('admin.create') }}"><i class="fa fa-user-plus"></i> Create user</a></li>
           
          </ul>
        </li>
  <li class="treeview">
          <a href="{{ route('teacher.index') }}">
            <i class="fa fa-group"></i>
            <span>Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('teacher.index') }}"><i class="fa  fa-list"></i> Liste Teacher</a></li>
         <li><a href="{{ route('teacher.create') }}"><i class="fa fa-plus-square"></i> Create Teacher</a></li>
           
          </ul>
        </li>

<li class="treeview">
          <a href="{{ route('annee.index') }}">
            <i class="fa fa-tags"></i>
            <span>Annees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('annee.index') }}"><i class="fa  fa-list"></i> Liste Annee</a></li>
         <li><a href="{{ route('annee.create') }}"><i class="fa fa-plus-square"></i> Create Annee</a></li>
           
          </ul>
        </li>
<li class="treeview">
          <a href="{{ route('level.index') }}">
            <i class="fa fa-pencil-square-o"></i>
            <span>Level</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('level.index') }}"><i class="fa  fa-list"></i> Liste Levels</a></li>
         <li><a href="{{ route('level.create') }}"><i class="fa fa-plus-square"></i> Create Level</a></li>
           
          </ul>
        </li>

<li class="treeview">
          <a href="{{ route('section.index') }}">
            <i class="fa fa-cubes"></i>
            <span>Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('section.index') }}"><i class="fa  fa-list"></i> Liste Section</a></li>
         <li><a href="{{ route('section.create') }}"><i class="fa fa-plus-square"></i> Create Section</a></li>
           
          </ul>
        </li>

<li class="treeview">
          <a href="{{ route('class.index') }}">
            <i class="fa fa-cubes"></i>
            <span>Class</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('class.index') }}"><i class="fa  fa-list"></i> Liste Class</a></li>
         <li><a href="{{ route('class.create') }}"><i class="fa fa-plus-square"></i> Create Class</a></li>
           
          </ul>
        </li>


        <li class="treeview">
          <a href="{{ route('institut.index') }}">
            <i class="fa fa-cubes"></i>
            <span>Instutit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('institut.index') }}"><i class="fa  fa-list"></i> Liste Instutit</a></li>
         <li><a href="{{ route('institut.create') }}"><i class="fa fa-plus-square"></i> Create Instutit</a></li>
           
          </ul>
        </li>


 <li class="treeview">
          <a href="{{ route('formation.index') }}">
            <i class="fa fa-cubes"></i>
            <span>Formation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('formation.index') }}"><i class="fa  fa-list"></i> Liste Formation</a></li>
           <li><a href="{{ route('formation.create') }}"><i class="fa fa-plus-square"></i> Create Formation</a></li>

          </ul>
        </li>
         <li class="treeview">
          <a href="{{ route('visite.index') }}">
            <i class="fa fa-cubes"></i>
            <span>Visite</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('visite.index') }}"><i class="fa  fa-list"></i> Liste Visite</a></li>
           <li><a href="{{ route('visite.create') }}"><i class="fa fa-plus-square"></i> Create Visite</a></li>     
          </ul>
        </li>
 
    <li class="treeview">
         
            
            <span><li><a href="{{ route('emploi.create') }}"><i class="fa  fa-list"></i> Liste emploi</a></li></span>
          
            </span>
         
        
 




      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<br><div class="row">
 <div class="col-md-10" style="    padding-left: 15px;">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">edit Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form action="{{ Route('teacher.update',$teacher->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}">
                  </div>
                </div>
              </div>
 <div class="box-body">
                  <div class="form-group">
                  <label for="prenom" class="col-sm-2 control-label">Prenom</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $teacher->prenom }}">
                  </div>
                </div>
              </div>

               <div class="box-body">
                  <div class="form-group">
                  <label for="cin" class="col-sm-2 control-label">Cin</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="cin" name="cin" value="{{ $teacher->cin }}">
                  </div>
                </div>
              </div>
               <div class="box-body">

                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $teacher->adresse }}">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="natelephoneme" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ $teacher->telephone }}">
                  </div>
                </div>

              </div> 


               <div class="box-body">

                  <div class="form-group">
                  <label for="naissance" class="col-sm-2 control-label">Naissance</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="naissance" name="naissance" value="{{ $teacher->naissance }}">
                  </div>
                </div>

              </div> 

                <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Diplome</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="diplome" name="diplome" value="{{ $teacher->diplome }}">
                  </div>
                </div>
              </div>
               <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Institut origin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="in" name="in" value="{{ $teacher->institut_origin  }}">
                  </div>
                </div>
              </div>

               <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Institut</label>
                  <div class="col-sm-10">
                
                  <select class="form-control " id="institut"    name="institut">
                     @foreach ($instituts as $institut)
                    <option value="{{ $institut->id }}">{{ $institut->name }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>
</div>



 <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Annee</label>
                  <div class="col-sm-10">
                
                  <select class="form-control " id="annee"  name="annee">
                     @foreach ($annees as $annee)
                    <option value="{{ $annee->id }}">{{ $annee->name }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>
</div>
                
              <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
            </form>
          </div>
</div>
</div>
        <div class="row" style="    padding-left: 15px;" >
       <br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Emploit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              
          
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    add event
  </button>
  <br><br>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{ url('emploi') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
   {{ method_field('PATCH') }}
                    <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Class</label>
                  <div class="col-sm-10">
                <input type="hidden" name="teacher" value="{{ $teacher->id }}">
                  <select class="form-control " id="class"    name="class">
                  @foreach ($classe as $class)
                  @foreach ($sections as $sectionclase)
                    @if($sectionclase->id == $class->section_id)
                      
                    @foreach ($levels as $levelclase)
                    @if($levelclase->id == $class->level_id)

                      <option value="{{ $class->id }}">{{ $levelclase->name.$sectionclase->name.$class->name }}</option>

                  
                    @endif
                    @endforeach
                    @endif
                  @endforeach
              @endforeach
                  </select>
                </div>
                </div>
             </div>
             <div class="box-body">
                  <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Select day</label>
                       <div class="col-sm-10">
                   <select class="form-control " id="day"    name="day">
                    

                    <option value="11">Monday</option>
                    <option value="12">Tuesday</option>
                    <option value="13">Wednesday</option>
                    <option value="14">Thursday</option>
                    <option value="15">Friday</option>
                    <option value="16">Saturday</option>
                    <option value="10">Sunday</option>
                    

                   
                  </select>

                  </div>
                </div>
              </div>
             <div class="box-body">
                  <div class="form-group">
                  <label for="start" class="col-sm-2 control-label">Start time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="start" name="start" placeholder="start">
                  </div>
                </div>
              </div>
  <div class="box-body">
                  <div class="form-group">
                  <label for="end" class="col-sm-2 control-label">End time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="end" name="end" placeholder="End">
                  </div>
                </div>
              </div>

                       <div class="box-body">
                  <div class="form-group">
                  <label for="color" class="col-sm-2 control-label">color</label>

                  <div class="col-sm-10">
                    <input type="color" class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color" id="color" placeholder="color" value="{{ old('color') }}">
                     {!! $errors->first('color', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                   
                  </div>
                </div>
</div>


<div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
              </div>
           
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pull-right">Add</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
         </form>
</div>
      </div>
    </div>
  </div>





<br><br>
  <div class="modal fade" id="Modal1">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">edit Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{ url('emploi') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
   {{ method_field('PATCH') }}
                    <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Class</label>
                  <div class="col-sm-10">
                <input type="hidden" name="teacher" value="{{ $teacher->id }}">
                  <select class="form-control " id="class"    name="class">
                  @foreach ($classe as $class)
                  @foreach ($sections as $sectionclase)
                    @if($sectionclase->id == $class->section_id)
                      
                    @foreach ($levels as $levelclase)
                    @if($levelclase->id == $class->level_id)

                      <option value="{{ $class->id }}">{{ $levelclase->name.$sectionclase->name.$class->name }}</option>

                  
                    @endif
                    @endforeach
                    @endif
                  @endforeach
              @endforeach
                  </select>
                </div>
                </div>
             </div>
             <div class="box-body">
                  <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Select day</label>
                       <div class="col-sm-10">
                   <select class="form-control " id="day"    name="day">
                    

                    <option value="11">Monday</option>
                    <option value="12">Tuesday</option>
                    <option value="13">Wednesday</option>
                    <option value="14">Thursday</option>
                    <option value="15">Friday</option>
                    <option value="16">Saturday</option>
                    <option value="10">Sunday</option>
                    

                   
                  </select>

                  </div>
                </div>
              </div>
             <div class="box-body">
                  <div class="form-group">
                  <label for="start" class="col-sm-2 control-label">Start time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="start" name="start" placeholder="start">
                  </div>
                </div>
              </div>
  <div class="box-body">
                  <div class="form-group">
                  <label for="end" class="col-sm-2 control-label">End time</label>

                  <div class="col-sm-10">
                    <input type="time" class="form-control" id="end" name="end" placeholder="End">
                  </div>
                </div>
              </div>

                       <div class="box-body">
                  <div class="form-group">
                  <label for="color" class="col-sm-2 control-label">color</label>

                  <div class="col-sm-10">
                    <input type="color" class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color" id="color" placeholder="color" value="{{ old('color') }}">
                     {!! $errors->first('color', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                   
                  </div>
                </div>
</div>


<div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
              </div>
           
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pull-right">Add</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
         </form>
</div>
      </div>
    </div>
  </div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Edit Emploit</h4>

                
<!--                 <input type="time" class="form-control" name="start_time" id="start_time">
 -->
                
          


<form action="{{ Route('emploi.update',$teacher->id) }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
   {{ method_field('PATCH') }}
                
            
                 <input type="hidden" id="classe" name="classe" >
                 <input type="hidden" id="daye" name="daye" >
                 <input type="hidden" id="starter" name="starter" >
                 <input type="hidden" id="ende" name="ende" >
              </div>
             <div class="box-body">
                  <div class="form-group">
                  <label for="start" class="col-sm-2 control-label">Start time</label>

                  <div class="col-sm-10">
                                   <input type="time" class="form-control" name="start_time" id="start_time">

                  </div>
                </div>
              </div>
  <div class="box-body">
                  <div class="form-group">
                  <label for="end" class="col-sm-2 control-label">End time</label>

                  <div class="col-sm-10">
                <input type="time" class="form-control" name="finish_time" id="finish_time">
                  </div>
                </div>
              </div>

            


<div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
              </div>
           
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pull-right">edit</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
         </form>

  </div>





           
        </div>
    </div>
</div>
       
        <!-- /.col -->
       <!--  <div class="col-md-10"> -->
          <div class="box-body ">
            <div class="form-group">
              <!-- THE CALENDAR -->
              <div id="calendar" name="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
  
      <!-- /.row -->
    
    <!-- /.content -->
</div>


</div>


    </section>




    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->

      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src={{ asset("dist/js/adminlte.min.js") }}></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script src={{ asset("bower_components/moment/moment.js") }}></script>
<script src={{ asset("bower_components/fullcalendar/dist/fullcalendar.min.js") }}></script>


<!-- jQuery 3 -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 --><!-- jQuery UI 1.11.4 -->
<script src={{ asset("bower_components/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Slimscroll -->
<script src={{ asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}></script>
<!-- FastClick -->
<script src={{ asset("bower_components/fastclick/lib/fastclick.js") }}></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src={{ asset("dist/js/demo.js") }}></script>
<!-- fullCalendar -->

<!-- REQUIRED JS SCRIPTS -->
<script type="text/javascript">


  
  $(document).ready(function() {
        $('#example').DataTable();
        $('#example1').DataTable();
     
       
});


    

</script>

<script>
$(document).ready(function($){

});
</script>

<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 10,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
       allDaySlot: false,
           header    : {
        left  : '',
        center: '',
        right : ''
      }, 
      displayEventTime : false,
        businessHours: {
         dow: [0, 1, 2, 3, 4, 5, 6, 7], // Monday - Thursday
         start: '08:00', // start time (8am)
         end: '18:00', // end time (5pm)
     },

   
      
    defaultView: 'basicWeek',

     slotLabelFormat: "HH:mm",
       timeFormat: 'HH:mm',
        eventOverlap: false,
         selectHelper: true,
          selectable: true,
      editable: true,
            
          dayNamesShort: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
      //Random default events
      events    : [
      
     
     @foreach ($emplois as $emploi)
    
     @if($emploi->teacher_id == $teacher->id)

         {

          title          : '{{$emploi->classe}}',
          start          : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->start)->format('H') }}','{{ Carbon\Carbon::parse($emploi->start)->format('i') }}'),
          end            : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->end)->format('H') }}','{{ Carbon\Carbon::parse($emploi->end)->format('i') }}'),
          allDay         : false,
          backgroundColor: '{{$emploi->color}}', //Info (aqua)
          borderColor    : '{{$emploi->color}}' //Info (aqua)
        },
        @endif
      
         @endforeach

      ],
      select: function(start, end, allDay)  
            {
                $('#myModal').modal('show');

                $( "#submit" ).click(function(e) {
                    e.preventDefault();
                    var title = $("#eventName").val();
                    if(title)
                    {
                            calendar.fullCalendar('renderEvent',
                                {
                                    title: title,
                                    start: start,
                                    end: end,
                                    //allDay: allDay
                                },

                        true // make the event "stick"
                        );
                    }   
                    $('#myModal').modal('hide');
                });
                calendar.fullCalendar('unselect');  
            },
  eventClick: function(calEvent, jsEvent, view) {
        $('#start_time').val(moment(calEvent.start).format('HH:mm:ss'));
        $('#finish_time').val(moment(calEvent.end).format('HH:mm:ss'));
        $('#starter').val(moment(calEvent.start).format('HH:mm:ss'));
        $('#ende').val(moment(calEvent.end).format('HH:mm:ss'));
         $('#daye').val(moment(calEvent.start).format('DD'));

        $('#classe').val(calEvent.title);
        $('#editModal').modal();
    },
       views: {
                basic: {
                    columnFormat: 'ddd'
                },
                agenda: {
                    columnFormat: 'ddd'
                },
                week: {
                    columnFormat: 'ddd'
                },
                day: {
                    columnFormat: 'ddd'
                }
            },
      droppable : false, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
      //  copiedEventObject.start           = new Date()
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })
$('#calendar').fullCalendar('changeView',  'agenda', {
  start: '2019-03-10',
  end: '2019-03-17'
});

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>



    <!-- jquery -->




<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>




