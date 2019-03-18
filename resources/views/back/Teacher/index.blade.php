@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-12">
           <div class="box box-primary">

<div class="box-header with-border">List Teacher</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                
                  <th>Name</th>
                  <th>Prenom</th>
                  <th>Cin</th>
                  <th>Naissance</th>
                   <th>Adresse</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Diplome</th>
                  <th>Institut origin</th>

                  <th>Etablissement</th>
                    <th>Annee</th>
               
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($teachers as $teacher)
                <tr>
                  
                  <td><a href="{{ route('teacher.show', $teacher->id) }}">{{ $teacher->name  }}</a></td>
                  <td>{{ $teacher->prenom  }}</td>
                  <td>{{ $teacher->cin  }}</td>
                  <td>{{ $teacher->naissance  }}</td>
                  <td>{{ $teacher->adresse  }}</td>
                  <td>{{ $teacher->telephone  }}</td>
                  <td>{{ $teacher->email  }}</td>
                  <td>{{ $teacher->diplome  }}</td>
                  <td>{{ $teacher->institut_origin  }}</td>
                  <td> @foreach ($instituts as $institusteacher)
                    @if($institusteacher->id == $teacher->annee_id)
                     {{$institusteacher->name}} 
                     @endif
                  @endforeach</td>
                  <td> @foreach ($annees as $anneesteacher)
                    @if($anneesteacher->id == $teacher->institut_id)
                     {{$anneesteacher->name}} 
                     @endif
                  @endforeach</td>

                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('teacher.edit',$teacher->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('teacher.destroy',$teacher->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                

                <button type="submit"  class="btn  btn-danger">Delete</button>
              
            

            </form></li>
  
</ul>

                 
                 

</td>



                </tr>
                @endforeach
                
              </table>
             
            </div>
                

                 

               </div>     

                </div>
@endsection