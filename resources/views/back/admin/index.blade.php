@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border"> List user</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th> Edit/Delet </th>
                </thead>
                   @foreach ($user as $uses)
                <tr>
                  <td>{{ $uses->id }}</td>
                  <td>{{ $uses->name  }}</td>
             
                  <td><span >{{ $uses->email }}</span></td>
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('admin.edit',$uses->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('admin.destroy',$uses->id) }}" method="POST">
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