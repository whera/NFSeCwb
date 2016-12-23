<?php
namespace Entity;

class Valores
{
    /**
     * @var  float $valorServicos
     */
    private $valorServicos;

    /**
     * @var  float $valorDeducoes
     */
    private $valorDeducoes;

    /**
     * @var  float $valorPis
     */
    private $valorPis;

    /**
     * @var  float $valorCofins
     */
    private $valorCofins;

    /**
     * @var  float $valorInss
     */
    private $valorInss;

    /**
     * @var  float $valorIr
     */
    private $valorIr;

    /**
     * @var  float $valorCsll
     */
    private $valorCsll;

    /**
     * @var  int $issRetido
     */
    private $issRetido;

    /**
     * @var  float $valorIss
     */
    private $valorIss;

    /**
     * @var  float $valorIssRetido
     */
    private $valorIssRetido;

    /**
     * @var  float $outrasRetencoes
     */
    private $outrasRetencoes;

    /**
     * @var  float $baseCalculo
     */
    private $baseCalculo;

    /**
     * @var  float $aliquota
     */
    private $aliquota;

    /**
     * @var  float $valorLiquidoNfse
     */
    private $valorLiquidoNfse;

    /**
     * @var  float $descontoIncondicionado
     */
    private $descontoIncondicionado;

    /**
     * @var  float $descontoCondicionado
     */
    private $descontoCondicionado;

    /**
     * @return float
     */
    public function getValorServicos(): float
    {
        return $this->valorServicos;
    }

    /**
     * @param float $valorServicos
     */
    public function setValorServicos(float $valorServicos)
    {
        $this->valorServicos = $valorServicos;
    }

    /**
     * @return float
     */
    public function getValorDeducoes(): float
    {
        return $this->valorDeducoes;
    }

    /**
     * @param float $valorDeducoes
     */
    public function setValorDeducoes(float $valorDeducoes)
    {
        $this->valorDeducoes = $valorDeducoes;
    }

    /**
     * @return float
     */
    public function getValorPis(): float
    {
        return $this->valorPis;
    }

    /**
     * @param float $valorPis
     */
    public function setValorPis(float $valorPis)
    {
        $this->valorPis = $valorPis;
    }

    /**
     * @return float
     */
    public function getValorCofins(): float
    {
        return $this->valorCofins;
    }

    /**
     * @param float $valorCofins
     */
    public function setValorCofins(float $valorCofins)
    {
        $this->valorCofins = $valorCofins;
    }

    /**
     * @return float
     */
    public function getValorInss(): float
    {
        return $this->valorInss;
    }

    /**
     * @param float $valorInss
     */
    public function setValorInss(float $valorInss)
    {
        $this->valorInss = $valorInss;
    }

    /**
     * @return float
     */
    public function getValorIr(): float
    {
        return $this->valorIr;
    }

    /**
     * @param float $valorIr
     */
    public function setValorIr(float $valorIr)
    {
        $this->valorIr = $valorIr;
    }

    /**
     * @return float
     */
    public function getValorCsll(): float
    {
        return $this->valorCsll;
    }

    /**
     * @param float $valorCsll
     */
    public function setValorCsll(float $valorCsll)
    {
        $this->valorCsll = $valorCsll;
    }

    /**
     * @return int
     */
    public function getIssRetido(): int
    {
        return $this->issRetido;
    }

    /**
     * @param int $issRetido
     */
    public function setIssRetido(int $issRetido)
    {
        $this->issRetido = $issRetido;
    }

    /**
     * @return float
     */
    public function getValorIss(): float
    {
        return $this->valorIss;
    }

    /**
     * @param float $valorIss
     */
    public function setValorIss(float $valorIss)
    {
        $this->valorIss = $valorIss;
    }

    /**
     * @return float
     */
    public function getValorIssRetido(): float
    {
        return $this->valorIssRetido;
    }

    /**
     * @param float $valorIssRetido
     */
    public function setValorIssRetido(float $valorIssRetido)
    {
        $this->valorIssRetido = $valorIssRetido;
    }

    /**
     * @return float
     */
    public function getOutrasRetencoes(): float
    {
        return $this->outrasRetencoes;
    }

    /**
     * @param float $outrasRetencoes
     */
    public function setOutrasRetencoes(float $outrasRetencoes)
    {
        $this->outrasRetencoes = $outrasRetencoes;
    }

    /**
     * @return float
     */
    public function getBaseCalculo(): float
    {
        return $this->baseCalculo;
    }

    /**
     * @param float $baseCalculo
     */
    public function setBaseCalculo(float $baseCalculo)
    {
        $this->baseCalculo = $baseCalculo;
    }

    /**
     * @return float
     */
    public function getAliquota(): float
    {
        return $this->aliquota;
    }

    /**
     * @param float $aliquota
     */
    public function setAliquota(float $aliquota)
    {
        $this->aliquota = $aliquota;
    }

    /**
     * @return float
     */
    public function getValorLiquidoNfse(): float
    {
        return $this->valorLiquidoNfse;
    }

    /**
     * @param float $valorLiquidoNfse
     */
    public function setValorLiquidoNfse(float $valorLiquidoNfse)
    {
        $this->valorLiquidoNfse = $valorLiquidoNfse;
    }

    /**
     * @return float
     */
    public function getDescontoIncondicionado(): float
    {
        return $this->descontoIncondicionado;
    }

    /**
     * @param float $descontoIncondicionado
     */
    public function setDescontoIncondicionado(float $descontoIncondicionado)
    {
        $this->descontoIncondicionado = $descontoIncondicionado;
    }

    /**
     * @return float
     */
    public function getDescontoCondicionado(): float
    {
        return $this->descontoCondicionado;
    }

    /**
     * @param float $descontoCondicionado
     */
    public function setDescontoCondicionado(float $descontoCondicionado)
    {
        $this->descontoCondicionado = $descontoCondicionado;
    }
}
