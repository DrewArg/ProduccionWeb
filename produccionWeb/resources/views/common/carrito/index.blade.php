@extends('common.layouts.layout')

@section('contents')
    <div class="carrito_main">
        <div class="accordion carrito_main-left" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Titulo <span>Info. productos</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic reiciendis reprehenderit, sunt
                        sed voluptas assumenda minus quam molestias illo, nemo, velit eligendi corrupti doloribus
                        dolor neque impedit quaerat. Fuga, doloribus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Titulo <span>Info. productos</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Lenguaje: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <p>Género: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <p>Autor: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <p>Precio: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        <p>Fecha de Compra: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Titulo <span>Info. productos</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, vitae asperiores
                        assumenda sit sint recusandae ipsum voluptatem numquam, dolores voluptatibus totam! Nobis ad
                        minus reiciendis id iusto sed error soluta?
                    </div>
                </div>
            </div>
        </div>
        <div class="ticket">
            <div class="ticket-img"></div>
            <div class="ticket-table">
                <table class="table table-light table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Valor Unitario</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem</td>
                        <td><span>-</span> 1 <span>+</span></td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lorem</td>
                        <td><span>-</span> 2 <span>+</span></td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lorem</td>
                        <td><span>-</span> 3 <span>+</span></td>
                        <td>2000</td>
                    </tr>
                    </tbody>
                </table>

                <div class="ticket-resumen">
                    <p>Precio: $ 9 500 </p>
                    <p>IVA: $ 1 995</p>
                    <p>Total: $ 11 495</p>
                </div>

                <div class="dropdown">
                    <p>Enviar a: Pivet Drive 4</p>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Direcciones
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Avenida Siempre Viva 742</a></li>
                        <li><a class="dropdown-item" href="#">Pivet Drive 4</a></li>
                    </ul>
                </div>

                <div class="ticket-botonera">
                    <button type="button" class="btn btn-danger">Vaciar</button>
                    <button type="button" class="btn btn-success">Comprar!</button>
                </div>

            </div>
        </div>
    </div>
@endsection
