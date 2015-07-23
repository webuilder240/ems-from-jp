<?php
namespace EmsFromJp;

/**
 * Class EmsFromJp
 * @package EmsFromJp
 */
class EmsFromJp
{
    /**
     * @param $weight
     * @return int
     */
    public static function returnFeeToAsia($weight)
    {
        switch (true) {
            case $weight <= 300:
                return 900;
            case $weight <= 500:
                return 1100;
            case $weight <= 900:
                return self::returnCost($weight, 140, 1240, 600, 100);
            case $weight <= 2000:
                return self::returnCost($weight, 300, 1800, 1000, 250);
            case $weight <= 5500:
                return self::returnCost($weight, 500, 3500, 2500, 500);
            case $weight <= 30000:
                return self::returnCost($weight, 800, 7000, 6000, 1000);
            default:
                return 0;
        }
    }

    /**
     * @param $weight
     * @return int
     */
    public static function returnFeeToOceania($weight)
    {
        switch (true) {
            case $weight <= 300:
                return 1200;
            case $weight <= 500:
                return 1500;
            case $weight <= 900:
                return self::returnCost($weight, 180, 1680, 600, 100);
            case $weight <= 2000:
                return self::returnCost($weight, 400, 2400, 1000, 250);
            case $weight <= 5500:
                return self::returnCost($weight, 700, 4700, 2500, 500);
            case $weight <= 30000:
                return self::returnCost($weight, 1100, 9600, 6000, 1000);
            default:
                return 0;
        }
    }

    /**
     * @param $weight
     * @return int
     */
    public static function returnFeeToEuropa($weight)
    {
        switch (true) {
            case $weight <= 300:
                return 1500;
            case $weight <= 500:
                return 1800;
            case $weight <= 900:
                return self::returnCost($weight, 200, 2000, 600, 100);
            case $weight <= 2000:
                return self::returnCost($weight, 450, 2800, 1000, 250);
            case $weight <= 5500:
                return self::returnCost($weight, 800, 5400, 2500, 500);
            case $weight <= 30000:
                return self::returnCost($weight, 1300, 11000, 6000, 1000);
            default:
                return 0;
        }
    }

    /**
     * @param $weight
     * @return int
     */
    public static function returnFeeToAfrica($weight)
    {
        switch (true) {
            case $weight <= 300:
                return 1700;
            case $weight <= 500:
                return 2100;
            case $weight <= 900:
                return self::returnCost($weight, 340, 2440, 600, 100);
            case $weight <= 2000:
                return self::returnCost($weight, 800, 3800, 1000, 250);
            case $weight <= 5500:
                return self::returnCost($weight, 1500, 8500, 2500, 500);
            case $weight <= 30000:
                return self::returnCost($weight, 2100, 19000, 6000, 1000);
            default:
                return 0;
        }
    }

    private static function returnCost($weight, $price_scale, $base_price, $base_weight, $weight_scale)
    {
        $w = ceil(($weight - $base_weight) / $weight_scale);
        return $base_price + ($w * $price_scale);
    }
}
