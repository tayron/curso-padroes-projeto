<?php

namespace padroes\basicos\money;

use padroes\basicos\money\FabricaDeMoeda;
use padroes\basicos\money\ICambio;

class Moeda
{
    /**
     *
     */
    private $locale;
    
    /**
     *
     */    
    private $simbolo;
    
    /**
     *
     */    
    private $moeda;
    
    /**
     *
     */    
    private $nome;
    
    /**
     *
     */    
    private $valor;
    
    /**
     *
     */    
    private $separadorDaParteInteira;
    
    /**
     *
     */    
    private $precisao;
    
    /**
     *
     */    
    private $servicoDeCambio;

    /**
     *
     */    
    public function __construct($locale) 
    {
        $this->setLocale($locale);
        FabricaDeMoeda::obterMoeda($this);
    }

    /**
     *
     */    
    public function adicionarServicoDeCambio(ICambio $servicoDeCambio) 
    {
        $this->servicoDeCambio = $servicoDeCambio;
    }

    /**
     *
     */    
    public function setLocale($locale) 
    {
        $this->locale = $locale;
    }

    /**
     *
     */    
    public function getLocale() 
    {
        return $this->locale;
    }

    /**
     *
     */    
    public function setSimbolo($simbolo) 
    {
        $this->simbolo = $simbolo;
    }

    /**
     *
     */    
    public function getSimbolo() 
    {
        return $this->simbolo;
    }

    /**
     *
     */    
    public function setMoeda($moeda) 
    {
        $this->moeda = $moeda;
    }

    /**
     *
     */    
    public function getMoeda() 
    {
        return $this->moeda;
    }

    /**
     *
     */    
    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    /**
     *
     */    
    public function getNome() 
    {
        return $this->nome;
    }

    /**
     *
     */    
    public function setValor($valor) 
    {
        $this->valor = $valor;
    }

    /**
     *
     */    
    public function getValor() 
    {
        return $this->valor;
    }

    /**
     *
     */    
    public function getSeparadorDaParteInteira() 
    {
        return $this->separadorDaParteInteira;
    }

    /**
     *
     */    
    public function setSeparadorDaParteInteira($separadorDaParteInteira) 
    {
        $this->separadorDaParteInteira = $separadorDaParteInteira;
    }

    /**
     *
     */    
    public function setPrecisao($precisao) 
    {
        $this->precisao = $precisao;
    }

    /**
     *
     */    
    public function getPrecisao() 
    {
        return $this->precisao;
    }

    /**
     *
     */    
    public function somar($m2) 
    {
        $m3 = new Moeda($this->getLocale());
        if ($this->getLocale() == $m2->getLocale()) {
            $m3->setValor($this->getValor() + $m2->getValor());
            return $m3;
        } else {
            if ($this->servicoDeCambio == null)
                throw new Exception('Não tem serviço de câmbio!');
            else {
                $taxa = $this->servicoDeCambio->obterTaxa($m2->getMoeda(), $this->getMoeda());
                $m3->setValor($this->getValor() + ($m2->getValor() * $taxa));
            }
        }

        return $m3;
    }

    /**
     *
     */    
    public function __toString() 
    {
        $casasDecimais = '';

        for ($i = 0; $i < $this->precisao; $i++) {
            $casasDecimais .= '0';
        }

        $moeda = $this->valor . $casasDecimais;
        $inteira = substr($moeda, 0, strpos($moeda, '.'));
        $decimal = substr($moeda, strpos($moeda, '.') + 1);
        $decimal = substr($decimal . $casasDecimais, 0, strlen($casasDecimais));

        return $inteira . ',' . $decimal;
    }
}