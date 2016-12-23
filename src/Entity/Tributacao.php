<?php
namespace Entity;

class Tributacao
{
    /**
     * @var  int $naturezaOperacao
     */
    private $naturezaOperacao;

    /**
     * @var  int $regimeEspecialTributacao
     */
    private $regimeEspecialTributacao;

    /**
     *  @var  int $optanteSimplesNacional
     */
    private $optanteSimplesNacional;

    /**
     * @var  int $incentivadorCultural
     */
    private $incentivadorCultural;

    /**
     * @var  int $status
     */
    private $status;

    /**
     * @return int
     */
    public function getNaturezaOperacao(): int
    {
        return $this->naturezaOperacao;
    }

    /**
     * @param int $naturezaOperacao
     */
    public function setNaturezaOperacao(int $naturezaOperacao)
    {
        $this->naturezaOperacao = $naturezaOperacao;
    }

    /**
     * @return int
     */
    public function getRegimeEspecialTributacao(): int
    {
        return $this->regimeEspecialTributacao;
    }

    /**
     * @param int $regimeEspecialTributacao
     */
    public function setRegimeEspecialTributacao(int $regimeEspecialTributacao)
    {
        $this->regimeEspecialTributacao = $regimeEspecialTributacao;
    }

    /**
     * @return int
     */
    public function getOptanteSimplesNacional(): int
    {
        return $this->optanteSimplesNacional;
    }

    /**
     * @param int $optanteSimplesNacional
     */
    public function setOptanteSimplesNacional(int $optanteSimplesNacional)
    {
        $this->optanteSimplesNacional = $optanteSimplesNacional;
    }

    /**
     * @return int
     */
    public function getIncentivadorCultural(): int
    {
        return $this->incentivadorCultural;
    }

    /**
     * @param int $incentivadorCultural
     */
    public function setIncentivadorCultural(int $incentivadorCultural)
    {
        $this->incentivadorCultural = $incentivadorCultural;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }
}
