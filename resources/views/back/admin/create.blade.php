@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('admin') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
               
              </div>
              <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
                <button type="submit" class="btn btn-info pull-right">Sign up</button>
              </div>
            </form>
          </div>
        </div>
@endsection
