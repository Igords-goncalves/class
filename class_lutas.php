<?php
    require_once "interface_lutar.php";

    class Lutas implements Lutar { 

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        private function getDesafiado() {
            return $this->desafiado;
        }

        private function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }

        private function getDesafiante() {
            return $this->desafiante;
        }

        private function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }

        private function getRounds() {
            return $this->rounds;
        }

        private function setRounds($rounds) {
            $this->rounds = $rounds;
        }

        private function getAprovada() {
            return $this->aprovada;
        }

        private function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }

        // Metodos abstratos

        public function marcarLuta() {

        }
        public function lutar() {

        }
    }
?>