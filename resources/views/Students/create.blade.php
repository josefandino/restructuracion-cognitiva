@extends('layouts.panel')

@section('content')

<div class="dashboard">
  <div class="childDashboard">

    <section class="sidebar">
      @include('includes.sidebar')
    </section>
      
      <section class="DashboardBody">
        
        <div class=" nav-superior">
            @include('includes.nav_top')
        </div>

        <main class="ctnBody">
          <div class="jefeBody">
            <div class="headBody">
              <h3 class="text-center display-5 bm-3">Agregar Estudiante</h3>
            </div>

            <div class="container center">
              <div class="row">
                 <div class="col-md-6 mx-auto">

                  @include('Partials.sessions_status')
           
                    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @include('Students._form-create')
           
                      <button class="btn btn-success btn-block" type="submit">Agregar estudiante</button>
				<a href="{{ route('student') }}" class="btn btn-danger float-right mt-1"><i class="fas fa-window-close"></i> Cancelar</a>
                    </form>
                 </div>
              </div>
            </div>
            
          </div>
        </main>

      </section>

  </div>   

</div>

<main class="footer">
  @include('includes.footer')
</main>

@endsection
