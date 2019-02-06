@extends('Component.mail')

@section('title')
    Usuario
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2 pt-2">
        <div class="col-md-12">
            <h4 class="text-muted text-center">Registro de usuario</h4>
            <hr class="bg-info">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col"><i class="material-icons">person</i></th>
                    <th scope="col"><i class="material-icons">public</i></th>
                    <th scope="col"><i class="material-icons">delete_sweep</i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Victor eduardo alonso martinez</td>
                    <td>Jurisdicción Sanitaria VII</td>
                    <td><div class="material-icons">delete_sweep</div></td>
                  </tr>
                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection