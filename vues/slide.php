
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
  <img class="ima" src="images/minks10.jpeg" style="width:100%">
  </div>
  
 


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