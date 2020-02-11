<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>

<body>

<div class="container">

  <h1>Upload File </h1>
   
  <?php echo $error;?> 

  <form action="upload_file"  enctype="multipart/form-data" method="post" accept-charset="utf-8">

      <div class="form-group">

        <label for="exampleInputFile">Image</label>

        <input type="file"  name = "userfile">

      </div>

      <button type="submit" class="btn btn-success">บันทึก</button>

   </form>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Your Website <?php echo date("Y")?></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>