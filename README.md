## Design Patterns in PHP

### Memento:

```php
<?php

    use Tleckie\DesignPatterns\Memento\History;
    use Tleckie\DesignPatterns\Memento\Originator;
    use Tleckie\DesignPatterns\Memento\State;
    
    $originator = new Originator(new State('Name 1', 'value 1'));
    $historic = new History($originator);

    var_dump($originator->state()->name());
    $originator->changeState(new State('Name 1', 'value 1'));
    $historic->save();

    $originator->changeState(new State('Name 2', 'value 2'));
    var_dump($originator->state()->name());

    $historic->undo();
    var_dump($originator->state()->name());

    $historic->undo();
    var_dump($originator->state()->name());

```