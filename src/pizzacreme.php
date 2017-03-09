<?php
include ('src/connect.php');
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
$creme = mysqli_query($bdd, "SELECT * FROM pizza WHERE type LIKE '%creme'");


while($pizzacreme = mysqli_fetch_assoc($creme)) {
    echo '
                
                                             
                       <div class="col-xs-12 col-lg-4">	
                            <div class="thumbnail text-center">
                                                                    
                                 <div class="caption fichepizza">
                                      <h3>' . $pizzacreme['nom'] . '</h3>
                                      <p>' . $pizzacreme['ingredients'] . '</p>
                                      <p><span class="prix">29cm: ' . $pizzacreme['pv_taille1'] . '  33cm: ' . $pizzacreme['pv_taille2'] . '</span></p>
                                 </div>
                            </div>
                        </div>';
}



?>