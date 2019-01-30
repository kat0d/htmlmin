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

namespace Katod\HTMLMin\Minifiers;

use Minify_HTML;

/**
 * This is the html minifier class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class HtmlMinifier implements MinifierInterface
{
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
     * Create a new instance.
     *
     * @param \Katod\HTMLMin\Minifiers\CssMinifier $css
     * @param \Katod\HTMLMin\Minifiers\JsMinifier  $js
     *
     * @return void
     */
    public function __construct(CssMinifier $css, JsMinifier $js)
    {
        $this->css = $css;
        $this->js = $js;
    }

    /**
     * Get the minified value.
     *
     * @param string $value
     *
     * @return string
     */
    public function render($value)
    {
        $options = [
            'cssMinifier' => function ($css) {
                return $this->css->render($css);
            },
            'jsMinifier' => function ($js) {
                return $this->js->render($js);
            },
            'jsCleanComments' => true,
        ];

        return Minify_HTML::minify($value, $options);
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
}
