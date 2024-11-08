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

class UnInstall extends CommandInterface 

{
    protected $signature = 'CheckoutOneBuy:uninstall';

    protected $description = 'Uninstall CheckoutOneBuy an app';

    public function getAppVer() {
        return config("CheckoutOneBuy.ver");
    }

    public function getAppName() {
        return config("CheckoutOneBuy.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App CheckoutOneBuy UnInstall cannelled");
            return false;
        }
    }
}