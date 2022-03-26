@extends('template.master')

@section('body')
<div class="container py-5 product-list">
    <div class="navbar justify-content-between">
      <h2>Tourist Spot in Jakarta</h2>
      <form class="form-inline d-flex filter">
        <select class="form-select" aria-label="Default select example">
          <option selected>all city</option>
          <option value="1">Jakarta</option>
          <option value="2">Bandung</option>
          <option value="3">Surabaya</option>
        </select>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
    
    <div class="row pb-5 mb-4">
      @for ($i=0; $i<4; $i++)
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
            <img src="./assets/img/jakarta.png" alt="" class="img-fluid d-block">
            <div class="card-body">
                <h5> <a href="#" class="text-dark"></a>Monas Indonesia</h5>
                <p class="small text-muted font-italic">Starting from</p>
                <p><b>Rp 25.000</b></p>
                <p class="icon-item"><i class="bi bi-calendar"></i> dummy</p> 
                <p class="icon-item"><i class="bi bi-clock"></i> dummy</p>
                <p class="icon-item"><i class="bi bi-geo-alt"></i> dummy</p>
            </div>
            <a class="stretched-link"href=""></a>
        </div>
      </div>
      @endfor
    </div>
@endsection