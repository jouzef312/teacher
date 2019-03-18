@extends('layouts.admin')
 
@section('contenu')
<br>
<div class="row" style="    padding-left: 15px;">

 <div class="col-md-6" >
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Info Teacher</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                   {{ $teacher->name }}
                  </div>
                </div>
              </div>
 <div class="box-body">
                  <div class="form-group">
                  <label for="prenom" class="col-sm-2 control-label">Prenom</label>

                  <div class="col-sm-10">
                   {{ $teacher->prenom }}
                  </div>
                </div>
              </div>

               <div class="box-body">
                  <div class="form-group">
                  <label for="cin" class="col-sm-2 control-label">Cin</label>

                  <div class="col-sm-10">
                    {{ $teacher->cin }}
                  </div>
                </div>
              </div>
               <div class="box-body">

                  <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    {{ $teacher->email }}
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    {{ $teacher->adresse }}
                  </div>
                </div>

              </div> 

               <div class="box-body">

                  <div class="form-group">
                  <label for="natelephoneme" class="col-sm-2 control-label">Telephone</label>

                  <div class="col-sm-10">
                   {{ $teacher->telephone }}
                  </div>
                </div>

              </div> 


               <div class="box-body">

                  <div class="form-group">
                  <label for="naissance" class="col-sm-2 control-label">Naissance</label>

                  <div class="col-sm-10">
                   {{ $teacher->naissance }}
                  </div>
                </div>

              </div> 

                <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Diplome</label>

                  <div class="col-sm-10">
                   {{ $teacher->diplome }}
                  </div>
                </div>
              </div>
               <div class="box-body">
                  <div class="form-group">
                  <label for="diplome" class="col-sm-2 control-label">Institut origin</label>

                  <div class="col-sm-10">
                   {{ $teacher->institut_origin  }}
                  </div>
                </div>
              </div>

               <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Institut</label>
                  <div class="col-sm-10">
                
                 
                     @foreach ($instituts as $institut)
                     @if($institut->id == $teacher->institut_id)
                   {{ $institut->name }}
                    @endif
                    @endforeach
                 
                </div>
                </div>
</div>

 <div class="box-body">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select Annee</label>
                  <div class="col-sm-10">
                
                  
                     @foreach ($annees as $annee)
                     @if($annee->id == $teacher->annee_id)
                 {{ $annee->name }}
                    @endif
                    @endforeach
               
                </div>
                </div>
</div>
</div>

                
             
          </div>
        </div>
<div class="row" style="    padding-left: 15px;" >
         <div class="col-md-10" >
          
<div class="box box-info">
  <div class="box-header with-border">
              <h3 class="box-title">Emploit Teacher</h3>
            </div>
   <div class="box-body ">
            <div class="form-group">
              <!-- THE CALENDAR -->
              <div id="calendar" name="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
</div>


@endsection



@section('event')

  
     @foreach ($emplois as $emploi)
    
     @if($emploi->teacher_id == $teacher->id)

         {

          title          : '{{$emploi->classe}} \n {{ $teacher->name }}',
          start          : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->start)->format('H') }}','{{ Carbon\Carbon::parse($emploi->start)->format('i') }}'),
          end            : new Date(2019,2,{{$emploi->day}},'{{ Carbon\Carbon::parse($emploi->end)->format('H') }}','{{ Carbon\Carbon::parse($emploi->end)->format('i') }}'),
          allDay         : false,
          backgroundColor: '{{$emploi->color}}', //Info (aqua)
          borderColor    : '{{$emploi->color}}' //Info (aqua)
        },
        @endif
      
         @endforeach
@endsection

