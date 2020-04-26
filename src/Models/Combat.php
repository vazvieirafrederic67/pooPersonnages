<?php

namespace App\Models;

class Combat
{
    public $joueur1;
    public $joueur2;
    public $round = 10;

    function combatJoueurs($joueurUn,$joueurDeux){

        $this->joueur1 = $joueurUn;
        $this->joueur2 = $joueurDeux;

        for($i = 0;  ; $i++)
        {
            $damagesJoueur1 = $this->joueur1->calculateDamagesGiven();
            print('pv du joueur1 avant de prendre une tarte'. $this->joueur1->hp.'<br>');
            $damagesJoueur2 = $this->joueur2->calculateDamagesGiven();
            print('pv du joueur2 avant de prendre une tarte'. $this->joueur2->hp.'<br>');
            $this->joueur1->takeDamages($damagesJoueur2);
            print('pv du joueur 1 après avoir mangé une tarte'. $this->joueur1->hp.'<br>');
            $this->joueur2->takeDamages($damagesJoueur1);
            print('pv du joueur 2 après avoir mangé une tarte'. $this->joueur2->hp.'<br><br>');

            if( $this->joueur1->hp <= 0)
            {
                print('Joueur un mort : '.$this->joueur1->hp."<br>");
                $this->round = 0;
            break;
            }
            if( $this->joueur2->hp <= 0)
            {
                print('Joueur deux mort : '.$this->joueur2->hp."<br><br>");
                $this->round = 0;
            break;
            }
        }
    }



}
