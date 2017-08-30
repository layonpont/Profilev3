<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
         

        <title>Sulton E. Portfolio</title>

       
    </head>
    <body>
        
        <div class="header">
            <div class="nav-div">
                <div class="container">
                    <div class="nav">
                        <div class="logo">
                            <a href="index.php"><img src="img/LOGOTEXT33.png" width="300" height="70px"></a>
                        </div>
                        <ul class="main-nav">
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="portfolio.php">PORTFOLIO</a></li>
                            <li><a href="Ton1.pdf">RESUME</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section id="contact">
            <div class="container">
                <div class="row">
                    
                        <h1 class="text-center">SEND ME AN EMAIL</h1> 
                        
                        <form id="my_form" onsubmit="submitForm(); return false;">
                            <div class="form-group">
                                <input id="n" type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input id="e" type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea id="m" rows="5" class="form-control" placeholder="message..."></textarea>
                            </div>
                            <!-- <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"> I am Human
                                </label>
                            </div> -->
                            <div align="center">
                                <p><input id="mybtn" type="submit" name="submit" value="send message" class="btn btn-secondary"><span id="status"></span></p>
                            </div>
                       </form>
                       
                    </div>
            </div>

        </section>
        <footer class="contact-footer">
            <p class="text-center">CREATED BY SULTON ELHADI 2017</p>
            <ul class="text-center">
                <li><a href="https://www.facebook.com/sulton.elhadi"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/elhadi_sulton"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/100255194086427246901"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sulton-elhadi-161078107"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://github.com/layonpont"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
                
            </ul>
        </footer>
        
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
    <script src="js/barChart.js"></script>

     <script>
             function _(id) {
                 return document.getElementById(id);
             }
             function submitForm (){
                 _("mybtn").disabled = true;
                 _("status").innerHTML = 'please wait ...';

                 var formdata = new FormData();

                 formdata.append( "n", _("n").value );
                 formdata.append( "e", _("e").value );
                 formdata.append( "m", _("m").value );

                 var ajax = new XMLHttpRequest();
                 ajax.open( "POST", "parser.php" );
                 ajax.onreadystatechange = function(){
                     if(ajax.readyState == 4 && ajax.status == 200){
                        if(ajax.respondText == "success"){
                            _("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
                        } else {
                            _("status").innerHTML = ajax.responseText;
                            _("mybtn").disabled = false;
                        }
                     }
                 }
                 ajax.send(formdata);
             }
         </script>

    </body>
</html>