<?php
require_once 'vendor/autoload.php';

use Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\Furniture\FurnitureDemo;
use Ungnguyen\PhpDesignPattern\Creational\AbstractFactory\PhoneAndTablet\PhoneAndTabletDemo;
use Ungnguyen\PhpDesignPattern\Creational\Builder\HousePlan\HousePlanDemo;
use Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Animal\AnimalDemo;
use Ungnguyen\PhpDesignPattern\Creational\FactoryMethod\Logistic\LogisticDemo;
use Ungnguyen\PhpDesignPattern\Structural\Adapter\Notification\NotificationDemo;
use Ungnguyen\PhpDesignPattern\Structural\Adapter\PegAndHole\PegAndHoleDemo;
use Ungnguyen\PhpDesignPattern\Structural\Bridge\ImageImplementor\ImageImplementorDemo;
use Ungnguyen\PhpDesignPattern\Structural\Bridge\RemoteControl\RemoteControlDemo;
use Ungnguyen\PhpDesignPattern\Structural\Bridge\RenderView\RenderViewDemo;
use Ungnguyen\PhpDesignPattern\Structural\Composite\CompanyStructure\CompanyStructureDemo;
use Ungnguyen\PhpDesignPattern\Structural\Composite\GiftPrice\GiftPriceDemo;
use Ungnguyen\PhpDesignPattern\Structural\Decorator\Logging\LoggingDemo;
use Ungnguyen\PhpDesignPattern\Structural\Decorator\TextFormat\TextFormatDemo;
use Ungnguyen\PhpDesignPattern\Structural\Facade\EmailWelcome\EmailWelcomeDemo;
use Ungnguyen\PhpDesignPattern\Structural\Flyweight\CatVariation\CatVariationDemo;
use Ungnguyen\PhpDesignPattern\Structural\Flyweight\GameCharacter\GameCharacterDemo;
use Ungnguyen\PhpDesignPattern\Structural\Proxy\YoutubeManager\YoutubeManagerDemo;

/**
 * Decorator pattern demo
 */
//LoggingDemo::main();
//TextFormatDemo::main();

/**
 * Adapter pattern demo
 */
//PegAndHoleDemo::main();
//NotificationDemo::main();

/**
 * Bridge pattern demo
 */
//ImageImplementorDemo::main();
//RemoteControlDemo::main();
//RenderViewDemo::main();

/**
 * Composite pattern demo
 */
//GiftPriceDemo::main();
//CompanyStructureDemo::main();

/**
 * Facade pattern demo
 */
//EmailWelcomeDemo::main();

/**
 * Flyweight pattern demo
 */
//GameCharacterDemo::main();
//CatVariationDemo::main();

/**
 * Proxy pattern demo
 */
//YoutubeManagerDemo::main();

/**
 * Factory method pattern demo
 */
//LogisticDemo::main();
//AnimalDemo::main();

/**
 * Abstract factory pattern demo
 */
//PhoneAndTabletDemo::main();
//FurnitureDemo::main();

/**
 * Builder pattern demo
 */
HousePlanDemo::main();
