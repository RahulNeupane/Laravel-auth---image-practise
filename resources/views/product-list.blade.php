<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px; text-align:center;" >
        <div class="row">
            <div class="col-md-12">
                <h2>Product Listing Application</h2>
                <h3>Welcome</h3>
            </div>

            <div>
                <a href="{{url('add-product')}}" class="btn btn-outline-primary rounded-pill" style="margin-top: 39px;">Add Product</a>
            </div>

            <table class="table" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anoop Shrestha</td>
                        <td>90</td>
                        <td>babal</td>
                        <td></td>
                        <td><a href="{{url('edit-product')}}" class="btn btn-primary rounded-pill">Edit</a> <a href="" class="btn btn-danger rounded-pill">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>