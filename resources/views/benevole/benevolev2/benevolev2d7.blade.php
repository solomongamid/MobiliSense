@extends('/benevole/mainbenevole')

@section('title', 'Mon espace')



@section('content')

      <main class="maincontent mainuserhp">

        <!-- Header -->
        <div class="row rowbottom">
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
            <h1>Vague 2</h1>
            <h3 id="date"></h3>
          </div>

        </div>

        <div class="row rowbottom">
          <div class="col-md-1 day">
            <img class="moon" src="{{ asset('img/sun.png') }}">
          </div>
          <div class="col-md-3">
            <img height="500px;" src="{{ asset('img/humanbody.png') }}"/>
          </div>
          <div class="col-md-6">
            <hr class="hr">
            <h3><i class="fas fa-chevron-circle-right" style="font-size:20px;"></i> La récupération du matériel</h3>
            <p class="aligncontentbenevole"><strong>Sur rendez-vous</strong>, un coursier ou un ingénieur d’étude épidémiologique récupérera l’ensemble du matériel qui vous aura été confié à domicile ou dans un autre lieu à votre convenance.</p>
          </div>
          <div class="col-md-2">
            <img class="timev3" src="{{ asset('img/flecheright.png') }}" />
            <img class="align-right" src="{{ asset('img/fleche2.png') }}" />
          </div>
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
          document.getElementById("date").innerHTML = "Jour 7 : " + tab_jour[n.getDay()] + " " + d + " " + tab_mois[n.getMonth()] + " " + y;
    </script>
@endsection
