<!DOCTYPE html>
<html lang="en">
  <?include "encabezado.php"?>
    <body id="page-top">
        <!-- Navigation-->
        <?include "menu.php"?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Deli Juices</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">
                          Deliciosos jugos de diferentes sabores y combinaciones!.</h2>
                        <a class="btn btn-primary" href="#about">COMENCEMOS!</a>
                    </div>
                </div>
            </div>
        <!-- About-->
        <?include "acerca.php"?>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Jugo de Guayaba con limón</h4>
                            <p class="text-black-50 mb-0">
                            Jugo natural, saludable y con la intencion de darle gusto al cliente, con un buena diversidad de sabores, y sobre todo muy rico!.<ol> 
                            <il>-Preparacion y planificacion</il>
                            <il>-Configuracion de puesto </il>
                            <il>-Mantenimiento y limpieza</il>
                           <il> -Educacion y mejora</il></ol>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Zanahoria con limón</h4>
                                    <p class="mb-0 text-white-50">Jugo natural, un poco insual pero con un sabor especial y unico animate a probarlo!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"> Fresa en leche con leche condensada</h4>
                                    <p class="mb-0 text-white-50">Jugo muy delicioso con sabores no tan unicos pero muy delicioso con nosotros, experimentamos con la leche condensada para darle un mejor sabor y darle agrado al cliente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Inscribete para recibir actualizaciones!</h2>
                       
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="Correo electronico" type="correo" placeholder="Ingrese correo electronico" aria-label="Ingrese correo electronico" data-sb-validations="correo, requerido" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notificame!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="correo electronico: requerido">Correo es requerido</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="correo electronico: email">Correo no valido</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href=</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                                      
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error al enviar mensaje!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"
                                  
                                </i>
                                <h4 class="text-uppercase m-0">Dirección</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Cra 95 #8974, Aures II, Medellín,</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Correo</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">jm0307482@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Número</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">(+57) 3017752822</div>
                            </div>
                        </div>
                    </div>
                </div>               
              
              <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Deli Juices 2023</div></footer>
        <script src=></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
     
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at  * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=></script>
      
      
      
    </body>
</html>
