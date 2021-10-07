@extends('layouts.main')


@section('section')
<main>
    
      <div class="p-5 mb-4 bg-light home-hero text-light">
        <div class="container-fluid py-5">
          <div class="wrapper-text mb-3">
            <h1 class="display-5 static-text fw-bold">Let's Learn</h1>
            <h1 class="typing-text display-5 text-danger fw-bold"></h1>
          </div>
          <p class="col-md-8 fs-6 text-light">Website untuk meletakkan catatan pelajaran Matematika, Fisika, Kimia dan Biologi untuk Kelas 10-12 SMA dan SMK. Website ini mungkin akan ada fitur Exercises dan juga Games yang seru.</p>
          <a href="" class="mt-3 btn btn-danger btn-lg" type="button">Learn More</a>
        </div>
      </div>

      <div class="container marketing">
        <h1 class="text-center mt-5 mb-2 fw-bold">Lessons</h1>
        <hr class="rounded-pill m-auto bg-primary mb-4" style="width: 180px; border: 4px solid rgb(238, 27, 27);">
      <div class="row">

        <div class="col-lg-6 mt-4">
          <a href="/lessons?category=matematika">
          <div class="card text-white">
            <img src="/img/math.jpg" alt="matematika">
            <div class="card-img-overlay p-0 align-items-center d-flex" style="">
              <h2 class="card-title bg-danger text-center flex-fill">Matematika</h2>
            </div>
          </div>
          </a>
        </div>

        <div class="col-lg-6 mt-4">
          <a href="/lessons?category=fisika">
            <div class="card text-white">
              <img src="/img/fisika.jpg" alt="fisika" height="310px">
              <div class="card-img-overlay p-0 align-items-center d-flex" style="">
                <h2 class="card-title bg-warning text-center flex-fill text-dark">Fisika</h2>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-6 mt-4">
          <a href="/lessons?category=kimia">
            <div class="card text-white">
              <img src="/img/kimia.jpg" alt="kimia" height="340px">
              <div class="card-img-overlay p-0 align-items-center d-flex" style="">
                <h2 class="card-title bg-success text-center flex-fill">Kimia</h2>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-6 mt-4">
          <a href="/lessons?category=biologi">
            <div class="card text-white">
              <img src="/img/biologi.jpg" alt="biologi">
              <div class="card-img-overlay p-0 align-items-center d-flex" style="">
                <h2 class="card-title bg-info text-center flex-fill text-dark">Biologi</h2>
              </div>
            </div>
          </a>
        </div>
        
      </div>
    </div>
</main>

{{-- <div class="text-center d-flex p-3 flex-column">

    <img src="/img/myNotes.jpg" alt="" width="100%" style="filter: brightness(30%) contrast(90%);">
    <main class="px-3 position-absolute text-white" style="top: 250px;">
      <h1 style="font-size: 3em;">MyNotes Website</h1>
      <p class="lead">Website untuk meletakkan catatan pelajaran Matematika, Fisika, Kimia dan Biologi untuk Kelas 10 - 12 SMA dan SMK. Website ini mungkin akan ada fitur Exercises dan juga Games yang seru.</p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-primary fw-bold">Learn more</a>
      </p>
    </main>
</div> --}}
@endsection
