<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <form class="row g-3">
      <div class="row">
        <div class="col">
        <label for="inputFirstname4" class="form-label">Firstname</label>
          <input type="text" class="form-control"  aria-label="First name">
        </div>
        <div class="col">
        <label for="inputLastname4" class="form-label">Lastname</label>
          <input type="text" class="form-control"  aria-label="Last name">
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-4">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
      <div class="col-md-6">
        <label for="inputBirthdate" class="form-label">Birthdate</label>
        <input type="date" class="form-control" id="inputBirthdate">
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="col-12 d-flex justify-content-center">
      <button type="submit" class="btn btn-primary custom-btn mb-5 mt-5">ADD</button>
      </div>
    </form>
  </div>

  <div class="form-container p-5 bg-light rounded shadow">
    <table class="table table-primary">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">First_Name</th>
          <th scope="col">Last_Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Birthdate</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
cdn.jsdelivr.net