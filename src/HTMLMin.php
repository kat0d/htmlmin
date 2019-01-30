<?php

/*
 * This file is part of Laravel HTMLMin.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 * (c) Raza Mehdi <srmk@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Katod\HTMLMin;

use Katod\HTMLMin\Minifiers\BladeMinifier;
use Katod\HTMLMin\Minifiers\CssMinifier;
use Katod\HTMLMin\Minifiers\HtmlMinifier;
use Katod\HTMLMin\Minifiers\JsMinifier;

/**
 * This is the htmlmin class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class HTMLMin
{
    /**
     * The blade minifier instance.
     *
     * @var \Katod\HTMLMin\Minifiers\BladeMinifier
     */
    protected $blade;

    /**
     * The css minifier instance.
     *
     * @var \Katod\HTMLMin\Minifiers\CssMinifier
     */
    protected $css;

    /**
     * The js minifier instance.
     *
     * @var \Katod\HTMLMin\Minifiers\JsMinifier
     */
    protected $js;

    /**
     * The html minifier instance.
     *
     * @var \Katod\HTMLMin\Minifiers\HtmlMinifier
     */
    protected $html;

    /**
     * Create a new instance.
     *
     * @param \Katod\HTMLMin\Minifiers\BladeMinifier $blade
     * @param \Katod\HTMLMin\Minifiers\CssMinifier   $css
     * @param \Katod\HTMLMin\Minifiers\JsMinifier    $js
     * @param \Katod\HTMLMin\Minifiers\HtmlMinifier  $html
     *
     * @return void
     */
    public function __construct(BladeMinifier $blade, CssMinifier $css, JsMinifier $js, HtmlMinifier $html)
    {
        $this->blade = $blade;
        $this->css = $css;
        $this->js = $js;
        $this->html = $html;
    }

    /**
     * Get the minified blade.
     *
     * @param string $value
     *
     * @return string
     */
    public function blade($value)
    {
        return $this->blade->render($value);
    }

    /**
     * Get the minified css.
     *
     * @param string $value
     *
     * @return string
     */
    public function css($value)
    {
        return $this->css->render($value);
    }

    /**
     * Get the minified js.
     *
     * @param string $value
     *
     * @return string
     */
    public function js($value)
    {
        return $this->js->render($value);
    }

    /**
     * Get the minified html.
     *
     * @param string $value
     *
     * @return string
     */
    public function html($value)
    {
        return $this->html->render($value);
    }

    /**
     * Return the blade minifier instance.
     *
     * @return \Katod\HTMLMin\Minifiers\BladeMinifier
     */
    public function getBladeMinifier()
    {
        return $this->blade;
    }

    /**
     * Return the css minifier instance.
     *
     * @return \Katod\HTMLMin\Minifiers\CssMinifier
     */
    public function getCssMinifier()
    {
        return $this->css;
    }

    /**
     * Return the js minifier instance.
     *
     * @return \Katod\HTMLMin\Minifiers\JsMinifier
     */
    public function getJsMinifier()
    {
        return $this->js;
    }

    /**
     * Return the html minifier instance.
     *
     * @return \Katod\HTMLMin\Minifiers\HtmlMinifier
     */
    public function getHtmlMinifier()
    {
        return $this->html;
    }
}
