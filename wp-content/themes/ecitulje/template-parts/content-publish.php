<div class="d-flex justify-content-center">
  <div class="card p-5 mt-3">
    <form id="form" action="#">

        <h5 class="my-4">Vaši podaci</h5>
        <div class="my-5">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" placeholder="Ime">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" placeholder="Prezime">
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <div class="form-group">
                <label for="adresa">Adresa</label>
                <input type="text" class="form-control" id="adresa" placeholder="Adresa">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="grad">Grad</label>
                <input type="text" class="form-control" id="grad" placeholder="Grad">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="drzava">Država</label>
                <input type="text" class="form-control" id="drzava" placeholder="Država">
              </div>
            </div>
          </div>
        </div>

        <h5 class="my-4">Odabir objave</h5>
        <div class="my-5 ">

          <div class="text-center">
            <label for="">Odaberite tip objave:</label>
            <input type="radio" class="btn-check mx-1" name="vrstaobjave" id="vrstacitulja" autocomplete="off" >
            <label class="btn btn-outline-primary mx-1" for="vrstacitulja">Čitulja</label>
            <input type="radio" class="btn-check mx-1" name="vrstaobjave" id="vrstapomen" autocomplete="off" >
            <label class="btn btn-outline-primary mx-1" for="vrstapomen">Pomen</label>
            <input type="radio" class="btn-check mx-1" name="vrstaobjave" id="vrstaposlednjipozdrav" autocomplete="off" >
            <label class="btn btn-outline-primary mx-1" for="vrstaposlednjipozdrav">Poslednji pozdrav</label>
            <input type="radio" class="btn-check mx-1" name="vrstaobjave" id="vrstainmemoriam" autocomplete="off" >
            <label class="btn btn-outline-primary mx-1" for="vrstainmemoriam">In memoriam</label>
          </div>

          <div class="mt-4 text-center">
            <label for="">Veličina:</label>
 
            <input type="radio" class="btn-check mx-1 velicina" name="velicinaobjave" id="velicinamala" autocomplete="off" value="100">
            <label class="btn btn-outline-primary mx-1" for="velicinamala">Mala (jedna kolona)</label>
      
            <input type="radio" class="btn-check mx-1 velicina" name="velicinaobjave" id="velicinasrednja" autocomplete="off" value="200">
            <label class="btn btn-outline-primary mx-1" for="velicinasrednja">Srednja (dve kolone)</label>

            <input type="radio" class="btn-check mx-1 velicina" name="velicinaobjave" id="velicinavelika" autocomplete="off" value="300">
            <label class="btn btn-outline-primary mx-1" for="velicinavelika">Velika (tri kolone)</label>
          </div>
          <div class="mt-4">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="naglasenaObjava">
              <label class="form-check-label" for="naglasenaObjava">Naglašena objava (dupli okvir)</label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="istaknutaObjava">
              <label class="form-check-label" for="istaknutaObjava">Istaknuta objava (na početnoj stranici 7 dana)</label>
            </div>
          </div>
        </div>

        <h5 class="my-4">Sadržaj objave</h5>
        <div class="my-5">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" placeholder="Ime">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" placeholder="Prezime">
              </div>
            </div>
          </div>
          
        </div>

        <h5 class="my-4">Plaćanje</h5>
        <div class="my-5">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" placeholder="Ime">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" placeholder="Prezime">
              </div>
            </div>
          </div>
        </div>

    </form>
    <p>Ukupno: <span id="cena"></span></p>
  </div>
</div>
