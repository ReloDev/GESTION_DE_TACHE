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
                  <span class="d-none d-lg-block mt-3 pt-3">Ajouter un Programme</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">



                  <form class="row g-3 mt-3 " novalidate action=" {{route('Programme.store')}} " method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Nom du programme</label><br>
                      <input type="email" name="nom" class="form-control" id="yourEmail" required>
                    </div>
                      <br>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Option</label>           <br>
                        <select name="id_option" id="" class="pt-2 pb-2">
                            <option value=""></option>
                            @foreach ($options as $option )
                              <option value="{{$option->id}}" selected> {{$option->nom}} </option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Langage de programmation</label>    <br>
                        <select name="id_lp" id="" class="pt-2 pb-2">
                            <option value=""></option>
                            @foreach ($lps as $lp )
                              <option value="{{$lp->id}}" selected> {{$lp->nom}} </option>
                            @endforeach
                          </select>
                      </div>

                    <div id="hi">

                          <div id="ble">
                           <div class="col-12" id="pv">
                        <label for="yourUsername" class="form-label">pv</label>   <br>
                        <input type="email" name="pv" class="form-control" id="pv" required value=" 0 ">
                    </div>

                      <div class="col-12" id="px">
                        <label for="yourUsername" class="form-label">px</label>   <br>
                        <input type="email" name="px" class="form-control"  required value=" 0 ">
                    </div>
                      </div>

                    </div>



                      <div class="col-12" >
                        <label for="yourUsername" class="form-label">Note</label>   <br>
                        <textarea name="note" id="" cols="30" rows="10"></textarea>
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
  <script src=" {{ asset('jquery.js') }} " ></script>
  <script src=" {{ asset('jquery.js') }} "></script>
  <script>
    $('#ble').hide()
    $('#pv').hide()
    $('#px').hide()
    $('#hi').hide()
    </script>

@endsection
