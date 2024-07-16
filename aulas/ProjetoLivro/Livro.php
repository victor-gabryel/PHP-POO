<?php
require_once './Pessoa.php';
require_once './Publicacao.php';

class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos  
    public function detalhes() {
        echo '<hr><p>Livro ' . $this->titulo . ' escrito por ' . $this->autor.'</p>';
        echo '<p> Páginas: '. $this->totPaginas. ' Página Atual: '.$this->pagAtual.'</p>';
        echo '<p> Sendo lido por '. $this->leitor->getNome().'</p>';
    }
    
    //Métodos Especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    #[\Override]
    public function abrir() {
        $this->aberto = true; 
    }

    #[\Override]
    public function avancarPag() {
        $this->pagAtual ++;       
    }

    #[\Override]
    public function fechar() {
        $this->aberto = false;
    }

    #[\Override]
    public function folhear($p) {
        if ($p>$this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    #[\Override]
    public function voltarPag() {
        if ($this->pagAtual != 0) {
            $this->pagAtual --;
        } else {
            echo '<p>[ERRO] Não foi possível voltar uma página do '. $this->leitor->getNome().' </p>';
        }       
    }
}
