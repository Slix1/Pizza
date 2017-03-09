

        <?php
            include ('src/header.php');
        ?>

        

    

                    
                    
<!-- section carte des pizzas -->





<!--Qui sommes nous ?-->
<div class="qui_sommes_nous container">
    <div class="row" style="padding-bottom: 50px;">
        <div class="col-xs-12">
            <div class="qui_sommes_nous">
                <h2><span id="page1" class="titre2">Envie d'une Cataluna Pizza ?</span></h2>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6 ">
            <p class="valeur">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque felis nisi, eu ultricies lectus varius quis. Proin pulvinar neque a dapibus tristique. Ut non porta nunc. In quis fermentum nisi, consectetur vehicula tellus. Suspendisse ut felis ut massa interdum luctus non eu dui. Fusce non mollis erat. In in viverra ligula. Praesent nec felis fringilla, ornare nunc id, gravida diam. Maecenas consectetur metus sed dapibus gravida. Duis at mollis mi. Suspendisse dapibus neque eget mauris tincidunt, sed fermentum nunc eleifend. Duis maximus quam et est varius egestas ac sit amet magna. Phasellus dolor lacus, ultrices eu mauris in, blandit pellentesque sem. Cras pellentesque, ante in mattis luctus, magna ex viverra erat, ac lacinia felis tellus sit amet leo.

            </p>
        </div>
        <div class="col-xs-offset-2 col-lg-1">
            <img class="img_qui_sommes_nous" src="img/camion_pizza_cataluna.jpg" width="500px;">
        </div>

    </div>
</div>


<!-- bloc transition -->
<div id="transition"  class="container-fluid">
    <span id="pizzas"></span>

</div>





<div class="container">

    <div class="row">
        <div class="col-xs-12 text-center" >
            <h2><span id="page2" class="titre2">La Carte des Pizzas</span></h2>
        </div>
    </div>

    <div class="row">
        <div class="row col-xs-12 navcarte">
            <ul class="nav nav-pills center-pills" role="tablist">
                <li role="presentation"><a href="#pizzatomate" role="tab" data-toggle="pill">Base Tomate</a></li>
                <li role="presentation"><a href="#pizzacreme" role="tab" data-toggle="pill">Bases Creme</a></li>
                <li role="presentation"><a href="#pizzadessert" role="tab" data-toggle="pill">Desserts</a></li>

            </ul>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="pizzatomate">

                <?php
                include ('src/pizzatomate.php');
                ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="pizzacreme">

                <?php
                include ('src/pizzacreme.php');
                ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="pizzadessert">

                <?php
                include ('src/pizzadessert.php');
                ?>
            </div>

        </div>

    </div>





    <div class="row">

        <div class="col-xs-12 text-center thumbnail">
            <p><strong>100% FROMAGE (emmental, mozzarella)</strong></p>
            <p>Supplément viande et fromage : 1.20€</p>
            <p>Autre Supplément : 0.50€</p>
            <p>Toutes nos pizzas peuvent être adaptées en fonction de vos goûts :
                Base tomate, crème fraiche ou aillée</p>

        </div>
    </div>

    <div class="row">

        <div class="col-xs-offset-4 pull-left">

            <div id="Download">

                <a href="#" class="btn btn-rouge btn-lg" role="button">Téléchargez notre Carte</a>

            </div>

        </div>


        <div class="col-xs-3 push-right">

            <div id="Carte fidelité">

                <!-- Button modal -->
                <button type="button" class="btn btn-rouge btn-lg" data-toggle="modal" data-target="#carteFidelite">
                    Carte Fidélité</button>

                <!-- Modal -->
                <div class="modal fade" id="carteFidelite" tabindex="-1" role="dialog" aria-labelledby="carteFidelite">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="titrecarteFidelite">La carte de fidélité</h4>
                            </div>

                            <div class="modal-body">
                                <p>Pensez à demander votre carte de fidélité! Pour 10 pizzas achetées 1 pizza offerte.</p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


</div>

<!-- bloc transition -->
<div id="transition" class="container-fluid">
    <span id="emplacements"></span>

</div>


<!-- où est le camion -->




<div class="container">

    <div class="ou_est_le_camion container" id="emplacements">
        <h2><span id="page3" class="titre2">Où est le camion ?</span></h2>

        <img class="img_ou_est_le_camion" src="img/ou_est_le_camion.jpg" alt="img" width="360px";>
        <h3>Retrouvez notre camion à Pizza !

            Nous parcourons les alentours d'Orléans pour vous proposer les meilleures pizzas <strong>Cataluna</strong>, regardez quel jour nous sommes chez vous !</h3>

    </div>

    <div class="row">

        <div class="col-xs-12 camion-mobile">

            <div class="Mardi">
                <h4>Mardi Soir</h4>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Mercredi">
                <h4>Mercredi Soir</h4>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Jeudi">
                <h4>Jeudi Midi et Soir</h4>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Vendredi">
                <h4>Vendredi Soir</h4>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Samedi">
                <h4>Samedi Soir</h4>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Dimanche">
                <h4>Dimanche Soir</h4>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>

        </div>


        <div class="col-xs-12 camion">


            <div class="Mardi" style="display: flex;justify-content: space-around; padding-bottom: 10px; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-mardi">Mardi Soir</button>





                <div class="modal fade modal-mardi" tabindex="-1" role="dialog" aria-labelledby="myMardiModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myMardiModalLabel">Mardi</h4>
                            </div>
                            <div class="mardi-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.51785454473!2d1.8923562160010736!3d47.88766137920434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e521c7825c73%3A0x61c6381ea6da3a94!2s43+Avenue+de+Saint-Mesmin%2C+45100+Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1488375754560" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>



            <div class="Mercredi" style="display: flex;justify-content: space-around; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-mercredi">Mercredi Soir</button>




                <div class="modal fade modal-mercredi" tabindex="-1" role="dialog" aria-labelledby="myMercrediModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myMercrediModalLabel">Mercredi</h4>
                            </div>
                            <div class="mercredi-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2684.293229685017!2d1.610371215996321!3d47.717557679192204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4be5e9b3fe431%3A0x16e68e942528391f!2s3+Route+d&#39;Orl%C3%A9ans%2C+41220+Saint-Laurent-Nouan!5e0!3m2!1sfr!2sfr!4v1488375867872" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Jeudi" style="display: flex;justify-content: space-around; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-jeudi">Jeudi Midi & Soir</button>




                <div class="modal fade modal-jeudi" tabindex="-1" role="dialog" aria-labelledby="myJeudiModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myJeudiModalLabel">Jeudi</h4>
                            </div>
                            <div class="jeudi-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.7538812079656!2d1.8530695160014716!3d47.90244877920534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4efff459c7769%3A0x40396cad63ddc457!2s15+Rue+Pierre+et+Marie+Curie%2C+45140+Ingr%C3%A9!5e0!3m2!1sfr!2sfr!4v1488375937310" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>


            <div class="Vendredi"  style="display: flex;justify-content: space-around; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-vendredi">Vendredi Soir</button>




                <div class="modal fade modal-vendredi" tabindex="-1" role="dialog" aria-labelledby="myVendrediModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myVendrediModalLabel">Vendredi</h4>
                            </div>
                            <div class="vendredi-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.51785454473!2d1.8923562160010736!3d47.88766137920434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e521c7825c73%3A0x61c6381ea6da3a94!2s43+Avenue+de+Saint-Mesmin%2C+45100+Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1488375754560" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>



            <div class="Samedi"  style="display: flex;justify-content: space-around; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-samedi">Samedi Soir</button>




                <div class="modal fade modal-samedi" tabindex="-1" role="dialog" aria-labelledby="mySamediModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="mySamediModalLabel">Samedi</h4>
                            </div>
                            <div class="samedi-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.9721169630234!2d1.886937916001336!3d47.898224979205025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e52fc639a1d7%3A0x19b65708697dd660!2s42+Quai+Saint-Laurent%2C+45000+Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1488376122298" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>



            <div class="Dimanche" style="display: flex;justify-content: space-around; padding-bottom: 10px;">
                <button type="button" class="btn btn-rouge btn-lg btnlieu" data-toggle="modal" data-target=".modal-dimanche">Dimanche Soir</button>




                <div class="modal fade modal-dimanche" tabindex="-1" role="dialog" aria-labelledby="myDimancheModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myDimancheModalLabel">Dimanche</h4>
                            </div>
                            <div class="dimanche-content">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.51785454473!2d1.8923562160010736!3d47.88766137920434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e521c7825c73%3A0x61c6381ea6da3a94!2s43+Avenue+de+Saint-Mesmin%2C+45100+Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1488375754560" width="898" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
            </div>

        </div>

    </div>
</div>


<!-- bloc transition -->
<div id="transition" class="container-fluid">
    <span id="evenements"></span>

</div>

<!-- bloc Evènements -->
<div class="evenements container">

    <div class="row">
        <div class="col-xs-12 text-center" >
            <h2><span id="page4" class="titre2">Evènements</span></h2>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <p>Nous sommes disponible pour vos <strong>évènementiels</strong>: Enterrement de vie de garçon, Enterrement de vie de jeune fille, lendemain de mariage, Anniversaire, Départ à la retraite, repas d'entreprise...</p>
    </div>



    <div clas="row">
        <div class="col-xs-12 ">

            <div class="contact">

                <div class="col-xs-offset-5">
                    <button type="button" class="btn btn-rouge btn-lg" data-toggle="modal" data-target=".modal-contact">Contactez nous</button></div>


                <div class="modal fade modal-contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="contactLabel">Contactez nous</h4>
                                <p>
                                    Vous pouvez nous contacter:
                                <ul>
                                    <li> par téléphone au 06 51 11 11 22 </li>
                                    <li>nous envoyer un email à l'adresse suivante contact@catalunapizza.fr	</li>
                                </ul>
                                <?php
							        include ('src/newsletter.php');
							   	 ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-offset-1 col-xs-6 col-md-3 ">
            <a class="thumbnail">
                <img src="img/evenement_1.jpg" alt="..." style="height: 350px; width: 252px">
            </a>
        </div>


        <div class="col-xs-offset-1 col-xs-6 col-md-3">
            <a class="thumbnail">
                <img src="img/evenement_2.jpg" alt="..." style="height: 350px; width: 252px">
            </a>
        </div>


        <div class="col-xs-offset-1 col-xs-6 col-md-3 ">
            <a class="thumbnail">
                <img src="img/evenement_3.jpg" alt="..." style="height: 350px; width: 252px">
            </a>
        </div>
    </div>

</div>


<!-- footer -->
<footer>

    <?php
        include ('src/footer.php');
    ?>