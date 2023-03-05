<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>{{ucfirst($link)}}</title>
</head>

<body>
  <!-- Calling Navbar Component -->
  < x-navbar />

  <!-- Calling Crousel Component -->
  < x-crousel />

  <h1 class="text-center">{{ucfirst($link)}}</h1>

  <hr class="my-5" />

  <!--Section: Content-->
  <section class="mb-5">
      <h4 class="mb-5 text-center"><strong>Facilis consequatur eligendi</strong></h4>

      <div class="row d-flex justify-content-center">
          <div class="col-md-6">
              <form action="createSubmit" method="POST">
                  @csrf
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-4">
                      <div class="col">
                          <div class="form-outline">
                              <input type="text"  name="firstname" id="firstname" class="form-control" />
                              <label class="form-label" for="firstname">First name</label>
                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <input type="text" name="lastname"  id="lastname" class="form-control" />
                              <label class="form-label"  for="lastname">Last name</label>
                          </div>
                      </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                      <input type="email" name="email" id="email" class="form-control" />
                      <label class="form-label"  for="email">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                      <input type="password" name="password" id="password" class="form-control" />
                      <label class="form-label"  for="password">Password</label>
                  </div>



                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                      Sign up
                  </button>

                  <!-- Register buttons -->
                  <div class="text-center">
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                          <i class="fab fa-facebook-f"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1">
                          <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1">
                          <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1">
                          <i class="fab fa-github"></i>
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </section>
  <!--Section: Content-->


  < x-footer />
  <script>
        var page_data = @json($link);
    var btn = document.getElementById(page_data);
    btn.className += " active";
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>