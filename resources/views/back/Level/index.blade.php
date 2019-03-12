@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Level</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
               
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($levels as $level)
                <tr>
                  <td>{{ $level->id }}</td>
                  <td>{{ $level->name  }}</td>
                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('level.edit',$level->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('level.destroy',$level->id) }}" method="POST">
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