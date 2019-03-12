@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Section</div>

                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
               <td> Level </td>
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($sections as $section)
                <tr>
                  <td>{{ $section->id }}</td>
                  <td>{{ $section->name  }}</td>
                  <td> 
                     @foreach ($section->Levels()->get() as $levelsection)


                     {{$levelsection->name}} ,
                    
                 




                  @endforeach

                  </td>
                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('section.edit',$section->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('section.destroy',$section->id) }}" method="POST">
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