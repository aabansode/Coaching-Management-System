<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/index/">Home</a></li>
            <li class="active"><a href="/registration/">Registration</a></li>
        </ul>

    </div>
</nav>

<div class="container">
    <h2></h2>
    <div class="row">
        <form method="post" action="{{url('test')}}" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label class="control-label col-sm-4" for="student_name">Student Name : </label>
                <div class="col-sm-4">
                    <input type="text" name="name" class="form-control" id="product_name"
                           placeholder="Enter Student Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="roll">Roll: </label>
                <div class="col-sm-4">
                    <input type="text" name="roll" class="form-control" id="price"
                           placeholder="Enter roll">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="class">Class: </label>
                <div class="col-sm-4">
                    <input type="text" name="class" class="form-control" id="quantity"
                           placeholder="Enter Class">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="phone_number">Phone Number: </label>
                <div class="col-sm-4">
                    <input type="text" name="phone_number" class="form-control" id="description"
                           placeholder="Enter Phone Number">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="image">Image: </label>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control" id="picture"
                    >
                </div>
            </div>


            <div class="col-sm-offset-4 col-sm-4">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
        </form>
    </div>
</div>


</body>


</html>