<?php
declare(strict_types=1);

namespace Entity;

class Lote
{
    /**
     * @var  int $numeroLote
     */
    private $numeroLote;

    /**
     * @var  int $quantidadeRps
     */
    private $quantidadeRps;

    /**
     * @var  int $numero
     */
    private $numero;

    /**
     * @var  int $serie
     */
    private $serie;

    /**
     * @var  int $tipo
     */
    private $tipo;

    /**
     * @var  \DateTime $dataEmissao
     */
    private $dataEmissao;

    /**
     * @var  Prestador $prestador
     */
    private $prestador;

    /**
     * @return int
     */
    public function getNumeroLote(): int
    {
        return $this->numeroLote;
    }

    /**
     * @param int $numeroLote
     */
    public function setNumeroLote(int $numeroLote)
    {
        $this->numeroLote = $numeroLote;
    }

    /**
     * @return int
     */
    public function getQuantidadeRps(): int
    {
        return $this->quantidadeRps;
    }

    /**
     * @param int $quantidadeRps
     */
    public function setQuantidadeRps(int $quantidadeRps)
    {
        $this->quantidadeRps = $quantidadeRps;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     */
    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return int
     */
    public function getSerie(): int
    {
        return $this->serie;
    }

    /**
     * @param int $serie
     */
    public function setSerie(int $serie)
    {
        $this->serie = $serie;
    }

    /**
     * @return int
     */
    public function getTipo(): int
    {
        return $this->tipo;
    }

    /**
     * @param int $tipo
     */
    public function setTipo(int $tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return \DateTime
     */
    public function getDataEmissao(): \DateTime
    {
        return $this->dataEmissao;
    }

    /**
     * @param \DateTime $dataEmissao
     */
    public function setDataEmissao(\DateTime $dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * @return \Entity\Prestador
     */
    public function getPrestador(): Prestador
    {
        return $this->prestador;
    }

    /**
     * @param \Entity\Prestador $prestador
     */
    public function setPrestador(Prestador $prestador)
    {
        $this->prestador = $prestador;
    }
}
