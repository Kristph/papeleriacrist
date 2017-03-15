@extends('layout')

@section('content')
	
	<div class="row " style="margin-top: 50px">
	    <div class="col-md-12">
	    	<h1>Esta es la sección de usuarios</h1>
	    </div>
	</div>
	<div class="row">
          <div class="col s1 offset-s11 " style="margin-top: 20px">
            <a class="btn-floating red accent-2" href="/users/reg"><i class="material-icons">add</i></a>
          </div>
        </div>
        <div class="row">
          <div class="col s8 offset-s2 center-align ">
                <div class="col s6 center-align">
                    <div class="card #e57373 red lighten-2">
                      <div class="card-content white-text">
                        <span class="card-title"> Nombre Apellido</span>
                        <p>Usuario: User'</p>
                      </div>
                      <div class="card-action #ffebee red lighten-5">
                        <a class="btn-floating red accent-2" href=""><i class="material-icons">mode_edit</i></a>
                        <a class="btn-floating red accent-2" href=""><i class="material-icons">delete</i></a>
                      </div>
                    </div>
                  </div>
          </div>
      </div>
@stop