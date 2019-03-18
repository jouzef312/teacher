@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Institut</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Adresse</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Site</th>
                  <th>Fax</th>
               
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($instituts as $institut)
                <tr>
                  <td>{{ $institut->id }}</td>
                  <td class="margin">
                    <img src="{{ url('thumbs/' . $institut->file) }}">  </td>
                  <td>{{ $institut->name  }}</td>
                  <td>{{ $institut->adresse  }}</td>
                  <td>{{ $institut->telephone  }}</td>
                  <td>{{ $institut->email  }}</td>
                  <td>{{ $institut->site  }}</td>
                  <td>{{ $institut->fax  }}</td>
                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('institut.edit',$institut->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('institut.destroy',$institut->id) }}" method="POST">
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