@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Visite</div>

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
                   @foreach ($visites as $visite)
                <tr>
                  <td>{{ $visite->id }}</td>
                  <td>{{ $visite->name  }}</td>
                  <td>{{ $visite->date  }}</td>

                      <td> @foreach ($instituts as $institusvisite)
                    @if($institusvisite->id == $visite->institut_id)
                     {{$institusvisite->name}} 
                     @endif
                  @endforeach</td>


                   <td> @foreach ($teachers as $teachervisite)
                    @if($teachervisite->id == $visite->teacher_id)
                     {{$teachervisite->name}} 
                     @endif
                  @endforeach</td>

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('visite.edit',$visite->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('visite.destroy',$visite->id) }}" method="POST">
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