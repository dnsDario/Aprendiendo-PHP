<?php 

    class Persona
    {
        
        public function __construct(protected string $nombre, protected string $apellido, protected string $email, protected int $peso, protected int $altura){}

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of peso
         */ 
        public function getPeso()
        {
                return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @return  self
         */ 
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }

        /**
         * Get the value of altura
         */ 
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         *
         * @return  self
         */ 
        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }

        public function calcularIMC(int $altura, int $peso): string
        {
                $IMC = $peso / pow(($altura / 100), 2);
                $IMC = round($IMC, 2);
                
                if ($IMC < 19) {
                        $estadoPersona = "Estás en estado de delgadez";
                    } elseif ($IMC < 25) {
                        $estadoPersona ="Estás en estado normal";
                    } elseif ($IMC < 30) {
                        $estadoPersona ="Estás en estado de sobrepeso";
                    } else {
                        $estadoPersona ="Estás en obesidad";
                    }
                $mensajeIMC = "El IMC es del $IMC% y $estadoPersona";

                return $mensajeIMC;
        }
    }   
?>