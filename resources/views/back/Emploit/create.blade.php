@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-12">
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
        <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Teacher</label>
                  <div class="col-sm-10">
                
                  <select class="form-control " id="teacher"    name="teacher">
                     @foreach ($teachers as $teacher)

                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>
             </div>
             <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Class</label>
                  <div class="col-sm-10">
                
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




               
                
              
          
@endsection



@section('event')

  
     @foreach ($emplois as $emploi)
     @foreach ($teachers as $teacher)
     @if($emploi->teacher_id == $teacher->id)

         {

          title          : '{{$emploi->classe}} \n {{ $teacher->name }}',
          start          : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->start)->format('H') }}','{{ Carbon\Carbon::parse($emploi->start)->format('i') }}'),
          end            : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->end)->format('H') }}','{{ Carbon\Carbon::parse($emploi->end)->format('i') }}'),
          allDay         : false,
          backgroundColor: '{{$emploi->color}}', //Info (aqua)
          borderColor    : '{{$emploi->color}}' //Info (aqua)
        },
        @endif
        @endforeach
         @endforeach
@endsection
