<?php

declare(strict_types=1);

namespace OCA\Carnet\AppInfo;

use OCA\Carnet\Notifications\Notifier;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\Notification\IManager;

class Application extends App implements IBootstrap
{
    public function register(IRegistrationContext $context): void
    {
        // ... registration logic goes here ...

        // Register the composer autoloader from Carnet
        @include_once __DIR__ . '/../../vendor/autoload.php'
    }

    public function boot(IBootContext $context): void
    {
        // ... boot logic goes here ...

        /** @var IManager $manager */
        $manager = $context->getAppContainer()->query(IManager::class)
        $manager->registerNotifierService(Notifier::class);
    }
}
