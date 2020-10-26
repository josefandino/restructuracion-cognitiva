@extends('layouts.app')

@section('content')
<div class="pages">

   <div class="chilPages">
      @include('partials.sessions_status')

      <h3 class="text-center">Modelo de Reestructuración cognitiva</h3>
      <div class="text-right mb-3">
         <a class="btn btn-success" href="{{ route('thought.create') }}">
            <i class="fas fa-plus">&nbsp;</i>
            Agregar </a>
      </div>

      <div class="tableBody">

         <table id="students" class="table table-secondary table-striped table-hover table-bordered">
         <thead class="">
            <tr class="text-center border border-dander">
               <th class="">Fecha</th>
               <th class=""><span>A - </span> Eventor activador</th>
               <th class=""><span>B- </span> Pensamiento</th>
               <th class=""><span> </span> Distorción cognitiva</th>
               <th class=""><span>C -</span> Reacción afectiva - conductual </th>
               <th class=""><span>D -</span> Debate</th>
               <th class=""><span>E -</span> Pensamiento alternativo</th>
               <th class="">Acciones</th>
            </tr>
         </thead>
         <tbody class="tableFilas">
            @guest
            <h3 class="text-center bg-warning p-4">NO hay Docentes registrados</h3>                     
            @else
            @foreach ($thought as $t)
               <tr>
               <td class="text-center">{{ $t->created_at->formatLocalized('%H: %M:%S - %A %d %b %Y') }}</td>
                  <td>{{ $t->uno}}</td>
                  <td>{{ $t->dos }}</td>
                  <td>{{ $t->tres }}</td>
                  <td>{{ $t->cuatro }}</td>
                  <td>{{ $t->cinco }}</td>
                  <td>{{ $t->seis }}</td>
               
                  <td>
                  <div class="accions">
   
                     <a class="btn btn-primary" href="{{ route('thought.edit', $t->id) }}"><i class="fas fa-user-edit">&nbsp;</i> </a>
                     
                     <form class="btnDelete" action="{{ route('thought.destroy', $t->id) }}" method="POST">
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
      <div class="pagination">{{ $thought->links() }}</div>
   </div>

</div>

{{-- <div class="bgimg">
   <img src="{{ asset('img/home.jpg') }}" alt="">
</div> --}}

@endsection
