
<style>
  * {box-sizing: border-box;}
  .mySlid {display: none;}
  .ima {vertical-align: middle;
      height:600px;

}

.pantouroo{
    width:90%;
    margin-left: 2.3vw;
    position: relative;
    margin: auto;
    margin-top:7vw;
  }
  

  .dott {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #3568e8;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .actives {
    background-color: #fdb219 !important;
  }

  .fadee {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  @media all and (min-width:601px) and (max-width:649px){
      .pantouroo{
          margin-top:15vw !important;
        }
  }
  @media all and (min-width:377px) and (max-width:650px){
          .pantouroo{
              margin-top:40vw;
          }
  }
  @media all and (min-width:0px) and (max-width:376px){
          .pantouroo{
              margin-top:50vw;
          }
  }
      
  </style>
  </head>

  
  <div class="pantouroo">
  

  
  <div class="mySlid fadee">
  <img class="ima" src="../images/min4.jpeg" style="width:100%">
  </div>
    
  <div class="mySlid fadee">
  <img class="ima" src="../images/min6.jpeg" style="width:100%">
  </div>
  
 <p>    
 Véritable kicker, Mink's aime la compétition. Il décide de se mesurer aux autres en participant à plusieurs concours de rap et projets comme Challenge Vacances, Mboa Come Test, NSC3, AKDMY, MTN Make The Music et Cameroun Hip Hop Talent Search qui lui permettent de se faire un nom et lui donnent l'opportunité d'intégrer le label ACH4LIFE.
Mink's s'inspire des faits de société et décrit avec humour ce qui se passe autour de lui. Il est l'un des précurseurs de la trap music à la camerounaise avec une nouvelle vague d'artistes pétris de talents.
Excellant en story-telling avec une bonne dose d'humour il est à la fois, blagueur, sérieux, joyeux et mélancolique. Il est difficile de classer Mink's dans un style.
Sa diction, son écriture entre le comique et la satire, son aisance sur scène lui ont permis de se faire une place parmi les plus grands. Mink's est l'auteur de plusieurs singles à succès et d'une dizaine de collaborations en Afrique et en Europe lui ont permis de cumuler plusieurs millions de vues sur youtube.
</p>


  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dott"></span> 
    
  </div>
  
  <script>
  var slideIndexs = 0;
  showSlidese();
  
  function showSlidese() {
    var data;
    var slidess = document.getElementsByClassName("mySlid");
    var dott = document.getElementsByClassName("dott");
    for (y = 0; y < slidess.length; y++) {
      slidess[y].style.display = "none";  
    }
    slideIndexs++;
    if (slideIndexs > slidess.length) {slideIndexs = 1}    
    for (y = 0; y < dott.length; y++) {
      dott[y].className = dott[y].className.replace("actives","");
    }
    slidess[slideIndexs-1].style.display = "block";  
    dott[slideIndexs-1].className += "actives";
    setTimeout(showSlidese, 2000); // Change image every 2 seconds
  }
  </script>
  <style>
      
  </style>
  </body>
  </html>   