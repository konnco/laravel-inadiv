<?php

namespace Konnco\Inadiv;

use ParseCsv\Csv;

/**
 * Get raw data from CSV Files on /src/data/csv.
 */
class RawDataGetter
{
    /**
     * Raw Data file path.
     *
     * @return string
     */
    protected static $path = __DIR__.'/../database/csv';

    /**
     * Get provinces data.
     *
     * @return array
     */
    public static function getProvinces()
    {
        $result = self::getCsvData(self::$path.'/provinces.csv');

        return $result;
    }

    /**
     * Get cities data.
     *
     * @return array
     */
    public static function getCities()
    {
        $result = self::getCsvData(self::$path.'/cities.csv');

        return $result;
    }

    /**
     * Get districts data.
     *
     * @return array
     */
    public static function getDistricts()
    {
        $result = self::getCsvData(self::$path.'/districts.csv');

        return $result;
    }

    /**
     * Get subdistricts data.
     *
     * @return array
     */
    public static function getSubdistricts()
    {
        $result = self::getCsvData(self::$path.'/subdistricts.csv');

        return $result;
    }

    /**
     * Get Data from CSV.
     *
     * @param string $path File Path.
     *
     * @return array
     */
    public static function getCsvData($path = '')
    {
        $csv = new Csv();
        $csv->auto($path);

        return $csv->data;
    }
}
