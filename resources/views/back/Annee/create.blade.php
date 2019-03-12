@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Année</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('annee') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Start</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="start" name="start" placeholder="start">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">End</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="end" name="end" placeholder="end">
                  </div>
                </div>

                
              <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
            </form>
          </div>
        </div>
@endsection
