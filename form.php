<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="App/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="App/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- jQuery -->
  <script src="App/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="App/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="App/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="App/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="App/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>