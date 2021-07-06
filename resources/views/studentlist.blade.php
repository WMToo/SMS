<div class="card mb-3">
    <img src="https://www.educationcorner.com/images/featured-importance-education.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">List of Students</h5>
      <p class="card-text">All the information about student in the system</p>
    </div>
    
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Opertation</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $students as $student)
        <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->secondName}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>
            <td>
                {{-- <a href="" class="btn btn-sem btn-info">Show</a> --}}
                <a href="{{'/edit/'.$student->id}}" class="btn btn-sem btn-warning">Update</a>
                {{-- <a href="" class="btn btn-sem btn-danger">Delete</a> --}}
            </td>
        </tr> 
        @endforeach  
        </tbody>
  </table>
</div>



