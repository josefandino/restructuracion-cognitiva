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
          @include('Students._index')
        </main>

      </section>

  </div>   

</div>

<main class="footer">
  @include('includes.footer')
</main>

@endsection
