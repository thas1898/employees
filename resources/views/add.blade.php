@extends("themes")

@section("content")

    <h1><center><b>ADD EMPLOYEE</b></center></h1>
    <br><br>
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12">

    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Phone number</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-success">Submit</button></td>
        </tr>
    </table>
    </div></div></div>

@endsection