@extends('main_body')

@section('title')
    Admin Panel
@endsection

@section('OuterInclude')

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
@endsection

@section('ContentOfBody')
    <h1>Hello</h1>


    <div class="row">
        <div class="span6"></div>
        <div class="span6">
            <div class="well">
                <h5>Add items</h5><br/>
                Fill all the fields to add items<br/><br/><br/>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Price</label>
                        <div class="controls">
                            <input type="text" name="price">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Quantity</label>
                        <div class="controls">
                            <input type="text" name="quantity">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Image</label>
                        <div class="controls">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>

                    <div class="controls">
                        <button type="submit" name="submit" class="btn block">Add</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="span1"> &nbsp;</div>

    </div>
@endsection