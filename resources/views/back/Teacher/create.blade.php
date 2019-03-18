@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('teacher') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="name"  value="{{ old('name') }}">
                     {!! $errors->first('name', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>
              </div>
            <div class="box-body">
                  <div class="form-group">
                  <label for="prenom" class="col-sm-2 control-label">Prenom</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" id="prenom" name="prenom" placeholder="Prenom" value="{{ old('prenom') }}">
                      {!! $errors->first('prenom', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>
              </div>

               <div class="box-body">
                  <div class="form-group">
                  <label for="cin" class="col-sm-2 control-label">Cin</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control {{ $errors->has('cin') ? 'is-invalid' : '' }}" min="10000000" max="99999999" id="cin" name="cin" placeholder="cin" value="{{ old('cin') }}">
                      {!! $errors->first('cin', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>
              </div>
               <div class="box-body">

                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                      {!! $errors->first('email', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}" id="adresse" name="adresse" placeholder="adresse" value="{{ old('adresse') }}">
                      {!! $errors->first('adresse', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="natelephoneme" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                    <input type="tel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" id="telephone" name="telephone" placeholder="telephone" value="{{ old('telephone') }}">
                      {!! $errors->first('telephone', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>

              </div> 


               <div class="box-body">

                  <div class="form-group">
                  <label for="naissance" class="col-sm-2 control-label">Naissance</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control {{ $errors->has('naissance') ? 'is-invalid' : '' }}" id="naissance" name="naissance" placeholder="Naissance" value="{{ old('naissance') }}">
                      {!! $errors->first('naissance', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>

              </div> 

                <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Diplome</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('diplome') ? 'is-invalid' : '' }}" id="diplome" name="diplome" placeholder="diplome" value="{{ old('diplome') }}">
                      {!! $errors->first('diplome', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
                  </div>
                </div>
              </div>


               <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Institut origin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control {{ $errors->has('in') ? 'is-invalid' : '' }}" id="in" name="in" placeholder="Institut origin" value="{{ old('in') }}"> 
                      {!! $errors->first('in', '<div class="alert-validate" data-validate=":message">:message</div>') !!}
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
@endsection
