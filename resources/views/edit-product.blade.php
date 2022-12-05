<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Prdouct</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Product</h2>
            </div>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter product price">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter product description">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <br>
               
                <button type="submit" class="btn btn-outline-primary rounded-pill">Submit</button>

                <a href="{{url('product-list')}}" class="btn btn-outline-danger rounded-pill">Go Back</a>
            </form>
        </div>
    </div>
</body>
</html>