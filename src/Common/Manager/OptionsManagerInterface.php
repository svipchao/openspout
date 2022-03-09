<?php

namespace OpenSpout\Common\Manager;

/**
 * Interface OptionsManagerInterface.
 */
interface OptionsManagerInterface
{
    /**
     * @param string $optionName
     * @param mixed  $optionValue
     */
    public function setOption($optionName, $optionValue);

    /**
     * @param string $optionName
     *
     * @return null|mixed The set option or NULL if no option with given name found
     */
    public function getOption($optionName);
}
