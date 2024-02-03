<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER FORM</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="Container d-flex align-items-center justify-content-center my-4">
    
<fieldset class="p-3 mb-2 bg-light text-dark border border-warning rounded">  
    <legend><h1 class="text-warning Container d-flex align-items-center justify-content-center">EDIT DATA</h1></legend>

    <form class="row g-2 container my-3" action="{{ route('update',$user->id) }}" method="POST"> 
        @csrf
        <div class="col-md-4">
            <label for="inputEmail4" class="form-label">NAME</label>
            <input type="text" class="form-control" name="name" required value="{{$user->name}}">
        </div>
        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">EMAIL</label>
            <input type="email" class="form-control" name="email" required value="{{$user->email}}">
        </div>
        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">CONTACT NUMBER</label>
            <input type="text" class="form-control" name="contact" required value="{{$user->contact}}">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">AGE</label>
            <input type="text" class="form-control" name="age" required value="{{$user->age}}">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">CITY</label>
            <input type="text" class="form-control" name="city" required value="{{$user->city}}">
        </div>
        <div class="col-4">
            <label for="inputAddress" class="form-label">ADDRESS</label>
            <input type="text" class="form-control" name="address" required value="{{$user->address}}">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" name="zip" required value="{{$user->zip}}">
        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-outline-warning Container d-flex align-items-center justify-content-center my-4" value="UPDATE">
        </div>
    </form>
</fieldset>

</body>
</html>
