<?php

/**
 * Graph.php - A graph to be printed in a plot.
 *
 * @package jaxon-flot
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2017 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/jaxon-php/jaxon-flot
 */

namespace Jaxon\Flot\Plot;

use JsonSerializable;
use Jaxon\Flot\Data\Series;

use function array_merge;

class Graph implements JsonSerializable
{

    /**
     * The graph series
     *
     * @var Series
     */
    public $xSeries;

    /**
     * The graph options
     *
     * @var array
     */
    public $aOptions = [];

    /**
     * The constructor.
     *
     * @param string        $aOptions            The graph options, as defined by the Flot library
     */
    public function __construct(array $aOptions = [])
    {
        $this->xSeries = new Series();
        $this->aOptions = $aOptions;
    }

    /**
     * Get this plot dataset
     *
     * @return Series
     */
    public function series()
    {
        return $this->xSeries;
    }

    /**
     * Set the graph options.
     *
     * @param array         $aOptions               The graph options
     *
     * @return Graph
     */
    public function setOptions(array $aOptions)
    {
        $this->aOptions = array_merge($this->aOptions, $aOptions);
        return $this;
    }

    /**
     * Convert this object to another object more suitable for json format.
     *
     * This is a method of the JsonSerializable interface.
     *
     * @return stdClass
     */
    public function jsonSerialize()
    {
        $json = $this->xSeries->jsonSerialize();
        $json->options = $this->aOptions;
        return $json;
    }
}
