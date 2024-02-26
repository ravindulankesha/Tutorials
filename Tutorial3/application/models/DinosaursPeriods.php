<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DinosaursPeriods extends CI_Model {
   public function info($data) {
        $information='';
        if($data=='Tirassic'){
            $information= 'At the start of the Triassic period, 250 million years ago, the Earth was just recovering from the Permian/Triassic Extinction, which witnessed the demise of over two-thirds of all land-dwelling species and a whopping 95 percent of ocean-dwelling species. In terms of animal life, the Triassic was most notable for the diversification of archosaurs into pterosaurs, crocodiles, and the earliest dinosaurs, as well as the evolution of therapsids into the first true mammals.';
        }
        else if($data== 'Jurassic'){
            $information= "Thanks to the movie Jurassic Park, people identify the Jurassic period, more than any other geological time span, with the age of dinosaurs. The Jurassic is when the first gigantic sauropod and theropod dinosaurs appeared on Earth, a far cry from their slender, man-sized ancestors of the preceding Triassic period. But the fact is that dinosaur diversity reached its peak in the ensuing Cretaceous period.";
        }
        else if($data== 'Cretaceous'){
            $information= "The Cretaceous period is when dinosaurs attained their maximum diversity, as ornithischian and saurischian families branched off into a bewildering array of armored, raptor-clawed, thick-skulled, and/or long-toothed and long-tailed meat- and plant-eaters. The longest period of the Mesozoic Era, it was also during the Cretaceous that the Earth began to assume something resembling its modern form. At that time,  life was dominated not by mammals but by terrestrial, marine and avian reptiles.";
        }
        else{
            $information= "unable to gather information";
        }
        $arr=array('info'=>$information);
        return $arr;
   }
}