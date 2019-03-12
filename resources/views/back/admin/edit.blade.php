@extends('layouts.admin') 
@section('contenu')
     <br>
 <div class="col-md-10">             
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">edit User</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
             <form action="{{ Route('admin.update',$admin->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
           
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ $admin->name }}">
                   
                  </div>
                </div>
</div>

<div class="box-body">
                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ $admin->email }}">
                   
                  </div>
                </div>
               </div>




              <div class="box-body">
                   <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ $admin->password }}">
                  </div>
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