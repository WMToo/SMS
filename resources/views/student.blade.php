<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student management system</title>
  </head>
  <body>
    @include("navbar")

      @if ($layout == 'index')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">

                </section>
            </div>
        
        </div>
      @elseif ($layout == 'create')
      <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>CNE</label>
                        <input name="cne" class="form-control" type="text" placeholder="Enter CNE">
                    </div>
                    <div class="form-group">
                        <label>first Name</label>
                        <input name="firstName" class="form-control" type="text" placeholder="Enter firstName">
                    </div>
                    <div class="form-group">
                        <label>Second Name</label>
                        <input name="secondName" class="form-control" type="text" placeholder="Enter SecondName">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input name="age" class="form-control" type="text" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input name="speciality" class="form-control" type="text" placeholder="Enter Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="save">
                    <input type="reset" class="btn btn-warning" value="reset">
                </form>
               
            </section>
        </div>
        
        </div> 
      @elseif ($layout == 'show') 
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">

                </section>
            </div>     
        </div> 
      @elseif ($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">
                    <form action="/update/{{$student->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input value="{{$student->cne}}" name="cne" class="form-control" type="text" placeholder="Enter CNE">
                        </div>
                        <div class="form-group">
                            <label>first Name</label>
                            <input value="{{$student->firstName}}"  name="firstName" class="form-control" type="text" placeholder="Enter firstName">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input value="{{$student->secondName}}"  name="secondName" class="form-control" type="text" placeholder="Enter SecondName">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{$student->age}}"  name="age" class="form-control" type="text" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input value="{{$student->speciality}}" name="speciality" class="form-control" type="text" placeholder="Enter Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="update">
                        <input type="reset" class="btn btn-warning" value="reset">
                    </form>
                </section>
            </div>
        </div> 
      @elseif ($layout == 'udpate') 
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">

                </section>
            </div>
        </div>         
        
      @endif
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>