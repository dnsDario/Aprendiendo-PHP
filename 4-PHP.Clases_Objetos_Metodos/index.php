<?php
declare(strict_types=1);

class superHero {
    //Las clases tienen propiedades y métodos, propiedades se refiere a las variables de la clase y los métodos a las acciones. 
    /* public $name;
    public $powers;
    public $planet; */ // Ya no hace falta con las Promoted Properties

    //Promoted Properties --> PHP-8: ponemos public directamente en las propiedades del constructor y nos ahorramos código.

    public function __construct(
        private string $name, //si ponemos readonly hay que indicar el tipo de variable
        public array $powers,
        public string $planet)
    {
        /* $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet; */ // Ya no hace falta con las Promoted Properties
    }

    public function attac() //método
    {
        return "¡$this->name ataca con sus poderes";
    }

    public function description() //método
    {
        $powers = implode(", ", $this->powers); // Transforma un array en cadena de texto, cada elemento separado por lo que se ponga en los (), sería como el powers.join(", ") de JavaScript.

        return "¡¡$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers!!";
    }

    public function show_all()
    {
        return get_object_vars($this); //visualizamos todas las propiedades y valores del objeto
    }

    public static function random() //crear superhéroe aleatorio
    {
        $names= ["Thor","Spiderman","Lobezno","Ironman","Hulk", "Superman"];
        $powers= [
            ["Superfuerza","Volar","Rayos láser"],
            ["Superfuerza","Super agilidad","Telarañas"],
            ["Superfuerza","Regeneración","Garras Adamantium"],
            ["Superfuerza","Super agilidad","Cambio de tamaño"],
        ];
        $planets= ["Asgard","La Tierra","Krypton"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet); // Crea el objeto con los valores aleatorios que toquen
    }
}

// Y creamos un objeto, el cuál dará valores a las propiedades de la clase, y con ello podrá realizar sus métodos.
$hero1 = new superHero("Lobezno",["regeneración", "esqueleto y cuchillas"],"La Tierra");

/* Así rellenaríamos los datos del objeto si no tenemos constructor */
/* $hero1->name = "Lobezno"; */
$hero1->powers = ["regeneración", "esqueleto y cuchillas de adamantium", "fuerza", "agilidad"]; //modificamos una propiedad del objeto
/* $hero1->planet = "La Tierra"; */

$hero2 = new superHero("Deadpool", ["regeneración", "fuerza", "agilidad"], "La Tierra");

print_r($hero1); //vemos el objeto
print_r($hero2);

print_r($hero1->description()); //vemos el resultado del método
print_r($hero2->description());

print_r($hero1->show_all());  //vemos propiedades y valores
var_dump($hero1->show_all()); //vemos las propiedades y valores, con el tipo de dato que son

//----- MÉTODO ESTÁTICO ------
$hero3 = Superhero::random(); //acceso al método estático por el cuál en este caso me dará un héroe aleatorio
print_r($hero3);
print_r($hero3->description());
?>