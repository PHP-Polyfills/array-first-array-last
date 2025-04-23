<?php


if (\PHP_VERSION_ID >= 80000) {
    /**
     * Returns the first value of a given array.
     *
     * @param array $array The array to get the first value of.
     * @return mixed First value of the array, or null if the array is
     *   empty. Note that null itself can also be a valid array value.
     */
    function array_first(array $array): mixed {
        return empty($array) ? null : $array[array_key_first($array)];
    }

    /**
     * Returns the first value of a given array.
     *
     * @param array $array The array to get the first value of.
     * @return mixed First value of the array, or null if the array is
     *   empty. Note that null itself can also be a valid array value.
     */
    function array_last(array $array): mixed {
        return empty($array) ? null : $array[array_key_last($array)];
    }
}
else {
    /**
     * Returns the first value of a given array.
     *
     * @param array $array The array to get the first value of.
     * @return mixed First value of the array, or null if the array is
     *   empty. Note that null itself can also be a valid array value.
     */
    function array_first(array $array) {
        return empty($array) ? null : $array[array_key_first($array)];
    }

    /**
     * Returns the first value of a given array.
     *
     * @param array $array The array to get the first value of.
     * @return mixed First value of the array, or null if the array is
     *   empty. Note that null itself can also be a valid array value.
     */
    function array_last(array $array) {
        return empty($array) ? null : $array[array_key_last($array)];
    }
}
