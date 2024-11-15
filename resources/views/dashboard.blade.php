<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand">StudentFinder</a>
            <form class="d-flex" role="search">
            <select name='option' class="form-select form-select-sm" aria-label="Select courses">

                <option selected value = "All">Courses</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Accounting">Accounting</option>
                <option value="Entreprenuer">Entrepreneur</option>
                <option value="Business">Business</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Pharmacy">Pharmacy</option>
            </select>
            <input name='search' class="form-control ms-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success ms-2" type="submit">Find</button>
            </form>
        </div>
    </nav>

    

    @if($students)
        <div style="display: flex; flex-wrap: wrap; gap: 25px; padding: 25px;">
            @foreach($students as $student)
                <div class="card" style="width: 18rem">
                <img src="images/fotoprofil.png" class="card-img-top" alt="...">  
                    <div class="card-body">
                    <p class="card-text"><strong>Name :</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                    <p class="card-text"><strong>Email :</strong> {{ $student->email }}</p>
                    <p class="card-text"><strong>Date of Birth :</strong> {{ $student->dob }}</p>
                    <p class="card-text"><strong>Gender :</strong> {{ $student->gender }}</p>
                    <p class="card-text"><strong>Address :</strong> {{ $student->address }}</p>
                    <p class="card-text"><strong>Courses :</strong> {{ $student->jurusan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>