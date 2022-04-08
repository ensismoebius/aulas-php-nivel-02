<?php

namespace Src\Controller;

/**
 * @author ensismoebius
 */
class Main
{

    public function inicio(array $data)
    {
        // use twig here
        echo "<h1>Pagina inicial</h1>";

        $ps = new \Src\Model\Pessoa();
        $bd = new \Src\Lib\BancoDeDados();

        var_dump($data);
        var_dump($bd);
    }

    public function contato(array $data)
    {
        // use twig here
        echo "<h1>Contato</h1>";
        var_dump($data);
    }

    public function blog(array $data)
    {
        // use twig here
        echo "<h1>Blog</h1>";
        var_dump($data);
    }

}
