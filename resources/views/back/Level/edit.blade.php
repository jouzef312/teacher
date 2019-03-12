@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Level</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form action="{{ Route('level.update',$level->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="name" name="name" value="{{ $level->name }}">
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
