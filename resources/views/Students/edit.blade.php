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
              <h3 class="text-center display-5 bm-3">Editar Estudiante</h3>
            </div>

            <div class="container center">
              <div class="row">
                 <div class="col-md-6 mx-auto">

                  @include('Partials.sessions_status')

                  @include('Students._form-edit')
           
              
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
