<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Tailwind css --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- my css --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>MyNotes | {{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')

      <div class="container">
        @yield('container')
      </div>

  

        <footer class="pt-5 bg-dark" style="margin-top: 180px;">
          <div class="container">
          <div class="row">
            <div class="col-2">
              <h5 class="text-bold text-light">Category</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Matematika</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fisika</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kimia</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Biologi</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5  class="text-bold text-light">Author</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Danuartha</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">???</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5  class="text-bold text-light">More</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-muted">About</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Site Map</a></li>
              </ul>
            </div>
      
            {{-- <div class="col-4 offset-1 text-light">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div> --}}
      
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p class="text-center text-muted">Copyright © 2021. MyNotes | Built by <a href="" class="text-decoration-none text-light text-bold">Danuartha</a></p>
            <ul class="list-unstyled d-flex text-light">
              <li class="ms-4"><a href="https://www.youtube.com/channel/UCBffIZcqjFU0KkGWxkJ3rlw" class="text-light fs-4 sosmed"><i class="fab fa-youtube"></i></a></li>
              <li class="ms-4"><a href="https://www.instagram.com/danuartha_1418/" class="text-light fs-4 sosmed"><i class="fab fa-instagram"></i></a></li>
              <li class="ms-4"><a href="https://github.com/IdaDanuartha" class="text-light fs-4 sosmed"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
        </div>
        </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    {{-- my script --}}
    <script src="/js/script.js"></script>
    <script src="/sweetalert2/dist/sweetalert2.all.min.js"></script>

  </body>
</html>