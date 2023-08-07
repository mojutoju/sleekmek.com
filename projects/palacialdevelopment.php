<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SleekMek Group Projects  </title>
    <!-- MDB icon -->
    <link rel="icon" href="/img/logo.jpg" type="image/jpg" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
       <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
    <!-- Google Fonts Roboto -->
   
    <!-- MDB -->
    <link rel="stylesheet" href="/css/mdb.min.css" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Custom styles -->
    
    <style>
    
    html{
        scroll-behavior: smooth;
    }
      
  body{
      font-family: 'Barlow Semi Condensed';
     
  }
  
          .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 99999;
          top: 0;
          right: 0;
          background-color: white;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 18px;
          color: black;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #697f2a;
          background:white;
        }
        
        .sidenav .closebtn:hover {
          color: #fff;
          background:transparent;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        @media  screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        
        .logo-wrapper img {
    max-width: 164px;
    max-height: 120px;
}
        .support-info{
            color:black;
        }
        
        .masthead {
  height: 60vh;
  min-height: 500px;
  background-image: url('projectsimg/project11/p11.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


     .mastheads {
  height: 80vh;
  min-height: 500px;
  background-image: url('https://images.pexels.com/photos/2138126/pexels-photo-2138126.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


/*********************** Demo - 1 *******************/
.box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
body{background-color:#f1f1f2}
.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}
.box1 .icon,.box1 .title{margin:0;position:absolute}
.box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
.box1:after{top:auto;bottom:0;transform-origin:0 100%}
.box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
.box1 img{height:auto;transform:scale(1) rotate(0)}
.box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
.box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
.box1:hover .title{opacity:1;transform:scale(1)}
.box1 .icon{padding:7px 5px;list-style:none;background:orange;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
.box1:hover .icon{top:0}
.box1 .icon li{display:block;margin:10px 0}
.box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
.box2 .icon li a,.box3 .icon a:hover,.box4 .icon li a:hover,.box5 .icon li a,.box6 .icon li a{border-radius:50%}
.box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
@media only screen and (max-width:990px){.box1{margin-bottom:30px}
}

 .title{
    color:orange;
}

#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: orange; 
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: black; /* Add a dark-grey background on hover */
  color:white;
}





    </style>
    
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  
    
    </head>
    
    <body>
        
        <?php include('navbar.php'); ?>
        
        <div class="main" style="background:orange; padding:18px; color:black;     -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.12);
    -moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
    box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);">
            
            <div class="container">
                
                <a href="/projects.php" style="color:black;">
                    
            <h3 style="font-weight:800; text-align:center;"> <i class="	fa fa-info-circle"></i> SLEEKMEK GROUP : CONSTRUCTION PROJECTS  </h3>
            </a>
            
            </div>
        </div>
        
    

              
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 style="font-weight:800; font-size:64px; color:white;   text-shadow: -2px 4px 0 rgba(0,0,0,0.3);"> </h1>
        
      
    
      </div>
    </div>
  </div>
</header>
            
  
        
      <br>
      
       <div class="container wow fadeInUp">
        <p>
        <a style="color:black;" href="/index.php"> Home </a> > <a style="color:black;" href="palacialdevelopment.php"> Palatial Development Ayingba
   </a>
        
        
        
        </p>
        
        
        <br>
        
        
        
        <h1 STYLE="COLOR:BLACK; FONT-WEIGHT:800;"> Palatial Development Ayingba </h1>
        <hr>
        
        <p> This proposed project would provide for exquisite luxurious living for royalty at Ayingba Kogi state
 </p>
        
        
        
        
        
        <div class="row">
            
            
            
            
            <div class="col-md-6 mb-2">
                 <img src="projectsimg/project11/3D VIEW 1A (1).jpg" class="img-fluid img-thumbnail"> 
            </div>
            
               <div class="col-md-6 mb-2">
                 <img src="projectsimg/project11/p11.jpg" class="img-fluid img-thumbnail"> 
            </div>
            
            
            
           
            
           
            
            
        </div>
        
        
        
              
        
       <br>
    
        
        
        </div>
        
        <br><br>
        
        
        
         <div class="banner" style="overflow:none;">
                
                <div class="row">
                    
                    
                        <div class="col-md-6" style="background-color: black;">
                        
                        
                        <div class="container">
                        <div class="text" style="padding:30px; color:white;">
                            
                            <h1 style="font-size:52px;  font-weight:800;"> LET US HELP YOU EXECUTE <br> YOUR <STRONG STYLE="COLOR:#FFAE00; font-size:52px; font-weight:800;"> PROJECTS</STRONG></h1>
                            
                        </div>
                        
                        </div>
                        
                    </div>
                    
                    
                    <div class="col-md-6" style="background-color: #FFAE00;">
                        
                          <div class="text" style="padding:30px;">
                            
                            
                            <h1 style="font-size:52px; color:black; text-align:center; font-weight:800; "> <i class="fa fa-phone"></i> 08119904845</h1>
                                   <h1 style="font-size:52px; color:black; text-align:center; font-weight:800; "> <i class="fa fa-phone"></i> 08096616345</h1>
                        </div>
                        
                    </div>
                    
                    
                    </div>
                    
                    </div>
                    
                    
        
        
             
        <?php include('footer.php'); ?>
        
        <!-- End your project here-->
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
      
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
       
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

  </script>
  
  
</html>