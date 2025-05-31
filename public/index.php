<?php

require_once __DIR__ . '/../vendor/autoload.php';


echo "Привет! Это публичная часть сайта (frontend).";

//$worker = new \App\Worker();
//$worker->work();
echo 123;
//$age = 11;
//
//$visitor = new \App\Visitor($age);
////$visitor->someFunction();
////
////echo "<pre>";
////var_dump($visitor);
////echo "</pre>";
//
//
//$developer = new \App\Developer('Boris', 20, [3, 5, 7], 'director');
//
//echo $developer->asdasd;

//echo "<pre>";
//var_dump($developer);
//echo "</pre>";

//$worker = new \App\Worker('Boris', 20, [3, 5, 7]);

//$alg = new App\examples\Algoritms();
//
//$result1 = $alg->fizzBuzz(20);
////echo implode('<br>', $result1);
//
//$result2 = $alg->fizzBuzz2(7);
//echo implode('<br>', $result2);

//var_dump($alg->isPalindrome('asddsaa'));
//
//var_dump($alg->getMaxValue2([3, 5, 7, 55, 6, 99, 8]));

//$foo = 'bar';
//$bar = 'Hello, world!';
//
//echo $$foo;

//$user = new \App\examples\MagicMethods();
//$user->name = "Alice";       // вызовет __set()
//echo $user->name;

//
//\App\examples\PozdnStatSvjz\Dog::whoAmI();
//\App\examples\PozdnStatSvjz2\Dog::makeSound();

//echo \App\examples\PozdnStatSvjz3\Logger::log('Message');
//echo "<br>";
//echo \App\examples\PozdnStatSvjz3\FileLogger::log('Message');

//echo \App\examples\PozdnStatSvjz4\Logger::create()->write('Message');
//echo "<br>";
//echo \App\examples\PozdnStatSvjz4\DbLogger::create()->write('Message');
//echo "<br>";
//echo \App\examples\PozdnStatSvjz4\FileLogger::create()->write('Message');

//$developer = new \App\Developer('Boris', 20, [3, 5, 7], 'director');
//$developer->rest();
//
//$test = new App\Test('asdad', 20, [3, 5, 7], 'director');
//$test->rest();
//
//echo "<br>";
//print_r(serialize($test));
//C:\work_php\new\oop\app\examples\TestNamespace\App\Logger.php
//$logger1 = new App\Logger();
//$logger2 = new Vendor\Logger();

//$logger1->log('123');
//$logger2->log('asd');

//$myException = new \App\examples\MyExceptions();
//$myException->start();

//$a = App\patterns\Singleton\Singleton::getInstance();
//$a->setProperty('age', 37);
//
//$b = clone $a;
//
////var_dump($a);
//$a->setProperty('name', 'asd');
//var_dump($a);
//echo "<br>";
//var_dump($b);


//$obj = new \App\examples\TestEnum\Car(Color::RED);
//
//$reflection = new \ReflectionClass($obj);
//$property = $reflection->getProperty('color');
//$property->setAccessible(true);
//
//$color = $property->getValue($obj);
//echo $color->value;

// Generator
//$gen = new \App\examples\Generator();
//$gen->start();


// Iterator
//$iterator = new \App\examples\MyIterator([2,4,5,7]);
//
//foreach ($iterator as $key => $value) {
//    echo "$key => $value\n";
//}

// Strategy
//$lessons[] = new \App\patterns\Strategy\Lesson\Seminar(4, new \App\patterns\Strategy\CostStrategy\TimedCostStrategy());
//$lessons[] = new \App\patterns\Strategy\Lesson\Lecture(4, new \App\patterns\Strategy\CostStrategy\FixedCostStrategy());
//
//foreach ($lessons as $lesson) {
//    print "Плата за занятие {$lesson->cost()}. ";
//    print "Тип оплаты: {$lesson->chargeType()}. ";
//    echo "<br>";
//}

// Factory Method 1
//$mgr = new \App\patterns\FactoryMethod\CommsManager\BloggsCommsManager();
//echo $mgr->getHeaderText();
//echo "<br>";
//echo $mgr->getApptEncoder()->encode();
//echo "<br>";
//echo $mgr->getFooterText();

// Factory Method 2
//$notifier = new \App\patterns\FactoryMethod\Practic\NotifierFactory\SmsNotifierFactory();
//$smsNotifier = $notifier->createNotifier();
//$smsNotifier->send('Костя');
//
//$notifiactionService = new \App\patterns\FactoryMethod\Practic\NotificationService();
//$notifiactionService->notifyUser(new \App\patterns\FactoryMethod\Practic\NotifierFactory\SmsNotifierFactory(), 'Kostya');

// Abstract Factory
//$notifiactionService = new \App\patterns\AbstractFactory\Practic\NotificationService();
//$notifiactionService->notifyAndLog(new App\patterns\AbstractFactory\Practic\NotificationFactory\EmailNotificationFactory(), 'привет по емейл');
//echo "<br>";
//$notifiactionService->notifyAndLog(new App\patterns\AbstractFactory\Practic\NotificationFactory\SmsNotificationFactory(), 'привет по sms');

// Builder
//$burgerBuilder = new App\patterns\Builder\BurgerBuilder();
//$burger = $burgerBuilder->setBun('Sesame')
//    ->setSauce('Ketchup')
//    ->addTopping('Cheese')
//    ->addTopping('Lettuce')
//    ->build();
//
//$burger->describe();

// Prototype
//$originalNotifier = new \App\patterns\Prototype\SmsNotifier('+380985575391');
//
//$clone0 = $originalNotifier->send('первое сообщение');
//
//$clone1 = $originalNotifier->clone();
//$clone1->send('Привет, Костя');
//
//$clone2 = $originalNotifier->clone();
//$clone2->send('Еще одно сообщение');

function hasUniqueChars($string): bool
{
    $temp = [];

    foreach (str_split($string) as $char) {
        if (in_array($char, $temp)) {
            return false;
        }

        $temp[] = $char;
    }

    return true;
}

var_dump(hasUniqueChars('asdw'));