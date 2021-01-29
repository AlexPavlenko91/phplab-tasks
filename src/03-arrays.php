<?php
/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param array $input
 * @return array
 */
function repeatArrayValues(array $input): array
{
    $output = [];
    foreach ($input as $key => $val) {
        for ($i = 0; $i < $val; $i++) {
            array_push($output, $val);
        }
    }
    return $output;
}

/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param array $input
 * @return int
 */
function getUniqueValue(array $input): int
{
    $arrCount = array_count_values($input);
    $uniqArr = array_keys(array_filter($arrCount, function ($val) {
        return $val == 1;
    }));
    return !empty($uniqArr) ? min($uniqArr) : 0;
}

/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param array $input
 * @return array
 */
function groupByTag(array $input): array
{
    asort($input);
    $output = [];
    foreach ($input as $key => $val) {
        foreach ($val['tags'] as $tag) {
            $output[$tag][] = $val['name'];
        }
    }
    ksort($output);
    return $output;
}