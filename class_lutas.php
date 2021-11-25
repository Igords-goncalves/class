<?php
    require_once "interface_lutar.php";

    class Lutas implements Lutar { 

        // Aqui precisa acontecer a agregação entre as classes
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

        // Métodos abstratos

        public function marcarLuta($lutador1, $lutador2) {
            if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
                $this->setAprovada(true);
                $this->desafiado = $lutador1;
                $this->desafiante = $lutador2;
            } else {
                $this->setAprovada(false);
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar() { // A vitoria, derrota ou empate devem ficar gravados no cartel Lutador
            if ($this->getAprovada() == true) {
                $this->getDesafiado(apresentarLutador()); // Callback ?
                $this->getDesafiante(apresentarLutador());
                $vencedor = rand(0, 2);

                switch ($vencedor) {
                    case 0:
                        echo "Empatou";
                        $this->getDesafiado(empatarLuta());
                        break;
                    case 1:
                        echo "Venceu";
                        $this->getDesafiado(ganharLuta());
                        break;
                    case 2:
                        echo "Perdeu";
                        $this->getDesafiado(perderLuta());
                        break;
                    
                    default:
                        echo "A luta não pode acontecer";
                        break;
                }
            }
        }
    }
?>