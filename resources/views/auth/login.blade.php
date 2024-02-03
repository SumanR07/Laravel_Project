<!DOCTYPE html>
<html>
<head>
    <title>Login</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="Container d-flex align-items-center justify-content-center my-4">
    
    <fieldset class="p-3 mb-2 bg-light text-dark border border-warning rounded"> 
        <legend><h1>Login</h1></legend>
        @if ($errors->any())
            <div>
                <strong>Error:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <label for="name">NAME:</label><br>
        <input type="text" id="email" name="name" required><br><br>
        <div class="col-10">
    <label  for="email">EMAIL: </label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="email" class="form-control" id="autoSizingInputGroup" placeholder="Useremail" name ="email">
    </div>
  </div> 
  <br><br>
        <button class="btn btn-outline-success Container d-flex align-items-center justify-content-center my-4" type="submit">Login</button>
    </form>
</body>
</html>
