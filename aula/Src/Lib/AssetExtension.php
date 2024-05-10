<?php

namespace Etec\Aula\Lib;

// Comandos para facilitar as referências
// as classes do Twig
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Plugin para o Twig que Carrega de forma 
 * conveniente imagens, scripts e css
 */
class AssetExtension extends AbstractExtension
{
    private string $imageBasePath;
    private string $scriptBasePath;
    private string $cssBasePath;

    /**
     * Cria o carregador de recursos
     *
     * @param string $imageBasePath Caminho do diretório de imagens
     * @param string $scriptBasePath    Caminho do diretório de scripts
     * @param string $cssBasePath   Caminho do diretório de css
     */
    public function __construct(string $imageBasePath, string $scriptBasePath, string $cssBasePath)
    {
        $this->imageBasePath = $imageBasePath;
        $this->scriptBasePath = $scriptBasePath;
        $this->cssBasePath = $cssBasePath;
    }

    /**
     * Cria os comandos para o Twig
     * "image" para imagens
     * "script" para scripts
     * "style" para css
     *
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('image', [$this, 'getImagePath']),
            new TwigFunction('script', [$this, 'getScriptTag'], ['is_safe' => ['html']]),
            new TwigFunction('style', [$this, 'getStyleTag'], ['is_safe' => ['html']])
        ];
    }


    /**
     * Retorna o caminho da imagem
     *
     * @param string $path
     * @return string
     */
    public function getImagePath(string $path): string
    {
        return sprintf('%s/%s', $this->imageBasePath, $path);
    }

    /**
     * Retorna o caminho do script
     *
     * @param string $path
     * @return string
     */
    public function getScriptTag(string $path): string
    {
        return sprintf('<script src="%s/%s"></script>', $this->scriptBasePath, $path);
    }

    /**
     * Retorna o caminho do css
     *
     * @param string $path
     * @return string
     */
    public function getStyleTag(string $path): string
    {
        return sprintf('<link href="%s/%s" rel="stylesheet">', $this->cssBasePath, $path);
    }
}
