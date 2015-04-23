<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?></title>
        <style type="text/css">
            .container{
                margin-top: 10px;
            }
            #footer{
                
                background-color: #686868;
                position: fixed;
                top:92.8%;
                width: 100%;
            }

            //{.navbar-default .navbar-collapse, .navbar-default .navbar-form 
            //  background-color: red;}

        </style>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="icon" href="../main/afbeeldingen/favicon.ico">
    </head>
    <body>    
        <div class="container">
        <!-- BOOTSTRAP links ///////////////////// -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- facebook icon script////////////////////////////////-->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- twitter icon script/////////////////////////////////-->
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>

    
            <!-- alles van de bovenkant /////////////// -->
            <a href="home" ><img src="../main/afbeeldingen/logo_tedxuhasselt.png" alt="TEDxUhasselt"></a>

            <form class="navbar-form navbar-right" role="login">
                <table>
                    <tr>
                        <td>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                            </div>
                        </td>
                        <td>
                            <div class="input-group">      
                                <span class="input-group-addon" id="basic-addon2">@</span>
                                <input type="text" class="form-control" placeholder=".com">
                            </div>  
                        </td>
                        </div>
                    </tr>
                    </td>
                    <tr>
                        <td>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-default">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
