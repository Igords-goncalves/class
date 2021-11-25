<?php
    require_once "interface_competidor.php";

    class Lutador  implements Competirdor {
        
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct(
            $nome, 
            $nacionalidade, 
            $idade,
            $altura,
            $peso,
            $vitorias,
            $derrotas,
            $empates
        ) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        // Getters e Setters

        private function getNome() {
            return $this->nome;
        }
        private function setNome($nome) {
            $this->nome = $nome;
        }
 
        private function getNacionalidade() {
            return $this->nacionalidade;
        }
        private function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
 
        private function getIdade() {
            return $this->idade;
        }
        private function setIdade($idade) {
            $this->idade = $idade;
        }
 
        private function getAltura() {
            return $this->altura;
        }
        private function setAltura($altura) {
            $this->altura = $altura;
        }
 
        private function getPeso() {
            return $this->peso;
        }
        private function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
 
        private function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = null;
            } elseif ($this->peso<= 70.3) {
                $this->categoria = 'Leve';
            } elseif ($this->peso <= 83.9) {
                $this->categoria = 'Médio';
            } elseif ($this->peso <= 120.2) {
                $this->categoria = 'Pesado';
            } else {
                $this->categoria = 'Inválido';
            }
        }
 
        private function getVitorias() {
            return $this->vitorias;
        }
        private function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
 
        private function getDerrotas() {
            return $this->derrotas;
        }
        private function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
 
        private function getEmpates() {
            return $this->empates;
        }
        private function setEmpates($empates) {
            $this->empates = $empates;
        }
 
        // Metodos abstratos

        public function apresentarLutador() {
            echo "<br> Lutador: " . $this->getNome();
            echo "<br> Origem: " . $this->getNacionalidade();
            echo "<br> Idade: " . $this->getIdade();
            echo "<br> Peso: " . $this->getPeso();
            echo "<br> Ganhou: " . $this->getVitorias();
            echo "<br> Perdeu: " . $this->getDerrotas();
            echo "<br> Empatou: " . $this->getEmpates();
        }
        public function mostrarStatus() {
            echo "<br><br>";
            echo $this->getNome() . " | &nbsp";
            echo $this->getCategoria() . " | &nbsp";
            echo $this->getVitorias() . " | &nbsp";
            echo $this->getDerrotas() . " | &nbsp";
            echo $this->getEmpates() . " | &nbsp";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
?>