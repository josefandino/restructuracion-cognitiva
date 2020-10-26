<div class="col-sm-12">

   @if(session()->get('success'))
     <div class="alert alert-success">
       {{ session()->get('success') }}  
     </div>
   @endif
 </div>

 <div class="jefeBody">


   <div class="headBody">
     <h3 class="text-center display-5">Listado de Estudiantes</h3>
     <div class="btnAdd">
      <a class="btn btn-success" href="{{ route('student.create') }}"> <i class="fas fa-user-plus"></i> Agregar estudiante</a>
     </div>
   </div>

  @include('Partials.sessions_status')
   <div class="tableBody">
     <table id="students" class="table table-secondary table-striped table-hover table-bordered">
       <thead class="">
         <tr class="text-center border border-dander">
            <th class="">ID</th>
            <th class="">Nombre</th>
            <th class="">Apellidos</th>
            <th class="">Documento</th>
            <th class="">F. Nacimiento</th>
            <th class="">Email</th>
            <th class="">Telefono</th>
            <th class="">Pais</th>
            <th class="">Ciudad</th>
            <th class="">Dirección</th>
            {{-- <th class="">Foto</th> --}}
            <th class="">Nota</th>
            <th class="">Comtario</th>
            {{-- <th class="">Estado</th> --}}
            <th class="">Acciones</th>
         </tr>
       </thead>
       <tbody class="tableFilas">
         @guest
         <h3 class="text-center bg-warning p-4">NO hay Estudiantes registrados</h3>                     
         @else
           @foreach ($students as $student)
             <tr>
               <td>{{ $student->id }}</td>
               <td>{{ $student->name }}</td>
               <td>{{ $student->last_name }}</td>
               <td>{{ $student->document }}</td>
               <td>{{ $student->date_of_birth }}</td>
               <td>{{ $student->email }}</td>
               <td>{{ $student->phone }}</td>
               <td>{{ $student->country }}</td>
               <td>{{ $student->city }}</td>
               <td>{{ $student->address }}</td>
               {{-- <td>{{ $student->avatar }}</td> --}}
               <td>{{ $student->note }}</td>
               <td>{{ $student->coment }}</td>
               {{-- <td>
                 <div class="estado">
                       <i class="fas fa-toggle-off text-success"></i>
                       <i class="fas fa-toggle-on text-danger"></i>
                 </div>                                    
               </td> --}}
               <td>
                 <div class="accions">

                   <a class="btn btn-primary" href="{{ route('student.edit', $student->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                   
                   <form class="btnDelete" action="{{ route('student.destroy', $student->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit"><i class="fas fa-trash-alt"></i></button>
                 </form>

                 </div>
               </td>
             </tr>
             </tr>
           @endforeach
         @endguest
         
       </tbody>

   </table>

  </div>
  <div class="pagination">{{ $students->links() }}</div>

 </div>