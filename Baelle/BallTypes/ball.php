<?php
    namespace Baelle;

    class Ball{
        protected $name;
        protected $durchmesser;
        protected $material;
        protected $volumen;

        function __construct(string $name, float $durchmesser, string $material, float $volumen)
        {
            $this->name = $name;
            $this->durchmesser = $durchmesser;
            $this->material = $material;
            $this->volumen = $volumen;
        }
    }
?>