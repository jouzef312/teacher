@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Formation</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Date</th>
                   <th>Etablissement</th>
                    <th>Teacher</th>

               
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($formations as $formation)
                <tr>
                  <td>{{ $formation->id }}</td>
                  <td>{{ $formation->name  }}</td>
                    <td>{{ $formation->date  }}</td>

                      <td> @foreach ($instituts as $institusformation)
                    @if($institusformation->id == $formation->institut_id)
                     {{$institusformation->name}} 
                     @endif
                  @endforeach</td>


                   <td> @foreach ($teachers as $teacherformation)
                    @if($teacherformation->id == $formation->teacher_id)
                     {{$teacherformation->name}} 
                     @endif
                  @endforeach</td>
                     
                     
                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('formation.edit',$formation->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('formation.destroy',$formation->id) }}" method="POST">
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