<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Este archivo se utiliza para crear los primeros elementos de la base de datos
     *
     * @return void
     */
    public function run()
    {
        /** protected $fillable = ['imagePath','type','name','color','weight','price','description']; */
        /** BMX */
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/fe62f745/weblrg.jpg',
            'type' => 'BMX',
            'name' => 'Mirra Pro Tribute',
            'color' => 'Red',
            'weight' => 26.5,
            'price' => 869.99,
            'description' => 'There are no two ways about it: Dave Mirra was the spark that revitalized Haro in the mid 1990s. 
            Gone were the days of Bob Haro and Ron Wilkerson behind the brand\'s direction -- it was now Dave Mirra and 
            Ryan Nyquist designing complete bikes that were affordable, high quality and available worldwide to a 
            new legion of BMX fans. A few years later, the X Games hit, and suddenly, Dave Mirra\'s 
            signature Haro was on every TV screen of an ESPN subscriber, and demand for his 
            signature bikes and components sky rocketed.'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/c0927894/weblrg.jpg',
            'type' => 'BMX',
            'name' => 'Lineage Team Master',
            'color' => 'Blue',
            'weight' => 28.2,
            'price' => 1409.99,
            'description' => ' '
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/78e63f70/weblrg.jpg',
            'type' => 'BMX',
            'name' => 'Lineage Team Sport',
            'color' => 'Black',
            'weight' => 28,
            'price' => 1409.99,
            'description' => ''
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/b87eaad7/weblrg.jpg',
            'type' => 'BMX',
            'name' => 'Group 1 RS-1 29',
            'color' => 'Blue',
            'weight' => 31,
            'price' => 1089.99,
            'description' => ''
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/d7fefbea/weblrg.jpg',
            'type' => 'BMX',
            'name' => 'Downtown DLX',
            'color' => 'Matte Black',
            'weight' => 29.2,
            'price' => 349.99,
            'description' => ''
        ]);
        $product->save();
        /** Mountain bike */
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/5845a9d5/weblrg.jpg',
            'type' => 'MTB',
            'name' => 'Shift S3',
            'color' => 'Black',
            'weight' => 29.2,
            'price' => 1199.99,
            'description' => 'The Shift S3 is an excellent full suspension performer. 
            Its frame is made of 6000 alloy featuring a tapered head tube and 120mm of cross country travel.
             S3 features our single pivot design that offers a simple, fully efficient suspension system with 
             fewer pivots and bearings resulting in easy and low cost maintenance. Leading the way is a Suntour 
             Raidon XC fork with 120mm of travel and. Its semi complete Deore 2X drive train is matched to Suntour\'s 
             XCM crankset. Efficient stopping is provided for courtesy of Tektro\'s Auriga disc brake set complete 
             with 160mm rotor on the rear and an oversize 180mm rotor on the front.'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/06a1879f/weblrg.jpg',
            'type' => 'MTB',
            'name' => 'FLC 27.5 Comp',
            'color' => 'Black',
            'weight' => 30,
            'price' => 2399.99,
            'description' => 'FLC, carbon hard tails that are so light they almost disappear beneath you. 
            The FLC Comp starts it off by utilizing Haro\'s exclusive M2X frame design platform, 
            an innovative approach that combines oversized tapered head tube, massive downtube, 
            and wider bb92 bottom bracket delivering a high level of torsional stiffness to optimize 
            power transfer and utilizes super stiff unidirectional high modulus carbon fiber to get it done. 
            Packed with a bike full of features including a RockShox Recon Gold RL 100mm travel fork with thru axle, 
            semi complete Shimano SLX 1X drive train along side an FSA Comet Modular crankset with 32t chainring. 
            Fast rolling thanks to its U-28 TL tubless compatible disc rims and Kenda Honey Badger 60tpi tires. 
            Also available in 29" (see FLC 29 Comp)'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/3f795a20/weblrg.jpg',
            'type' => 'MTB',
            'name' => 'Solum IO',
            'color' => 'Black',
            'weight' => 28,
            'price' => 2799.99,
            'description' => 'Brand new for 2018, the Solum i/O brings Haro\'s vaunted Rider Tuned 
            Geometry to the pedelec category. Designed from the ground up to be the ultimate sporty eBike, 
            the Solum i/O is equally at home crushing your commute, unpaved lake roads, or that rails to 
            trails route on the weekend. Shimano\'s STePS center-drive motor system provides assistance 
            up to 20 miles per hour, and its 418 WH battery provides you with up to a 60 mile range depending 
            on mode selected. Shimano\'s 1x10 drivetrain is simple and efficient and allows you to get from 
            here to there without even breaking a sweat. Solum i/O has full rack and fender mounts, 
            Haro commuter saddle with a micro adjust seat post, and Shimano M315 hydraulic brakes 
            provide reliable stops in all weather conditions.'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/e0161f57/weblrg.jpg',
            'type' => 'MTB',
            'name' => 'Double Peak 29 Sport',
            'color' => 'Black',
            'weight' => 27,
            'price' => 519.99,
            'description' => 'Double Peak, a series inspired by a local spot not far from Haro 
            utilizes a low stand over, low center of gravity designed frame made from 6000 series alloy, 
            an internal head tube, and internal cable routing to keep things clean and tucked away. 
            DP Sport features a 24speed drive train commanded by Shimano\'s Easy Fire 3x8 speed shifters. 
            It rolls fast and launches over obstacles on its XM-2 29" double wall rims, stainless 
            spokes and finished with Kenda Honey badger 29" x 2.2" tires. The front end features a 
            Suntour XCT 100mm fork and has a hydraulic lockout ready when desired. The Sport with its 
            big wheels loves to go fast, but it can stop on a dime thanks to Shimano\'s M-315 Hydraulic disc brake set.'
        ]);
        $product->save();
        /**Race */
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/44e7c6c5/weblrg.jpg',
            'type' => 'RACE',
            'name' => 'Annex Expert',
            'color' => 'Red',
            'weight' => 16.9,
            'price' => 399.99,
            'description' => ''
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/8208f3e6/weblrg.jpg',
            'type' => 'RACE',
            'name' => 'Expert',
            'color' => 'Black',
            'weight' => 18.9,
            'price' => 539.99,
            'description' => ''
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/d6917faf/weblrg.jpg',
            'type' => 'RACE',
            'name' => 'Pro 24',
            'color' => 'Black',
            'weight' => 21.75,
            'price' => 609.99,
            'description' => ''
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.bigimagerack.com/cfs/img/2014/312a29f6/weblrg.jpg',
            'type' => 'RACE',
            'name' => 'Annex Pro',
            'color' => 'Red',
            'weight' => 23.1,
            'price' => 399.99,
            'description' => ''
        ]);
        $product->save();
    }
}
