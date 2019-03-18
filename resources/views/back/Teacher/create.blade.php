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
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                  </div>
                </div>
              </div>
            <div class="box-body">
                  <div class="form-group">
                  <label for="prenom" class="col-sm-2 control-label">Prenom</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
                  </div>
                </div>
              </div>

               <div class="box-body">
                  <div class="form-group">
                  <label for="cin" class="col-sm-2 control-label">Cin</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="cin" name="cin" placeholder="cin">
                  </div>
                </div>
              </div>
               <div class="box-body">

                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="natelephoneme" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="telephone">
                  </div>
                </div>

              </div> 


               <div class="box-body">

                  <div class="form-group">
                  <label for="naissance" class="col-sm-2 control-label">Naissance</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="naissance" name="naissance" placeholder="Naissance">
                  </div>
                </div>

              </div> 

                <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Diplome</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="diplome" name="diplome" placeholder="diplome">
                  </div>
                </div>
              </div>


               <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Institut origin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="in" name="in" placeholder="Institut origin">
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
