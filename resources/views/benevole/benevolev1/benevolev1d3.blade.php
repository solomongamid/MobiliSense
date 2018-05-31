@extends('/benevole/mainbenevole')

@section('title', 'Mon espace')



@section('content')

      <main class="maincontent mainuserhp">

        <!-- Header -->
        <div class="row rowbottom">
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
            <h1>Vague 1</h1>
            <h3 id="date"></h3>
          </div>

        </div>

        <div class="row rowbottom">
          <div class="col-md-1 day">
            <img class="moon" src="{{ asset('img/sun.png') }}">
          </div>
          <div class="col-md-3">
            <img height="500px;" src="{{ asset('img/humanbody.png') }}"/>
            <a href="#">
              <img class="circle1" src="{{ asset('img/rond1.png') }}" />
              <span class="sensor">
                <strong>Capteur 1 :</strong><br />
                Jaune<br />
                Nuisance sonore
              </span>
            </a>
            <a href="#">
              <img class="circle4" src="{{ asset('img/rond4.png') }}"/>
              <span class="sensor">
                <strong>Capteur 4 :</strong><br />
                Rouge<br />
                Pollution de l'air
              </span>
            </a>
            <a href="#">
              <img class="circle5" src="{{ asset('img/rond5.png') }}"/>
              <span class="sensor">
                <strong>Capteur 6 :</strong><br />
                Marron<br />
                Rythme cardiaque
              </span>
            </a>
            <a href="#">
              <img class="circle6" src="{{ asset('img/rond6.png') }}"/>
              <span class="sensor">
                <strong>Capteur 6 :</strong><br />
                Marron<br />
                Rythme cardiaque
              </span>
            </a>
          </div>
          <div class="col-md-6">
            <hr class="hr">
            <h3><i class="fas fa-chevron-circle-right" style="font-size:20px;"></i> Matin :</h3>
            <p class="beflist">Réaliser <strong>3 mesures</strong> correctes de votre fonction respiratoire et de votre tension avec les :</p>
            <ul>
              <li><img src="{{ asset('img/rond8.png') }}" />8. Tension-domicile + <img src="{{ asset('img/rond10.png') }}" />10. Smartphone</li>
              <li><img src="{{ asset('img/rond9.png') }}" />9. Respiratoire-dommicile + <img src="{{ asset('img/rond10.png') }}" />10. Smartphone</li>
            </ul>
            <h3><i class="fas fa-chevron-circle-right" style="font-size:20px;"></i> Journée :</h3>
            <p class="beflist"><strong>Portez du lever au coucher :</strong></p>
            <ul>
              <li><img src="{{ asset('img/rond1.png') }}" />1. GPS <span class="grey">led orange</span> + <img src="{{ asset('img/rond2.png') }}" /> 2. Accéléromètre <span class="grey">led verte clignotante</span></li>
              <li class="airbandouliere"><img src="{{ asset('img/rond4.png') }}" />4. Air-bandoulière <span class="grey">led verte clignotante</span></li>
              <li class="airtuyau"><img src="{{ asset('img/rond5.png') }}" />5. Air-tuyau <span class="grey">led verte clignotante</span></li>
              <li><img src="{{ asset('img/rond6.png') }}" />6. Cardio-électrodes <span class="grey">led verte clignotante</span></li>
              <li><img src="{{ asset('img/rond7.png') }}" />7. Tension-mobile</li>
            </ul>
            <p><strong>Répondez</strong> au questionnaire sur le <img src="{{ asset('img/rond11.png') }}" />11. iPhone. <span class="grey">20h30 !</span></p>
            <p><strong>Remplissez</strong> votre carnet de déplacement.</p>
            <h3><i class="fas fa-chevron-circle-right" style="font-size:20px;"></i> Soir :</h3>
            <p class="beflist">Réalisez <strong>3 mesures</strong> correctes de votre fonction respiratoire et de votre tension avec les :</p>
            <ul>
              <li><img src="{{ asset('img/rond8.png') }}" />8. Tension-domicile + <img src="{{ asset('img/rond10.png') }}" />10. Smartphone</li>
              <li><img src="{{ asset('img/rond9.png') }}" />9. Respiratoire-dommicile + <img src="{{ asset('img/rond10.png') }}" />10. Smartphone</li>
            </ul>
          </div>
          <div class="col-md-2">
            <img class="timev1" src="{{ asset('img/flecheright.png') }}" />
            <img class="align-right" src="{{ asset('img/fleche2.png') }}" />
          </div>
        </div>

        <div class="row night">
          <div class="col-md-1 day">
            <img class="moon" src="{{ asset('img/moon.png') }}" />
          </div>
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <h3><i class="fas fa-chevron-circle-right" style="font-size:20px;"></i> Nuit :</h3>
            <p class="beflist"><strong>Rechargez</strong> dans n'importe quelle pièce :</p>
            <ul>
              <li><img src="{{ asset('img/rond1.png') }}" />1. GPS <span class="grey">led orange (fixe ou clignotante)</span></li>
              <li><img src="{{ asset('img/rond7.png') }}" />7. Piles du Tension-mobile</li>
              <li><img src="{{ asset('img/rond10.png') }}" />10. Smartphone</li>
              <li><img src="{{ asset('img/rond11.png') }}" />11. iPhone</li>
            </ul>
            <p class="beflist"><strong>Rechargez</strong> dans la pièce où vous dormez :</p>
            <ul>
              <li class="bruit"><img src="{{ asset('img/rond3.png') }}" />3. Bruit-micro, <span class="red">le voyant doit être vert clignotant</span></li>
              <li class="airbandouliere"><img src="{{ asset('img/rond4.png') }}" />4. Air-bandoulière <span class="grey">led verte clignotante</span></li>
              <li class="airtuyau"><img src="{{ asset('img/rond5.png') }}" />5. Air-tuyau <span class="grey">led verte clignotante</span></li>
            </ul>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row planning">
          <p>
            <i class="far fa-file-pdf"></i> Retrouvez <a href="./files/MobiliSense_Planning.pdf" target="_blank">le planning complet</a><br>
            <i class="far fa-file-pdf"></i> Téléchagez <a href="./files/MobiliSense_Carnet_de_déplacements.pdf.pdf" target="_blank">votre carnet de déplacements</a>
          </p>
        </div>
        <div class="row remerciements">
            <p>
              Un grand MERCI ! <strong>Si besoin, appelez 7 jours / 7</strong><br>
              au <strong>01 44 73 84 56</strong> ou au <strong>06 17 99 21 73</strong>
            </p>
        </div>
      </main>
      <script>
          n =  new Date();
          var tab_jour=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
          y = n.getFullYear();
          var tab_mois=new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
          d = n.getDate();
          document.getElementById("date").innerHTML = "Jour 3 : " + tab_jour[n.getDay()] + " " + d + " " + tab_mois[n.getMonth()] + " " + y;
    </script>
@endsection
