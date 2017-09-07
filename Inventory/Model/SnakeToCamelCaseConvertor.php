<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Model;

class SnakeToCamelCaseConvertor
{
    /**
     * Convert array elements from snake to camel case.
     *
     * @param string[] $elements
     * @return string[]
     */
    public function convert(array $elements): array
    {
        return array_map(
            function ($element) {
                return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower($element)))));
            },
            $elements
        );
    }
}
