## Design Patterns in PHP

### Memento:

```php
<?php

use Tleckie\DesignPatterns\Memento\History;
use Tleckie\DesignPatterns\Memento\Originator;
use Tleckie\DesignPatterns\Memento\State;

$originator = new Originator(new State('Name 1', 'value 1'));
$historic = new History($originator);

var_dump($originator->state()->name()); // 'Name 1'
$originator->changeState(new State('Name 1', 'value 1'));
$historic->save();

$originator->changeState(new State('Name 2', 'value 2'));
var_dump($originator->state()->name()); // 'Name 2'

$historic->undo();
var_dump($originator->state()->name()); // 'Name 1'

$historic->undo();
var_dump($originator->state()->name()); // 'Name 1'

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