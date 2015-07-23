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
            case $weight <= 600:
                return 1240;
            case $weight <= 700:
                return 1380;
            case $weight <= 800:
                return 1520;
            case $weight <= 900:
                return 1660;
            case $weight <= 1000:
                return 1800;
            case $weight <= 1250:
                return 2100;
            case $weight <= 1500:
                return 2400;
            case $weight <= 1750:
                return 2700;
            case $weight <= 2000:
                return 3000;
            case $weight <= 2500:
                return 3500;
            case $weight <= 3000:
                return 4000;
            case $weight <= 3500:
                return 4500;
            case $weight <= 4000:
                return 5000;
            case $weight <= 4500:
                return 5500;
            case $weight <= 5000:
                return 6000;
            case $weight <= 5500:
                return 6500;
            case $weight <= 30000:
                return self::returnCost($weight,800,7000,6000,1000);
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
            case $weight <= 600:
                return 1680;
            case $weight <= 700:
                return 1860;
            case $weight <= 800:
                return 2040;
            case $weight <= 900:
                return 2200;
            case $weight <= 1000:
                return 2400;
            case $weight <= 1250:
                return 2800;
            case $weight <= 1500:
                return 3200;
            case $weight <= 1750:
                return 3600;
            case $weight <= 2000:
                return 4000;
            case $weight <= 2500:
                return 4700;
            case $weight <= 3000:
                return 5400;
            case $weight <= 3500:
                return 6100;
            case $weight <= 4000:
                return 6800;
            case $weight <= 4500:
                return 7500;
            case $weight <= 5000:
                return 8200;
            case $weight <= 5500:
                return 8900;
            case $weight <= 30000:
                return self::returnCost($weight,1100,9600,6000,1000);
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
            case $weight <= 600:
                return 2000;
            case $weight <= 700:
                return 2200;
            case $weight <= 800:
                return 2400;
            case $weight <= 900:
                return 2600;
            case $weight <= 1000:
                return 2800;
            case $weight <= 1250:
                return 3250;
            case $weight <= 1500:
                return 3700;
            case $weight <= 1750:
                return 4150;
            case $weight <= 2000:
                return 4600;
            case $weight <= 2500:
                return 5400;
            case $weight <= 3000:
                return 6200;
            case $weight <= 3500:
                return 7000;
            case $weight <= 4000:
                return 7800;
            case $weight <= 4500:
                return 8600;
            case $weight <= 5000:
                return 9400;
            case $weight <= 5500:
                return 10200;
            case $weight <= 30000:
                return self::returnCost($weight,1300,11000,6000,1000);
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
            case $weight <= 600:
                return 2440;
            case $weight <= 700:
                return 2780;
            case $weight <= 800:
                return 3120;
            case $weight <= 900:
                return 3460;
            case $weight <= 1000:
                return 3800;
            case $weight <= 1250:
                return 4600;
            case $weight <= 1500:
                return 5400;
            case $weight <= 1750:
                return 6200;
            case $weight <= 2000:
                return 7000;
            case $weight <= 2500:
                return 8500;
            case $weight <= 3000:
                return 10000;
            case $weight <= 3500:
                return 11500;
            case $weight <= 4000:
                return 13000;
            case $weight <= 4500:
                return 14500;
            case $weight <= 5000:
                return 16000;
            case $weight <= 5500:
                return 17500;
            case $weight <= 30000:
                return self::returnCost($weight,2100,19000,6000,1000);
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
