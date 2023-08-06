@extends('common.layouts.layout')

@section('contents')



<h1 class="display-4 "> <img src="../../../public/iconos/informacion.png" alt=""> Preguntas frecuentes </h1>

<article>
    <section>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cómo puedo comprar libros y cómics en su página?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Puedes realizar compras en nuestra página agregando los productos que desees al carrito de
                            compras y siguiendo el proceso de pago.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Qué métodos de pago aceptan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Aceptamos tarjetas de crédito y débito, así como pagos a través de servicios de pago en línea
                            como PayPal.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cuál es el tiempo estimado de entrega de los pedidos?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>El tiempo estimado de entrega puede variar según tu ubicación, pero generalmente entregamos en
                            un plazo de 3 a 7 días hábiles dentro del territorio nacional.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Hacen envíos internacionales?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Sí, realizamos envíos internacionales a varios países. Los tiempos de entrega pueden variar
                            según la ubicación.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Cuál es su política de devoluciones?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Aceptamos devoluciones dentro de los 30 días posteriores a la entrega, siempre y cuando los
                            productos estén en condiciones originales y sin usar. Consulta nuestra página de políticas
                            para obtener más detalles.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        ¿Tienen algún programa de membresía o descuentos para clientes frecuentes?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Sí, ofrecemos un programa de membresía para clientes frecuentes que incluye descuentos
                            especiales, promociones exclusivas y beneficios adicionales.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</article>




@endsection