@extends('layouts.admin')
 
@section('contenu')
<br>
 <div class="col-md-10">
           <div class="box box-primary">

<div class="box-header with-border">List Class</div>
<a  class="" href="{{ route('class.create') }}"><i class="btn btn-info fa fa-plus-square"></i> </a>
                     <div class="box-body ">
              <table id="example" class="table">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Section</th>
                  <th>level</th>
       
                                   <th>Edite/delete</th>

                
                </thead>
                   @foreach ($classe as $clase)
                <tr>
                  <td>{{ $clase->id }}</td>
                  <td>{{ $clase->name  }}
                     
                  </td>
                  <td>@foreach ($sections as $sectionclase)
                    @if($sectionclase->id == $clase->section_id)
                     {{$sectionclase->name}} 
                    @endif
                 




                  @endforeach
                     
                  </td>
                  <td> @foreach ($levels as $levelclase)
                    @if($levelclase->id == $clase->level_id)
                     {{$levelclase->name}} 
                    @endif
                 




                  @endforeach
                  </td>
                  

             
                
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('class.edit',$clase->id) }}"  class="btn btn-info">Edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('class.destroy',$clase->id) }}" method="POST">
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