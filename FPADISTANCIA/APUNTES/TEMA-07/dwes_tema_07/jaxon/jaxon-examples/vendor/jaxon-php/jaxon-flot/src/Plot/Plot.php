<?php

/**
 * Plot.php - A plot containing one or more graphs.
 *
 * @package jaxon-flot
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2017 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/jaxon-php/jaxon-flot
 */

namespace Jaxon\Flot\Plot;

use JsonSerializable;
use Jaxon\Flot\Data\Ticks;

use function trim;

class Plot implements JsonSerializable
{

    /**
     * The HTML element selector
     *
     * @var string
     */
    protected $sSelector;

    /**
     * The graphs
     *
     * @var array
     */
    protected $aGraphs = [];

    /**
     * The plot options
     *
     * @var array
     */
    protected $aOptions;

    /**
     * The plot width
     *
     * @var string
     */
    protected $sWidth;

    /**
     * The plot height
     *
     * @var string
     */
    protected $sHeight;

    /**
     * The plot X axis
     *
     * @var Jaxon\Flot\Data\Ticks
     */
    protected $xAxisX;

    /**
     * The plot Y axis
     *
     * @var Jaxon\Flot\Data\Ticks
     */
    protected $xAxisY;

    /**
     * The constructor.
     *
     * @param string        $sSelector            The jQuery selector
     */
    public function __construct($sSelector)
    {
        $this->sSelector = trim($sSelector, " \t");
        $this->xAxisX = new Ticks();
        $this->xAxisY = new Ticks();
        $this->sWidth = '';
        $this->sHeight = '';
    }

    /**
     * Set the container width.
     *
     * @param string        $sWidth                 The container width
     *
     * @return Jaxon\Flot\Plot\Plot
     */
    public function width($sWidth)
    {
        $this->sWidth = trim($sWidth, " \t");
        return $this;
    }

    /**
     * Set the container height.
     *
     * @param string        $sHeight                The container height
     *
     * @return Jaxon\Flot\Plot\Plot
     */
    public function height($sHeight)
    {
        $this->sHeight = trim($sHeight, " \t");
        return $this;
    }

    /**
     * Add a new graph to the plot.
     *
     * @param array         $aOptions               The graph options
     *
     * @return Jaxon\Flot\Plot\Graph
     */
    public function graph(array $aOptions = [])
    {
        $xGraph = new Graph($aOptions);
        $this->aGraphs[] = $xGraph;
        return $xGraph;
    }

    /**
     * Get the graph X axis.
     *
     * @return Jaxon\Flot\Data\Ticks
     */
    public function xaxis()
    {
        return $this->xAxisX;
    }

    /**
     * Get the graph Y axis.
     *
     * @return Jaxon\Flot\Data\Ticks
     */
    public function yaxis()
    {
        return $this->xAxisY;
    }

    /**
     * Convert this object to an array for json format.
     *
     * This is a method of the JsonSerializable interface.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'selector' => $this->sSelector,
            'graphs' => $this->aGraphs,
            'xaxis' => $this->xAxisX,
            'yaxis' => $this->xAxisY,
            'size' => ['width' => $this->sWidth, 'height' => $this->sHeight],
        ];
    }
}
