<?php include 'header.php'?>

<div class="content">
  <p>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form>
  <div class="mb-3">
    <label for="companyname" class="form-label">Company Name</label>
    <input type="text" class="form-control">
   </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Postiton</label>
    <input type="text" class="form-control" id="exampleInputPosition">
  </div>
  <div class="mb-3">
    <label for="Jobdesc" class="form-label">Job Descripition</label>
    <input type="text" class="form-control" id="Jobdesc">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>          
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Manager</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>WIPRO</td>
      <td>Software Developer</td>
      <td>6LPA</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>12LPA</td>
    </tr>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>