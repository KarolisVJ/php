<?php

class Company {
    private $comp_name;
    private $employees;
    private $turnover;

    function __construct() {
        $this->comp_name = $this->gen_comp_name();
        $this->employees = rand(3,100);
        $this->turnover = rand(10000,10000000);
    }

    public function gen_comp_name() {
        $name_string = '';
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $name_length = rand(5,12);
        for ($i = 0; $i < $name_length; $i++) {
            if ($i == 0) {
                $name_string[0] = strtoupper($alphabet[rand(0,25)]);
            } else {
                $name_string[$i] = $alphabet[rand(0,25)];
            }
        }
        return $name_string;
    }

    function get_comp_name() {
        return $this->comp_name;
    }

    function get_employees() {
        return $this->employees;
    }

    function get_turnover(){
        return $this->turnover;
    }

    function bankrupt() {
        $this->employees = 0;
        $this->turnover = 0;
    }
}

$biznis1 = new Company();
$biznis2 = new Company();

echo "<br>biznis1 name "; print_r($biznis1->get_comp_name());
echo "<br>biznis2 name "; print_r($biznis2->get_comp_name());


class SoftwareCompany extends Company {
    private $programmingLanguages;

    function __construct() {
        parent::__construct();
        $this->programmingLanguages = $this->gen_lang();
    }

    function gen_lang() {
        $langs = [];
        $set_of_langs = ["PHP", "Pascal", "Go", "C++", "JAVA", "Python"];
        $i = 0;
        while ($i < 3) {
            $k = array_rand($set_of_langs,1);
            if (!in_array($set_of_langs[$k], $langs)) {
                array_push($langs, $set_of_langs[$k]);
                $i++;
            }
        }
        return $langs;
    }

    function get_progrlangs() {
        return $this->programmingLanguages;
    }

    function set_progrlangs($skill){
        array_push($this->programmingLanguages,$skill);

    }

    function bankrupt(){
        parent::bankrupt();
        $this->programmingLanguages = "The software company has no more programming languages";
    }
}

class ConstructionCompany extends Company {
    private $buildingObjects;

    function __construct() {
        parent::__construct();
        $this->buildingObjects = $this->gen_objs();
    }

    function gen_objs() {
        $objs = [];
        $set_of_objs = ["Houses", "Bridges", "Offices", "Roads", "Gardens", "Railroads", "Canals", "Aqueduct", "Stadions"];
        $i = 0;
        while ($i < 4) {
            $k = array_rand($set_of_objs,1);
            if (!in_array($set_of_objs[$k], $objs)) {
                array_push($objs, $set_of_objs[$k]);
                $i++;
            }
        }
        return $objs;

    }

    function get_buildjobs(){
        return $this->buildingObjects;
    }

    function bankrupt(){
        parent::bankrupt();
        $this->buildingObjects = "The company cant build anymore";
    }
}

$brackets = new SoftwareCompany;
echo "<br>These the programming langs -> "; print_r($brackets->get_progrlangs());

$panorama = new ConstructionCompany;
echo "<br>These the buildable objs ->"; print_r($panorama->get_buildjobs());

class Programmer extends SoftwareCompany {
    private $prog_name;
    private $skills;
    private $bankrupt = false;

    function __construct(){
        parent::__construct();
        $this->prog_name = $this->gen_prog_name();
        $this->skills = $this->gen_skills();
    }

    public function gen_prog_name() {
        $name_string = '';
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $name_length = rand(5,12);
        for ($i = 0; $i < $name_length; $i++) {
            if ($i == 0) {
                $name_string[0] = strtoupper($alphabet[rand(0,25)]);
            } else {
                $name_string[$i] = $alphabet[rand(0,25)];
            }
        }
        return $name_string;
    }

    function gen_skills() {
        $skills = [];
        $i = 0;
        while ($i < 2) {
            $k = array_rand($this->get_progrlangs(), 1);
            if (!in_array($this->get_progrlangs()[$k], $skills)) {
                array_push($skills, $this->get_progrlangs()[$k]);
                $i++;
            }
        }
        return $skills;
    }

    function get_prog_name(){
        return $this->prog_name;
    }

    function get_skills(){
        return $this->skills;
    }

    function printInfo(){
        echo"<br>The name of the programmer is "; print_r($this->get_prog_name());
        echo"<br>The skills of the programmer are "; print_r($this->get_skills());
        echo"<br>He works in company of this size "; print_r($this->get_employees());
        echo"<br>The turnover of the company is "; print_r($this->get_turnover());
    }

    
    function addSkill($skill) {
        if (!$this->bankrupt) {
            if (!in_array($skill, $this->get_progrlangs())) {
                $this->set_progrlangs($skill);
            }
            array_push($this->skills, $skill);
        } else {
            echo"<br>Company "; print_r($this->get_comp_name()); echo" is bankrupt";
        }
    }

    function bankrupt(){
        parent::bankrupt();
        $this->skills = "The programmer has no skills left";
        $this->printInfo();
        $this->bankrupt = true;
    }

}

class Builder extends ConstructionCompany {
    private $builder_name;
    private $skill;
    private $bankrupt = false;

    function __construct(){
        parent::__construct();
        $this->builder_name = $this->gen_builder_name();
        $this->skill = $this->gen_skill();
    }

    public function gen_builder_name() {
        $name_string = '';
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $name_length = rand(5,12);
        for ($i = 0; $i < $name_length; $i++) {
            if ($i == 0) {
                $name_string[0] = strtoupper($alphabet[rand(0,25)]);
            } else {
                $name_string[$i] = $alphabet[rand(0,25)];
            }
        }
        return $name_string;
    }

    function gen_skill() {
        $skill = '';
        $skills_options = ["electrician", "plumber", "tractor driver", "engineer"];
        $skill = $skills_options[array_rand($skills_options, 1)];
        return $skill;
    }

    function get_builder_name(){
        return $this->builder_name;
    }

    function get_skill(){
        return $this->skill;
    }

    function printInfo(){
        echo"<br>The name of the builder is "; print_r($this->get_builder_name());
        echo"<br>The skill of the builder is "; print_r($this->get_skill());
        echo"<br>The capabilities of his company are "; print_r($this->get_buildjobs());
        echo"<br>He works in a company of this size "; print_r($this->get_employees());
        echo"<br>The turnover of the company is "; print_r($this->get_turnover());
    }

    function addSkill($skill) {
        if (!$this->bankrupt) {
            $this->skill .= ", ".$skill;
            } else {
                echo"<br>Company "; print_r($this->get_comp_name()); echo" is bankrupt";
            }
    }
    



    function bankrupt(){
        parent::bankrupt();
        $this->skill = "The builder is now skillless";
        $this->bankrupt = true;
        $this->printInfo();
    }




}

$jachimavicius = new Programmer();
echo"<br>These are Jachimavicius skills - > "; print_r($jachimavicius->get_skills());
echo"<br>These are Jachimavicius progr.languages - > "; print_r($jachimavicius->get_progrlangs());
$margelis = new Builder();
echo"<br>This is the skill of Margelis - > "; print_r($margelis->get_skill());
echo"<br>This is all the info of Jach - > "; print_r($jachimavicius->printInfo());
$jachimavicius->addSkill("smoking");
echo"<br>This is all the info of Jach after a skill added- > "; print_r($jachimavicius->printInfo());
echo"<br>Jachimavicius going bankrupt";
$jachimavicius->bankrupt();
echo"<br>Now let's try to add a skill to bankrupt Jach";
$jachimavicius->addSkill("drinking");
$margelis->addSkill("drinking");
echo"<br>The skills of Margelis now are "; print_r($margelis->get_skill());
echo"<br>Let's get Margelis bankrupt";
$margelis->bankrupt();
echo"<br>Let's try adding a tractoring skill to bankrupt Margelis";
$margelis->addSkill("Tractoring.");

