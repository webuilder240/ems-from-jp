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
            case $weight <= 6000:
                return 7000;
            case $weight <= 7000:
                return 7800;
            case $weight <= 8000:
                return 8600;
            case $weight <= 9000:
                return 9400;
            case $weight <= 10000:
                return 10200;
            case $weight <= 11000:
                return 11000;
            case $weight <= 12000:
                return 11800;
            case $weight <= 13000:
                return 12600;
            case $weight <= 14000:
                return 13400;
            case $weight <= 15000:
                return 14200;
            case $weight <= 16000:
                return 15000;
            case $weight <= 17000:
                return 15800;
            case $weight <= 18000:
                return 16600;
            case $weight <= 19000:
                return 17400;
            case $weight <= 20000:
                return 18200;
            case $weight <= 21000:
                return 19000;
            case $weight <= 22000:
                return 19800;
            case $weight <= 23000:
                return 20600;
            case $weight <= 24000:
                return 21400;
            case $weight <= 25000:
                return 22200;
            case $weight <= 26000:
                return 23000;
            case $weight <= 27000:
                return 23800;
            case $weight <= 28000:
                return 24600;
            case $weight <= 29000:
                return 25400;
            case $weight <= 30000:
                return 26200;
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
            case $weight <= 6000:
                return 9600;
            case $weight <= 7000:
                return 10700;
            case $weight <= 8000:
                return 11800;
            case $weight <= 9000:
                return 12900;
            case $weight <= 10000:
                return 14000;
            case $weight <= 11000:
                return 15100;
            case $weight <= 12000:
                return 16200;
            case $weight <= 13000:
                return 17300;
            case $weight <= 14000:
                return 18400;
            case $weight <= 15000:
                return 19500;
            case $weight <= 16000:
                return 20600;
            case $weight <= 17000:
                return 21700;
            case $weight <= 18000:
                return 22800;
            case $weight <= 19000:
                return 23900;
            case $weight <= 20000:
                return 25000;
            case $weight <= 21000:
                return 26100;
            case $weight <= 22000:
                return 27200;
            case $weight <= 23000:
                return 28300;
            case $weight <= 24000:
                return 29400;
            case $weight <= 25000:
                return 30500;
            case $weight <= 26000:
                return 31600;
            case $weight <= 27000:
                return 32700;
            case $weight <= 28000:
                return 33800;
            case $weight <= 29000:
                return 34900;
            case $weight <= 30000:
                return 36000;
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
            case $weight <= 6000:
                return 11000;
            case $weight <= 7000:
                return 12300;
            case $weight <= 8000:
                return 13600;
            case $weight <= 9000:
                return 14900;
            case $weight <= 10000:
                return 16200;
            case $weight <= 11000:
                return 17500;
            case $weight <= 12000:
                return 18800;
            case $weight <= 13000:
                return 20100;
            case $weight <= 14000:
                return 21400;
            case $weight <= 15000:
                return 22700;
            case $weight <= 16000:
                return 24000;
            case $weight <= 17000:
                return 25300;
            case $weight <= 18000:
                return 26600;
            case $weight <= 19000:
                return 27900;
            case $weight <= 20000:
                return 29200;
            case $weight <= 21000:
                return 30500;
            case $weight <= 22000:
                return 31800;
            case $weight <= 23000:
                return 33100;
            case $weight <= 24000:
                return 34400;
            case $weight <= 25000:
                return 35700;
            case $weight <= 26000:
                return 37000;
            case $weight <= 27000:
                return 38300;
            case $weight <= 28000:
                return 39600;
            case $weight <= 29000:
                return 40900;
            case $weight <= 30000:
                return 42200;
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
            case $weight <= 6000:
                return 19000;
            case $weight <= 7000:
                return 21100;
            case $weight <= 8000:
                return 23200;
            case $weight <= 9000:
                return 25300;
            case $weight <= 10000:
                return 27400;
            case $weight <= 11000:
                return 29500;
            case $weight <= 12000:
                return 31600;
            case $weight <= 13000:
                return 33700;
            case $weight <= 14000:
                return 35800;
            case $weight <= 15000:
                return 37900;
            case $weight <= 16000:
                return 40000;
            case $weight <= 17000:
                return 42100;
            case $weight <= 18000:
                return 44200;
            case $weight <= 19000:
                return 46300;
            case $weight <= 20000:
                return 48400;
            case $weight <= 21000:
                return 50500;
            case $weight <= 22000:
                return 52600;
            case $weight <= 23000:
                return 54700;
            case $weight <= 24000:
                return 56800;
            case $weight <= 25000:
                return 58900;
            case $weight <= 26000:
                return 61000;
            case $weight <= 27000:
                return 63100;
            case $weight <= 28000:
                return 65200;
            case $weight <= 29000:
                return 67300;
            case $weight <= 30000:
                return 69400;
            default:
                return 0;
        }
    }
}
