<?php
declare(strict_types=1);

namespace Entity;

class Tomador
{
    /**
     * @var  int $cnpj
     */
    private $cnpj;

    /**
     * @var  string $razaoSocial
     */
    private $razaoSocial;

    /**
     * @var  string $endereco
     */
    private $endereco;

    /**
     * @var  int $numero
     */
    private $numero;

    /**
     * @var  string $complemento
     */
    private $complemento;

    /**
     * @var  string $bairro
     */
    private $bairro;

    /**
     * @var  int $codigoMunicipio
     */
    private $codigoMunicipio;

    /**
     * @var  string $uf
     */
    private $uf;

    /**
     * @var  int $cep
     */
    private $cep;

    /**
     * @var  int $telefone
     */
    private $telefone;

    /**
     * @var  string $email
     */
    private $email;


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
     * @return string
     */
    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    /**
     * @param string $razaoSocial
     */
    public function setRazaoSocial(string $razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
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
     * @return string
     */
    public function getComplemento(): string
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento(string $complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     */
    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;
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

    /**
     * @return string
     */
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * @param string $uf
     */
    public function setUf(string $uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return int
     */
    public function getCep(): int
    {
        return $this->cep;
    }

    /**
     * @param int $cep
     */
    public function setCep(int $cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return int
     */
    public function getTelefone(): int
    {
        return $this->telefone;
    }

    /**
     * @param int $telefone
     */
    public function setTelefone(int $telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
