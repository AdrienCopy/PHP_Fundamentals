<?php
            if (isset($_GET['nom_enfant']) && isset($_GET['gender']) && isset($_GET['nom_professeur']) && isset($_GET['motif_absence'])) {
                $date = new DateTime();
                $date_format = $date->format('d-m-Y');
                $nom_enfant = $_GET['nom_enfant'];
                $gender = $_GET['gender'];
                $nom_professeur = $_GET['nom_professeur'];
                $motif_absence = $_GET['motif_absence'];

                $motifs = ['maladie', 'deces', 'activite'];
                if ($motif_absence == 'autre') {
                    $motif_absence = $motifs[array_rand($motifs)];
                }
                
                    if ($gender == fille) {
                        if ($motif_absence == maladie) {
                            echo "<section>$nom_professeur,<br><br> Ma fille, $nom_enfant, est malade.<br>Elle ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == deces) {
                            echo "<section>$nom_professeur,<br><br> Ma fille, $nom_enfant, est très triste.<br>Elle ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == activite) {
                            echo "<section>$nom_professeur,<br><br> Ma fille, $nom_enfant, est fatiguée.<br>Elle ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == autre) {
                            echo "<section>$nom_professeur,<br><br> Ma fille, $nom_enfant, est absente sans raison.<br>Elle ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        }
                    } else {
                        if ($motif_absence == maladie) {
                            echo "<section>$nom_professeur,<br><br> Mon fils, $nom_enfant, est malade.<br>Il ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == deces) {
                            echo "<section>$nom_professeur,<br><br> Mon fils, $nom_enfant, est très triste.<br>Il ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == activite) {
                            echo "<section>$nom_professeur,<br><br> Mon fils, $nom_enfant, est fatigué.<br>Il ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        } else if ($motif_absence == autre) {
                            echo "<section>$nom_professeur,<br><br> Mon fils, $nom_enfant, est absent sans raison.<br>Il ne pourra pas assister au cours aujourd'hui.<br><br>Bien à vous,<br><br>Les parents<br>$date_format</section>";
                        }
                    }
            }
        ?>
