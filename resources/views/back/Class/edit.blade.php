@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Section</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form action="{{ Route('section.update',$section->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $section->name }}">
                  </div>
                </div>

          <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Level</label>
                  <div class="col-sm-10">
                
                  <select class="form-control " id="level[]"  multiple="multiple"  name="level[]">
                     @foreach ($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                    

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
