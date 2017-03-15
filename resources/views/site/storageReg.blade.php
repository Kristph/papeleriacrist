@extends('layout')

@section('content')

<div class="row " style="margin-top: 50px">
            <form class="col s8 offset-s3">
              <div class="row">
                <div class="input-field col s4">
                  <input id="nombre" type="text" class="validate">
                  <label for="nombre">Nombre</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <input id="cantidad" type="text" class="validate">
                  <label for="cantidad">Cantidad</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input id="precio" type="password" class="validate">
                  <label for="precio">Precio</label>
                </div>
              </div>
              <div class="row">
                <div class="col s3 offset-s2 center-align">
                    <button class="btn red accent-2" type="submit" name="action">
                        Enviar<i class="material-icons right">send</i>
                    </button>
                </div>
              </div>
            </form>
        </div>

@stop