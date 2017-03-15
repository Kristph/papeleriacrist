@extends('layout')

@section('content')
	
	<div class="row">
          <div class="col s1 offset-s11 " style="margin-top: 20px">
            <a class="btn-floating red accent-2" href="/storage/reg"><i class="material-icons">add</i></a>
          </div>
        </div>
        <div class="row">
          <div class="col s8 offset-s2 center-align ">
            
                <table>
                <thead>
                  <tr>
                      <th data-field="id">Nombre</th>
                      <th data-field="name">Cantidad</th>
                      <th data-field="price">Precio</th>
                      <th data-field="price"></th>
                  </tr>
                </thead>
                <tbody>
              
                  <tr>
                    <td>Ejemplo</td>
                    <td>10</td>
                    <td>$50.00</td>
                    <td> 
                      <a class="btn-floating red accent-2" href=""><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
               
               </tbody>
               </table>
          </div>
      </div>

@stop