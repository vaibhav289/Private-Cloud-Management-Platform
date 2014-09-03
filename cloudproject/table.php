<!DOCTYPE html>

<html class="no-js">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <script type="text/javascript">
function getDate()
{
var d=new Date();
document.getElementById("x").innerHTML=d+"";
}
</script>
    </head>
    <body  onload="getDate()">


        <header class="clearfix">

            <div class="container">

                <section class="logo">
                    <h1>Cloud Management Platform</h1>
                    <h2>D J. Sanghvi College of Engineering</h2>
                </section>

                <p class="login"></p>

            </div>

        </header>


        <div class="container">

            <section class="main">

                <h2>Cloud Instance</h2>
                                                 
 <table>
                    <tr>
                        <th>Image </th>
                        <th>IP Address</th>
                        <th>Status</th>
                        <th>Launch Time</th>
                        <th>Password</th>
                        <th> End Instances </th>
                    </tr>
                    <tr>
                        <td>Ubuntu Lucid Lynx</td>
                        <td>192.168.34.236</td>
                        <td class="terminate-status"><img src="img/pending.gif" width="20" height="20" alt=""></td>
                        <td id="x"> </td>
                        <td>qwerty</td>
                        <td><a class="terminate" href="botoexec.php"> Terminate</a></td>
                    </tr>
                    <!-- <tr>
                        <td>192.168.1.2</td>
                        <td>Sample Field</td>
                        <td>Sample Field</td>
                        <td>Sample Field</td>
                    </tr>
                    <tr>
                        <td>192.168.1.1</td>
                        <td>Sample Field</td>
                        <td>Sample Field</td>
                        <td>Sample Field</td>
                    </tr>
                    -->
                </table>

            </section>
                    <div class="empty">
                    </div>
            <footer>

               <img src="img/cmp.png" width="168" height="85" hspace="60" align="absmiddle">

            </footer>


        </div><!-- container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>

</html>
