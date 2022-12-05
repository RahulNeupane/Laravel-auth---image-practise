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


            @auth
                <a href="{{url('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
            @endauth

            <form action="{{url('logout')}}" method="get">
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>

            @guest
                <div>
                    <a href="{{url('login')}}" class="btn btn-outline-primary">Login</a>
                    <a href="{{url('register')}}" class="btn btn-outline-secondary">Register</a>
                </div>
            @endguest

            <div>
                <a href="{{url('add-product')}}" class="btn btn-outline-primary rounded-pill" style="margin-top: 39px;">Add Product</a>
            </div>

            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif

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
                    @php
                        $i = 1;   
                    @endphp
                    @foreach($data as $prod)
                    <tr>
                        <td class="pt-5">{{$i++}}</td>
                        <td class="pt-5">{{$prod->name}}</td>
                        <td class="pt-5">Rs. {{$prod->prodprice}}</td>
                        <td class="pt-5">{{$prod->proddesp}}</td>
                        <td><img src="images/{{$prod->prodimage}}" alt="" style="width: 100px; height:100px;"></td>
                        <td class="pt-5"><a href="{{url('edit-product/'.$prod->id)}}" class="btn btn-primary rounded-pill">Edit</a> <a href="{{url('delete-product/'.$prod->id)}}" class="btn btn-danger rounded-pill">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>