<?php

namespace Entity;


class Prestador
{

    /** @var  int $cnpj */
    private $cnpj;
    /** @var  int $inscricaoMunicipal */
    private $inscricaoMunicipal;


    /**
     * @return int
     */
    public function getCnpj(): int
    {
        return $this->cnpj;
    }

    /**
     * @param int $cnpj
     */
    public function setCnpj(int $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return int
     */
    public function getInscricaoMunicipal(): int
    {
        return $this->inscricaoMunicipal;
    }

    /**
     * @param int $inscricaoMunicipal
     */
    public function setInscricaoMunicipal(int $inscricaoMunicipal)
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;
    }

}