<?php

namespace App\Http\Livewire\FieldWorker\WhereAreWe;

use App\Models\Church;
use Livewire\Component;

class Index extends Component
{
    public $state;
    public $uf;
    public $tot;
    public $bg_color;
    public $population;
    public $protestantism;
    public $catholicism;
    public $atheist;

    public function verifyState($uf)
    {
        switch($uf){
            case "AC":
                $this->state = "Acre - AC";
                $this->population = '906 876';
                $this->protestantism = '32,7';
                $this->catholicism = '50,73';
                $this->atheist = '11,8';
            break;
;
            case "AL":
                $this->state = "Alagoas - AL";
                $this->population = '3 365 351';
                $this->protestantism = '9,9';
                $this->catholicism = '72,3';
                $this->atheist = '4,7';
            break;
;
            case "AP":
                $this->state = "Amapá - AP";
                $this->population = '877 613';
                $this->protestantism = '28';
                $this->catholicism = '70,89';
                $this->atheist = '5,5';
            break;
;
            case "AM":
                $this->state = "Amazonas - AM";
                $this->population = '4 269 995';
                $this->protestantism = '31,2';
                $this->catholicism = '67,68';
                $this->atheist = '6';
            break;
;
            case "BA":
                $this->state = "Bahia - BA";
                $this->population = '14 985 284';
                $this->protestantism = '17,4';
                $this->catholicism = '71,39';
                $this->atheist = '12,0';
            break;
;
            case "CE":
                $this->state = "Ceará - CE";
                $this->population = '9 240 580';
                $this->protestantism = '14,6';
                $this->catholicism = '81,08';
                $this->atheist = '4,0';
            break;
;
            case "ES":
                $this->state = "Espírito Santo - ES";
                $this->population = '4 108 508';
                $this->protestantism = '33,1';
                $this->catholicism = '57,04';
                $this->atheist = '10,4';
            break;
;
            case "GO":
                $this->state = "Goiás - GO";
                $this->population = '97 206 58906';
                $this->protestantism = '28,1';
                $this->catholicism = '65,42';
                $this->atheist = '8,1';
            break;
;
            case "MA":
                $this->state = "Maranhão - MA";
                $this->population = '7 153 262';
                $this->protestantism = '17,2';
                $this->catholicism = '78,04';
                $this->atheist = '6,3';
            break;
;
            case "MT":
                $this->state = "Mato Grosso - MT";
                $this->population = '3 567 234';
                $this->protestantism = '24,5';
                $this->catholicism = '70,63';
                $this->atheist = '6,6';
            break;
;
            case "MS":
                $this->state = "Mato Grosso do Sul - MS";
                $this->population = '2 839 188';
                $this->protestantism = '26,5';
                $this->catholicism = '63,70';
                $this->atheist = '9,2';
            break;
;
            case "MG":
                $this->state = "Minas Gerais - MG";
                $this->population = '21 411 923';
                $this->protestantism = '20,2';
                $this->catholicism = '73,32';
                $this->atheist = '3,9';
            break;
;
            case "PA":
                $this->state = "Pará - PA";
                $this->population = '8 777 124';
                $this->protestantism = '25,8';
                $this->catholicism = '66,55';
                $this->atheist = '7';
            break;
;
            case "PB":
                $this->state = "Paraíba - PB";
                $this->population = '4 059 905';
                $this->protestantism = '15,1';
                $this->catholicism = '80,25';
                $this->atheist = '5,7';
            break;
;
            case "PR":
                $this->state = "Paraná - PR";
                $this->population = '11 597 484';
                $this->protestantism = '22,2';
                $this->catholicism = '69,82';
                $this->atheist = '4,6';
            break;
;
            case "PE":
                $this->state = "Pernambuco - PE";
                $this->population = '9 674 793';
                $this->protestantism = '32,3';
                $this->catholicism = '63,84';
                $this->atheist = '5,4';
            break;
;
            case "PI":
                $this->state = "Piauí - PI";
                $this->population = '3 289 290';
                $this->protestantism = '9,7';
                $this->catholicism = '87,93';
                $this->atheist = '3,4';
            break;
;
            case "RJ":
                $this->state = "Rio de Janeito - RJ";
                $this->population = '17 463 349';
                $this->protestantism = '29,4';
                $this->catholicism = '49,83';
                $this->atheist = '14,6';
            break;
;
            case "RN":
                $this->state = "Rio Grande do Norte - RN";
                $this->population = '3 560 903';
                $this->protestantism = '15,4';
                $this->catholicism = '73,98';
                $this->atheist = '6,4';
            break;
;
            case "RS":
                $this->state = "Rio Grande do Sul - RS";
                $this->population = '11 466 630';
                $this->protestantism = '18,3';
                $this->catholicism = '71,37';
                $this->atheist = '5,3';
            break;
;
            case "RO":
                $this->state = "Rondônia - RO";
                $this->population = '1 815 278';
                $this->protestantism = '33,8';
                $this->catholicism = '52,89';
                $this->atheist = '13,3';
            break;
;
            case "RR":
                $this->state = "Roraima - RR";
                $this->population = '652 713';
                $this->protestantism = '30,3';
                $this->catholicism = '46,78';
                $this->atheist = '13';
            break;
;
            case "SC":
                $this->state = "Santa Catarina - SC";
                $this->population = '7 338 473';
                $this->protestantism = '20';
                $this->catholicism = '73';
                $this->atheist = '3,3';
            break;
;
            case "SP":
                $this->state = "São Paulo - SP";
                $this->population = '46 649 132';
                $this->protestantism = '24,1';
                $this->catholicism = '66,12';
                $this->atheist = '5,1';
            break;
;
            case "SE":
                $this->state = "Sergipe - SE";
                $this->population = '2 338 474';
                $this->protestantism = '11,8';
                $this->catholicism = '79,96';
                $this->atheist = '8,1';
            break;
;
            case "TO":
                $this->state = "Tocantins - TO";
                $this->population = '1 607 363';
                $this->protestantism = '23';
                $this->catholicism = '70,60';
                $this->atheist = '5,9';
            break;
;
            case "DF":
                $this->state = "Distrito Federal - DF";
                $this->population = '3 094 325';
                $this->protestantism = '25,8';
                $this->catholicism = '55,88';
                $this->atheist = '9,2';
            break;
;

        }

        $consult = Church::where('state',$uf)->get();
        $this->tot = $consult->count();


        if($this->tot > 0 && $this->tot <= 5)         { $this->bg_color = 'bg-blue-50';
        }elseif ($this->tot > 6 && $this->tot <= 10)  { $this->bg_color = 'bg-blue-100';
        }elseif ($this->tot > 10 && $this->tot <= 15) { $this->bg_color = 'bg-blue-200';
        }elseif ($this->tot > 15 && $this->tot <= 20) { $this->bg_color = 'bg-blue-300';
        }elseif ($this->tot > 20 && $this->tot <= 25) { $this->bg_color = 'bg-blue-400';
        }elseif ($this->tot > 25 && $this->tot <= 30) { $this->bg_color = 'bg-blue-500';
        }elseif ($this->tot > 30 && $this->tot <= 35) { $this->bg_color = 'bg-blue-600';
        }elseif ($this->tot > 35 && $this->tot <= 40) { $this->bg_color = 'bg-blue-700';
        }elseif ($this->tot > 40 && $this->tot <= 50) { $this->bg_color = 'bg-blue-800';
        }elseif ($this->tot > 50)                     { $this->bg_color = 'bg-blue-900';
        }else                                         { $this->bg_color = 'bg-gray-700';
        }

    }

    public function render()
    {
        return view('livewire.field-worker.where-are-we.index')->layout('layouts.app_fieldworker');
    }
}
