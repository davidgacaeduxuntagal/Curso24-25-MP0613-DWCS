<?php

/**
 * Ticks.php - Contains data to be printed on the plot axis.
 *
 * @package jaxon-flot
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2017 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/jaxon-php/jaxon-flot
 */

namespace Jaxon\Flot\Data;

use JsonSerializable;
use stdClass;

use function count;

class Ticks implements JsonSerializable
{

    /**
     * The points
     *
     * @var array
     */
    protected $aPoints;

    /**
     * The points labels
     *
     * @var array
     */
    protected $aLabels;

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->aPoints = [];
        $this->aLabels = ['data' => null, 'func' => null];
    }

    /**
     * Add a point to the ticks.
     *
     * @param integer       $iXaxis                 The point on the X axis
     * @param string        $sLabel                 The value on the graph
     *
     * @return Jaxon\Flot\Data\Ticks
     */
    public function point($iXaxis, $sLabel)
    {
        $this->aPoints[] = $iXaxis;
        if(!$this->aLabels['data'])
        {
            $this->aLabels['data'] = [];
        }
        $this->aLabels['data']["$iXaxis"] = $sLabel;
        return $this;
    }

    /**
     * Add an array of points to the ticks.
     *
     * @param array         $aPoints                The points to be added
     *
     * @return integer      The number of points in the ticks
     */
    public function points($aPoints)
    {
        foreach($aPoints as $aPoint)
        {
            if(count($aPoint) == 2)
            {
                $this->point($aPoint[0], $aPoint[1]);
            }
        }
        return count($this->aPoints);
    }

    /**
     * Add points to the ticks using an expression.
     *
     * @param numeric       $iStart                 The first point
     * @param numeric       $iEnd                   The last point
     * @param numeric       $iStep                  The step between next points
     * @param string        $sJsLabel               The javascript code to make points labels
     *
     * The first three parameters are used in a for loop.
     * The x variable is used in the javascript code to represent each point.
     *
     * @return integer      The number of points in the ticks
     */
    public function expr($iStart, $iEnd, $iStep, $sJsLabel)
    {
        for($x = $iStart; $x < $iEnd; $x += $iStep)
        {
            $this->aPoints[] = $x;
        }
        $this->aLabels['func'] = 'return ' . $sJsLabel . ';';
        return count($this->aPoints);
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
        // Surround the js var with a special marker that will later be removed
        // Note: does not work when returning an array
        $json = new stdClass;
        $json->points = $this->aPoints;
        $json->labels = $this->aLabels;
        return $json;
    }
}
