@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Formation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form action="{{ Route('formation.update',$formation->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $formation->name }}">
                  </div>
                </div>
              </div>
                 <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Date</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date" value="{{ $formation->date }}">
                  </div>
                </div>
              </div>
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


              

                
              <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
            </form>
          </div>
        </div>
@endsection
