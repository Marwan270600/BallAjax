<?php
    namespace Baelle\BallTypes;

    class Ball{
        protected $name;
        protected $durchmesser;
        protected $material;
        //protected $volumen;

        public function getName(): string
        {
            return $this->name;
        }

        public function getDurchmesser(): string
        {
            return $this->durchmesser;
        }

        public function getMaterial(): string
        {
            return $this->material;
        }

        function __construct(string $name, float $durchmesser, string $material, float $volumen)
        {
            $this->name = $name;
            $this->durchmesser = $durchmesser;
            $this->material = $material;
            $this->volumen = $volumen;
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