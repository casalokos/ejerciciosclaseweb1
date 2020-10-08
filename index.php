
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Tienda.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Punto1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Punto2</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    
                    <form class="mt-4" action="index.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="num1" name="NUM1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="num2" name="NUM2">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular</button>
                    </form>
                    <?php
  $arraynom = [];
  $arraytel  = [];
  $arraydire = [];
                    ?>

                    <?php if(isset($_POST["botonCalcular"])): ?>
                       
                    
                       
                        <h4 >
                            <?php
                              $NUMERO1=$_POST["NUM1"];
                              $NUMERO2=$_POST["NUM2"];

                              
  
                              
  
                              $totalSUMA=$NUMERO1+$NUMERO2;
                              $TORTALRESTA=$NUMERO1-$NUMERO2;
                              $TOTALMULTI=$NUMERO1*$NUMERO2;

                             
                              echo("LA SUMA DE LOS NUMEROS ES :".$totalSUMA);
                              echo("LA RESTA DE LOS NUMEROS ES: ".$TORTALRESTA);
                              echo("LA MULTIPLICACION DE LOS NUMEROS E".$TOTALMULTI);
                            ?>
                        </h4>
                    
                    <?php endif ?>


                    <h1>TIENDA PARA SPRING STEP</H1>


                    <form class="mt-4" action="index.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="CANTIDADZP" name="ZAPATOS">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="VALORUNI" name="VLORZA">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="CALCULAR">DESCUENTO</button>
                    </form>

                    <?php if(isset($_POST["CALCULAR"])): ?>
                       
                    
                       
                       <h4 >
                           <?php
                             $ZAPATOSCA=$_POST["ZAPATOS"];
                             $valorza=$_POST["VLORZA"];
                             $descuento;

                             
 
                             
 
                             $valortotal=$valorza*$ZAPATOSCA;

                             if($ZAPATOSCA == 3){
                                 $descuento= $valortotal/100*10;
                                 $valortotal=$valortotal-$descuento;

                             }
                             else if($ZAPATOSCA >3 && $ZAPATOSCA <=8 ){
                                 $descuento= $valortotal/100*20;
                                 $valortotal=$valortotal-$descuento;
                             }

                                 else if($ZAPATOSCA > 8){
                                     $descuento=$valortotal/100*50;
                                     $valortotal=$valortotal-$descuento;
                                 }
                                 else{
                                     $valortotal=$valortotal;
                                     
                                 }

                             

                            
                             echo("<p>el valor de los zapatos por unidad es: </p> <strong>".$valorza . "</strong> <br>" );
                             echo("<p>el valor total es de: </p> <strong>".$valortotal . "</strong> <br>" );

                             
                             
                           ?>
                       </h4>
                   
                   <?php endif ?>




                   <h1>VALOR HORA DE TRABAJA</H1>
                   <form class="mt-4" action="index.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="HORASTRABAJADAS" name="HORASTR">
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="HORASTRA">HORAEXTRA</button>
                    </form>

                    <?php if(isset($_POST["HORASTRA"])): ?>
                       
                    
                       
                       <h4 >
                           <?php
                             $HORASTRAB=$_POST["HORASTR"];
                             $VALORHO;
                             $TOTALEXTRAS;
                             

                             
 
                             
 
                             

                             if($HORASTRAB == 40){
                                 $VALORHO = 20000;


                             }
                             else if($HORASTRAB > 40 ){
                                $VALORHO= 25000;
                             }

                                 $TOTALEXTRAS=$HORASTRAB*$VALORHO;
                                 echo("<p>EL VALOR DE LA HORA EXTRA ES: </p> <strong>".$VALORHO . "</strong> <br>" );
                                 echo("<p>EL VALOR GANADO TOTAL EDE EXTRAS ES : </p> <strong>".$TOTALEXTRAS . "</strong> <br>" );
                                 
    
                                 
                                 
                               ?>
                           </h4>
                       
                       <?php endif ?>

                       <h1>APLICATIVA BANCOLOMBIA</H1>
                       <form class="mt-4" action="index.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="NOMBRE" name="NOMBRE">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="TELEFONO" name="TELEFONO">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="DIRECCION" name="DIRECCION">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="BANCOLOMBIA">AGREGAR EMPLEADO</button>
                    </form>


                    <?php if(isset($_POST["BANCOLOMBIA"])): ?>
                       
                    
                       
                       <h4 >
                           <?php

                              
                            

                            $nombre=$_POST["NOMBRE"];
                            $telefono=$_POST["TELEFONO"];
                            $direccion=$_POST["DIRECCION"];

                             echo("<table> <thead> <tr> <th>nombre empleado</th>   <th> telefono empleado</th>   <th>telefono empleado </th> </tr>  </thead> "); 

                             echo ("<tbody>");
                             array_push($arraynom, $nombre);
                             array_push($arraytel, $telefono);
                             array_push($arraydire, $direccion);
                          $tamañoarray = count($arraynom);
                          define('i', 0);
                          for ($i=0; $i < $tamañoarray ; $i++) { 
                             echo("<tr> <td>".$arraynom[i]."</td>  <td> ".$arraytel[i]."</td> <td> ".$arraydire[i]."</td>   </tr>" );

                             
                             
                          }       
                           
                             echo ("</tbody> </table>");


                             
                             





                            
                             

                             
 
                             
 
                             

                             
                                 
    
                                 
                                 
                               ?>
                           </h4>
                       
                       <?php endif ?>
    

                </div>
            </div>
        </div>

        

    </main>
    <footer>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>

