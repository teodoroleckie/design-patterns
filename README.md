## Design Patterns in PHP

### Memento:

```php
<?php

use Tleckie\DesignPatterns\Memento\History;
use Tleckie\DesignPatterns\Memento\Originator;
use Tleckie\DesignPatterns\Memento\State;

$originator = new Originator(new State('Name 1', 'value 1'));
$historic = new History($originator);

$originator->state()->name(); // 'Name 1'
$originator->changeState(new State('Name 1', 'value 1'));
$historic->save();

$originator->changeState(new State('Name 2', 'value 2'));
$originator->state()->name(); // 'Name 2'

$historic->undo();
$originator->state()->name(); // 'Name 1'

$historic->undo();
$originator->state()->name(); // 'Name 1'

```

### State:
```php
<?php

use Tleckie\DesignPatterns\State\Car;
use Tleckie\DesignPatterns\State\OffState;
use Exception;

$car = new Car(new OffState());
$car->isOn(); // false

try{

    $car->turnOff(); // trow Exception

}catch(Exception $exception){

}

$car->turnOn(); // OnState
$car->isOn(); // true
$car->speedUp(); //SpeedUpState
```

### Strategy:
```php
<?php

use Tleckie\DesignPatterns\Strategy\Context;
use Tleckie\DesignPatterns\Strategy\Terms;
use Tleckie\DesignPatterns\Strategy\MultiplyStrategy;
use Tleckie\DesignPatterns\Strategy\DivisionStrategy;
use Tleckie\DesignPatterns\Strategy\SumStrategy;

$context = new Context(new MultiplyStrategy);
$terms = new Terms(6,3);

$context->execute($terms); // 18
$context->changeStrategy(new DivisionStrategy)->execute($terms); // 2
$context->changeStrategy(new SumStrategy)->execute($terms); // 9
```

### Chain of Responsibility:
```php
<?php

use Tleckie\DesignPatterns\ChainResponsibility\DivisionOperation;
use Tleckie\DesignPatterns\ChainResponsibility\SumOperation;
use Tleckie\DesignPatterns\ChainResponsibility\SubtractionOperation;
use Tleckie\DesignPatterns\ChainResponsibility\Operation;

$divisionOperationHandler = new DivisionOperation();

$divisionOperationHandler
    ->next(new SumOperation())
    ->next(new SubtractionOperation());

$divisionOperationHandler->handle(new Operation('SUBTRACTION', 10,2)); // 8
$divisionOperationHandler->handle(new Operation('DIVISION', 10,2)); // 5
$divisionOperationHandler->handle(new Operation('SUM', 10,2)); // 12
$divisionOperationHandler->handle(new Operation('INVALID', 10,2)); // null
```