<?php


class NFSeCwb
{
    CONST ENV_PRODUCTION = 1;
    CONST ENV_SANDBOX = 0;

    private $config;

    function __construct($enviromment)
    {
        $this->config($enviromment);
    }


    /**
     * @param $enviromment
     *
     * @return int
     * @throws \Exception
     */
    private function config($enviromment): int
    {
        $file = include_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';
        if (file_exists($file)) {
            $this->config = ($enviromment === self::ENV_PRODUCTION) ? $file['production'] : $file['sandbox'];
        } else {
            throw new Exception('Arquivo de configuração não encontrado!');
        }
    }
}