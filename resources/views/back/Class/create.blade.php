@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Class</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('class') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"  value="{{ old('name') }}" id="name" name="name" placeholder="name">
                      {!! $errors->first('name', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>

                        </div>
 <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Section</label>
                  <div class="col-sm-10">
                
                  <select class="form-control dynamic {{ $errors->has('section') ? 'is-invalid' : '' }}" " id="section"    name="section">
                     <option>Please choose section </option>
                     @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                    

                    @endforeach
                  </select>
                   {!! $errors->first('section', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                </div>
                </div>
</div>



 <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Level</label>
                  <div class="col-sm-10">
                
                  <select class="form-control " id="level"    name="level">
                    <option>Please choose section first</option>
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
@endsection
