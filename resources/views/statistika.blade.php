
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AutoSavdo.uz</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/common.js"></script>
</head>
<body onload="startTime()">
<nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <ul class="list-inline list-unstyled">
                      <li><a href="/">Home</a></li>
                    <li><a href="/Gallery">Gallery</a></li>
                    <li><a href="/statistika">GM Statistics</a></li>
                    <li><a href="/Arenda">Hire</a></li>
                    <li><a href="#">Map</a></li>
                    <li><a href="#">Country</a></li>
                    <li><a href="/carwash">Car wash service</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Contact <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Jamol <i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Dmitriy <i class="fa fa-code"></i> </a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Anodil <i class="fa fa-desktop"></i></a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Akhmad <i class="fa fa-desktop"></i></i></a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Artyom <i class="fa fa-code"></i></i></a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Javlon <i class="fa fa-desktop"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav><br><br>
<main>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel-group top">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Price of Cars General Motors in Uzbekistan</h4>
                    </div>
                    <div class="panel-body">

                        <table class="table table-responsive table-striped">
                            <tr>
                                <th>№</th>
                                <th>Name</th>
                                <th>Colors</th>
                                <th>Price</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Tico</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>2000$</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nexia 2</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>4500$</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Captiva 1</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>20.000$</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Malibu 2</td>
                                <td>White, Black,</td>
                                <td>30.00$</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Spark 1</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>7.000$</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Spark 2</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>9.000$</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Cobalt</td>
                                <td>White, Black, Chocco, Delphin</td>
                                <td>97.000000so'm</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-md-4">
           <div class="well-lg">
               <h1>Dollar Kurs $</h1>
               <ul class="list-unstyled list-inline">
                   <li><i class="fa fa-calendar-check-o"></i></li>
                   <li> <p style="color: red; font-size: 20px;" id="txt"></p></li>
                  <li><p>1$ = 8600so'm</p></li>
               </ul>
               <div id='calc-contain'>

                   <form name="calculator" class="calcu">

                       <input type="text" name="answer" />
                       <br>

                       <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
                       <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
                       <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
                       <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
                       <br/>

                       <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
                       <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
                       <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
                       <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
                       </br>

                       <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
                       <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
                       <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
                       <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
                       </br>

                       <input type="button" value=" c " onclick="calculator.answer.value = ''" />
                       <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
                       <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
                       <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
                       </br>


                   </form>
                   <div id="agh">
           </div>
       </div>
                </div>
            </div>
    </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="pull-left">
                    <!--<img src="image/qul.png" class="img-responsive" alt="" style="width: 70px; height: 70px;">-->
                </div>
                <div class="pull-left speciall">
                    <h3> AutoSavdo.uz <i class="fa fa-car"></i></h3>
                    <small> Please, be careful on the road!</small>
                    <hr>
                    <p>Real Uzb Cars Portal - <i>Just make a Long Ride With us</i></p>
                </div>
            </div>
            <div class="col-lg-2"><img src="image/test.png" width="150px" height="150px" style="margin-top: 1px;"/>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>