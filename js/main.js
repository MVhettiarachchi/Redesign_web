function myNavFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


  $(document).on("click", ".toggle-text-button", function() {


    if ($(this).text() == "Read More") {
  
      $(this).text("Read Less");
      
      // Use a jquery selector using the `.attr()` of the link
      $("#toggle-text-" + $(this).attr("toggle-text")).slideDown();
  
    } else {
  
      $(this).text("Read More");
      
      // Use a jquery selector using the `.attr()` of the link
      $("#toggle-text-" + $(this).attr("toggle-text")).slideUp();
    
    }
  
  });



    const responsive = {
        0: {
            items: 1
        },
        320: {
            items: 1
        },
        560: {
            items: 2
        },
        960: {
            items: 3
        }
    }



    $(document).ready(function () {

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    /** click event on toggle menu */
    $toggleCollapse.click(function () {
        $nav.toggleClass('collapse');
    })

    // owl-crousel for blog
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive: responsive
    });


    // click to scroll top
    $('.move-up span').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    })

    // AOS Instance
    AOS.init();

    });

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}


$(document).ready(function () {
    $('#nav li').hover(
    function () {
        //show submenu
        $('ul', this).slideDown("fast");
    }, function () {
        //hide submenu
        $('ul', this).slideUp("fast");
    });
});

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}





  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }





const searchInput = document.querySelector('#search input');
const searchIcon = document.querySelector('#search svg');

searchInput.onkeyup = (event) => {
  if (event.keyCode === 13) {
    openSearchPage();
  }
};

searchIcon.onclick = openSearchPage;

function openSearchPage() {
  const query = searchInput.value;
    // document.location.href = `/search/${query}`;
  alert(query);
}

