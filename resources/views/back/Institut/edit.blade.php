@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Institut</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form action="{{ Route('institut.update',$institut->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
             <!--  <div class="box-body">
  <div class="form-group">
                   <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                    <input type="file" name="file" id="file">

                 
                </div>
</div> -->
              <div class="box-body">

                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $institut->name }}">
                  </div>
                </div>

              </div> 


               <div class="box-body">

                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $institut->email }}">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" value="{{ $institut->adresse }}">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="natelephoneme" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="telephone" value="{{ $institut->telephone }}">
                  </div>
                </div>

              </div> 
               <div class="box-body">

                  <div class="form-group">
                  <label for="site" class="col-sm-2 control-label">Site</label>

                  <div class="col-sm-10">
                    <input type="url" class="form-control" id="site" name="site" placeholder="site" value="{{ $institut->site }}">
                  </div>
                </div>

              </div> 
               <div class="box-body">

                  <div class="form-group">
                  <label for="fax" class="col-sm-2 control-label">Fax</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="fax" name="fax" placeholder="fax" value="{{ $institut->fax }}">
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
