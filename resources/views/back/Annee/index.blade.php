@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Années</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                   <th>Start</th>
                    <th>End</th>
                 <th>Edite/delete</th>

                
                </thead>
                   @foreach ($Annees as $Annee)
                <tr>
                  <td>{{ $Annee->id }}</td>
                  <td>{{ $Annee->name  }}</td>
                   <td>{{ $Annee->Start  }}</td>
                    <td>{{ $Annee->End  }}</td>

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('annee.edit',$Annee->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('annee.destroy',$Annee->id) }}" method="POST">
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