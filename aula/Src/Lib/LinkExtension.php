<?php

namespace Etec\Aula\Lib;

// Comandos para facilitar as referências
// as classes do Twig
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Plugin para o Twig que gera links práticos de usar
 */
class LinkExtension extends AbstractExtension
{
    private string $baseURL;

    public function __construct(string $baseURL)
    {
        $this->baseURL = $baseURL;
    }

    /**
     * Cria os comandos para o Twig
     * "link" para links
     *
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('link', [$this, 'getLink'], ['is_safe' => ['html']]),
            new TwigFunction('url', [$this, 'getURL'], ['is_safe' => ['html']]),
        ];
    }


    /**
     * Retorna o caminho do link
     *
     * @param string $path
     * @return string
     */
    public function getLink(string $path, string $caption): string
    {
        return sprintf('<a href="%s%s">%s</a>', $this->baseURL, $path, $caption);
    }

    /**
     * Retorna o caminho da URL para fomulários
     *
     * @param string $path
     * @return string
     */
    public function getURL(string $path): string
    {
        return sprintf('%s%s', $this->baseURL, $path);
    }
}
