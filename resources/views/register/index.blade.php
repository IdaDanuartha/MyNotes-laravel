<!DOCTYPE html>
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

  <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-5 ">

            <main class="form-register mt-3">
            
                <h1 class="mb-3 fw-normal text-center h1">Register Page</h1>
                <i class="fas fa-user-circle my-4 d-flex justify-content-center" style="font-size: 80px"></i>
            
                <form action="/register" method="POST" class="mb-3">
                    @csrf
                    <div class="grid-form">
                    <div class="form-floating name-reg">
                        <input type="text" name="name" class="form-control mb-3 @error('name')is-invalid @enderror" id="name" placeholder="Full Name" required value="{{ old('name') }}">
                        <label for="name">Full Name</label>
                        @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>  
                        @enderror

                    </div>
                    <div class="form-floating username-reg">
                        <input type="text" name="username" class="form-control mb-3 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>  
                          @enderror
                    </div>
                    </div>

                  <div class="form-floating">
                    <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>  
                      @enderror
                  </div>

                  <div class="form-floating">
                    <input type="password" name="password" class="form-control mb-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>  
                    @enderror
                  </div>
            
                  <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
                </form>

                <small>Have already an account? <a class="text-decoration-none" href="/login">Login now!</a></small>
            </main>

        </div>
    </div>

</div>
  

  {{-- my script --}}
<script src="/js/script.js"></script>
<script src="/sweetalert2/dist/sweetalert2.all.min.js"></script>

  
</body>
</html>
