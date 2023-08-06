
@extends('common.layouts.layout')

@section('contents')




<div class="my-5 p-4 border border-black rounded-3 container ">



 <div class="col-12 mb-3">

    <h2>Contacto</h2>

 </div>





    <form class="row g-4">




        <div class="col-md-4 mb-3">

            <label for="formGroupExampleInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">



        </div>


        <div class="col-md-4 mb-3">

            <label for="formGroupExampleInput" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Apellido">



        </div>



        <div class="col-md-4 mb-3">

            <label for="formGroupExampleInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="ejemplo@ejemplo.com">



        </div>






        <div class="col-md-12">

            <label for="exampleFormControlTextarea1" class="form-label fs-4">En que podemos ayudarte?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>


        </div>





        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Enviar consulta</button>
          </div>


</form>

</div>

@endsection