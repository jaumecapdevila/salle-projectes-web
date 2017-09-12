<?php
namespace ProjectesWeb\View;

/**
 * Class ViewHelper
 * @package ProjectesWeb\lib\View
 */
/**
 * Class ViewHelper
 * @package ProjectesWeb\lib\View
 */
class ViewHelper
{
    /**
     * @param string $file
     * @param array $data
     * @return string
     */
    function render($file, $data = []): string
    {
        if (is_array($data) && !empty($data)) {
            extract($data);
        }
        $fileToRender = __DIR__ . "/templates/" . $file . ".php";
        if (!file_exists($fileToRender)) {
            return false;
        }
        ob_start();
        include_once $fileToRender;
        return ob_get_clean();
    }
}