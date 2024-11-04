<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration</h3>
              <form method="POST" action="{{route('register.post')}}">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div data-mdb-input-init class="form-outline">
                      <input type="text" name="firstName" id="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div data-mdb-input-init class="form-outline datepicker w-100">
                      <input type="date" class="form-control form-control-lg" id="birthdayDate" name="birthdayDate" />
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="female" />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="gender "
                        value="male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">

                    <div data-mdb-input-init class="form-outline">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div data-mdb-input-init class="form-outline">
                      <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-12 pb-2">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">

                    <label class="form-label select-label" for="selectjob"></label>
                    <select class="select form-control-lg" id="selectjob" name="selectjob">
                      <option selected disabled>Status</option>
                      <option value="student">Student</option>
                      <option value="webdeveloper">Web Developer</option>
                      <option value="dataengineer">Data Engineer</option>
                      <option value="systemanalis">System Analyst</option>
                      <option value="promtengineer">Promt Engineer</option>
                    </select>

                  </div>
                </div>

                <div class="mt-4 pt-2">
                  <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet" />
  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css"
    rel="stylesheet" />

  <!-- MDB -->
  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>