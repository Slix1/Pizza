<?php
include ('src/connect.php');
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
$dessert = mysqli_query($bdd, "SELECT * FROM pizza WHERE type LIKE '%dessert'");


while($pizzadessert = mysqli_fetch_assoc($dessert)) {
    echo '
                
                                             
                       <div class="col-xs-12 col-lg-4">	
                            <div class="thumbnail text-center">
                                                                    
                                 <div class="caption fichepizza">
                                      <h3>' . $pizzadessert['nom'] . '</h3>
                                      <p>' . $pizzadessert['ingredients'] . '</p>
                                      <p><span class="prix">' . $pizzadessert['pv_taille1'] . '' . $pizzadessert['pv_taille2'] . '</span></p>
                                 </div>
                            </div>
                        </div>';
}



?>