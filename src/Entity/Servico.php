<?php

namespace Entity;


class Servico
{

    /** @var  string $itemListaServico */
    private $itemListaServico;
    /** @var  int $codigoCnae */
    private $codigoCnae;
    /** @var  string $discriminacao */
    private $discriminacao;
    /** @var  int $codigoMunicipio */
    private $codigoMunicipio;


    /**
     * @return string
     */
    public function getItemListaServico(): string
    {
        return $this->itemListaServico;
    }

    /**
     * @param string $itemListaServico
     */
    public function setItemListaServico(string $itemListaServico)
    {
        $this->itemListaServico = $itemListaServico;
    }

    /**
     * @return int
     */
    public function getCodigoCnae(): int
    {
        return $this->codigoCnae;
    }

    /**
     * @param int $codigoCnae
     */
    public function setCodigoCnae(int $codigoCnae)
    {
        $this->codigoCnae = $codigoCnae;
    }

    /**
     * @return string
     */
    public function getDiscriminacao(): string
    {
        return $this->discriminacao;
    }

    /**
     * @param string $discriminacao
     */
    public function setDiscriminacao(string $discriminacao)
    {
        $this->discriminacao = $discriminacao;
    }

    /**
     * @return int
     */
    public function getCodigoMunicipio(): int
    {
        return $this->codigoMunicipio;
    }

    /**
     * @param int $codigoMunicipio
     */
    public function setCodigoMunicipio(int $codigoMunicipio)
    {
        $this->codigoMunicipio = $codigoMunicipio;
    }

}