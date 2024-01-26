<?php

if (!defined('MY_APP')) {
    exit('Accès non authorisé');
}

class ContexteView {
    public function render() {
        include_once "header.php";
        ?>

        <div class="card border-black">
            <div class="card-body bg-primary-subtle">
                <h1 class="text-center fw-bold"> Contexte du jeu</h1>
                <p> Le jeu se déroule dans un ordinateur où des programmes et fichiers corrompus (<a href="index.php?module=ennemis" style="color: black;">Ennemis</a>) s’en prennent à nos données personnelles présentent sur notre Disque Dur (Vie). </p>
                <p> Pour contrer ces ennemis, nous avons à disposition des Logiciels et Applications de défense (<a href="index.php?module=tours" style="color : black">Tourelles</a>) </p>
                <p> Ces attaques sont sous la forme de vagues successives à surmonter. Chaque vague étant plus forte que la précédente. Le but du jeu est donc de survivre le plus longtemps possible.
                    Le circuit imprimé (Map) sera le lieu où se déroulera la bataille. Le point rouge est l’endroit d’où sortent les ennemies, et l’autre extrémité de la map leur objectif :  <a href="index.php?module=cartes" style="color: black;"> voici les différentes maps disponibles</a>
                </p>
                <p>
                    Il est possible de poser des tourelles partout où il n’y a pas de circuit.
                    Mais avant d’utiliser les tourelles, il faudra les acheter via un menu d’achat et les placer au préalable
                </p>
                <p>
                    Pour cela, il existe dans ce jeu une monnaie, le FLOPS, qui nous permettra d’acheter, d’améliorer et de déplacer des tours.
                    Cependant, il existe une seconde “unité” de gestion qui s’appelle la RAM et correspond à la capacité à placer et gérer des tourelles.

                </p>
                <p>
                    Toutefois, à l’instar des FLOPS, on est limité en RAM et acheter une tour augmentera la jauge de ram utilisée par la totalité de nos tours. Pour pallier ce problème, certains ennemis auront un faible pourcentage de chance de donner un petit peu de RAM au joueur à leur mort. De même, chaque fin de vague donne lieu à un don de RAM (qui était en quelque sorte occupée par les fichiers corrompus).
                    Avant de commencer la partie, le joueur doit entrer son nom d’utilisateur, choisir la map grâce aux flèches de sélection sur les côtés droit et gauche de la prévisualisation de la map et sélectionner la difficulté de la même façon (easy, medium, hard).
                </p>
                <p>
                    Les tours vont alors agir selon leur capacitée respective (détaillée plus bas), vous pouvez également cliquer sur une tour déjà poser sur le terrain pour voir les actions possible :
                <p>améliorer la tour (10 fois max)</p>
                <p>bouger la tour ( ce qui vous coûtera des ressources en flops)</p>
                <p>vendre la tour (vous récupérerez un pourcentage des flops dépenser, et la totalité de la ram qu'occupait la tour)</p>
                <p> vous pourrez voir également les information relatives à la tour en elle-même</p>

                <p class="fw-bold text-center">Fin de partie</p>

                <p class="text-center">La partie se termine une fois que la barre de vie se retrouve à 0. Si votre score est  meilleur que l’un des 3 meilleurs pour cette map avec la difficultée choisie en début de partie votre nom ainsi que votre score se retrouve sur le tableau des scores visible sur la page de menu du jeu.</p>

            </div>
        </div>

        <?php
        include_once "footer.php";
    }
}



?>