@extends('dashyout')
@section('content')

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Ajouter un Programme</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                 

                  <form class="row g-3 mt-3 " novalidate action="  " method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Nom du programme</label>
                      <input type="email" name="question" class="form-control" id="yourEmail" required>
                      <label for=""></label>
                    </div><br>
                      <br>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Option</label>                     
                          <input type="text" name="a" class="form-control" id="yourUsername" required>
                      </div>
                      
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Langage de programmation</label>                     
                          <input type="text" name="b" class="form-control" id="yourUsername" required>
                      </div>
                      <div class="row">
                        <div class="row"><br></div>
                        <div class="col">
                            <label for="yourUsername" class="form-label">En cours</label>                     
                              <input type="text" name="c" class="form-control" id="yourUsername" required>
                          </div>
                       
                        <div class="col">
                          <label for="yourUsername" class="form-label">Est parcourue</label>                     
                            <input type="text" name="reponse" class="form-control" placeholder="" id="yourUsername" required>
                        </div>
                      </div>
                   
                  
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Soumettre</button>
                    </div>
                   
                  </form>
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

@endsection