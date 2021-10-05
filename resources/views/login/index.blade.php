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
  
            <main class="form-signin mt-3">
            
                <h1 class="mb-3 fw-normal text-center h1">Login Page</h1>
                <i class="fas fa-user-circle my-4 d-flex justify-content-center" style="font-size: 80px"></i>
            
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
  
                  @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session('loginError') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  
                <form action="/login" method="POST" class="mb-3">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>  
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>  
                    @enderror
                  </div>
              
                  <div class="checkbox mb-5">
                    <label>
                      <input type="checkbox" name="remember-me" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
  
                <small>Don't have an account? <a class="text-decoration-none" href="/register">Create Account!</a></small>
            </main>
  
        </div>
    </div>
  
  </div>
  

  {{-- my script --}}
  <script src="/js/script.js"></script>
  <script src="/sweetalert2/dist/sweetalert2.all.min.js"></script>

  
</body>
</html>

