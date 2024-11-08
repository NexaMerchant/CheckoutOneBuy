<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-11-08 11:41:00
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\CheckoutOneBuy\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'CheckoutOneBuy:install';

    protected $description = 'Install CheckoutOneBuy an app';

    public function getAppVer() {
        return config("CheckoutOneBuy.ver");
    }

    public function getAppName() {
        return config("CheckoutOneBuy.name");
    }

    public function handle()
    {
        $this->info("Install app: CheckoutOneBuy");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App CheckoutOneBuy Install cannelled");
            return false;
        }
    }
}