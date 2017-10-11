<!--Contains the top menus outlook and buttons. -->
<body>
  <div class="header headerBackground">
    <div class="header-nav">
        <nav class="navbar navbar-default " role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=" navbar-header">
              <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target="#fadeNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="shadowing navbar-fixed-top collapse navbar-collapse" id="fadeNavbar">
              <!-- <ul class="nav navbar-nav navbar-left">
                <li><a  style="cursor: pointer;" id="pokeForum">Svenska</a></li>
                <li><a  style="cursor: pointer;" id="news">English</a></li>
              </ul> -->
              <ul class="nav navbar-nav navbar-right">
                <li><a class="navigationMenu" style="cursor: pointer;" id="mainPage">Huvudsida</a></li>
                <li><a class="navigationMenu" style="cursor: pointer;" id="projects">Projekt</a></li>
                <li><a class="navigationMenu" style="cursor: pointer;" id="myCv">Mitt CV</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="jumbotron">
      <h1>Rasmus Lennartsson</h1>
    </div>
  </div>
</body>

<script>
$(document).ready(function(){

  //Header
    $(document).off('click', '#indexPageContainer').on('click', '#mainPage', function(e) {
      e.preventDefault();

      changePageJs($(this).attr('id'));

    });

    $(document).off('click', '#indexPageContainer').on('click', '#projects', function(e) {
      e.preventDefault();

      changePageJs($(this).attr('id'));

    });

    $(document).off('click', '#indexPageContainer').on('click', '#myCv', function(e) {
      e.preventDefault();

      changePageJs($(this).attr('id'));

    });
}); 

function refresh(){
  window.location.reload();
}

//Hides or shows the selected element.
$(document).ready( function (){
  $(document).on('click', '.navigationMenu', function() {
    $('.collapse').toggle();
  });
});

// $(document).ready(function (){
//   $('.navigationMenu').on('click', function(e){
//     console.log("Works");
//     $('.navbar-toggle').toggle(false);
//   });
// });

//Scrolls the window to given element
$(document).ready(function (){
  var nav = $('#indexPageContainer');
  if(nav.length){
    $(document).on('click', '.navigationMenu', function (){
          $('html, body').animate({ 
            scrollTop: $('#indexPageContainer').offset().top 
          }, 1000);
      });
  }else{
    $(document).on('click', '.navbar-right', function (){
      alert('Assigned div got no top or does not contain any element with class/div: #indexPageContainer. Please use another div for this purpose and delete or modify this function.');
    });
  }
});


//Creates an effect where the given element(prefferably header) vill fade out from view and enter as a new color that fades into view.
$(document).ready( function (){
  //Creates a clone of the original element.
  var divClone = $('#fadeNavbar').clone();
  $(window).scroll(function() {
    //Takes the current pixel value based on how far from the window top the scroll is.
    var y = $(this).scrollTop();
    if($(this).scrollTop() > 1 && $(this).scrollTop() <= 500){
      //b compensates the opacity per pixel value based on start opacity.
      var b = (1 * 0.1);
      //Calculates the opacity to decrease current opacity with, per scrolled pixel.
      var a = (1 / ((500 - b) - (1 + b)));
      //Calculates the number of pixels since the activation of the fade out part.
      var n = (y - 1);
      //Sets a new opacity based on the scroll position.
      var opacity = ((1 - (a * n)) + 0.1);
      
      //Safety measure to ensure that the fade stays at exactly the given min fade value at max scroll for function.
      if(opacity <= 0.1){
        opacity = 0.1;
      }else if(opacity >= 1){
        opacity = 1;
      }
      $('#fadeNavbar').css('background', 'rgba(0, 0, 0,'+opacity+'');

    }else if ($(this).scrollTop() > 500 && $(this).scrollTop() <= 1) {
      //b compensates the opacity per pixel value based on start opacity.
      var b = (500 * 0.1);
      //Calculates the opacity to decrease current opacity with, per scrolled pixel.
      var a = ((500 + b) / ((1 + b) - (500 - b)));
      //Calculates the number of pixels since the activation of the fade out part.
      var n = (y - 500);
      //Sets a new opacity based on the scroll position.
      var opacity = (((a * n) / 500) + 0.1)

      //Safety measure to ensure that the fade stays at exactly the given min or max fade value at min/max scroll for function.
      if(opacity <= 0.1){
        opacity = 0.1;
      }else if(opacity >= 0.8){
        opacity = 0.8;
      }
          $('#fadeNavbar').css('background', 'rgba(0, 0, 0,'+opacity+'');

      }else if($(this).scrollTop() < 1){
        //If the scroll position is under given pixel value, replace current modified element with original one.
      $('#fadeNavbar').replaceWith(divClone.clone());
      }
  }); 
});

</script>