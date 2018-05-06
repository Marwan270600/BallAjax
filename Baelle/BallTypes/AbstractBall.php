<?php
    namespace Baelle\BallTypes;

    abstract class Ball{
        protected $name;
        protected $durchmesser;
        protected $material;
        //protected $volumen;

        public function getName(): string
        {
            return $this->name;
        }

        public function getDurchmesser(): float
        {
            return $this->durchmesser;
        }

        public function getMaterial(): string
        {
            return $this->material;
        }

        function __construct(string $name, float $durchmesser, string $material)
        {
            $this->name = $name;
            $this->durchmesser = $durchmesser;
            $this->material = $material;

        }

        public function __toString() : string
        {
            
            $rv = <<<EOT
        Name: $this->name<br />
        Durchmesser: $this->durchmesser<br />
        Material: $this->material<br />
EOT;
            return $rv;
        }
    }
?>