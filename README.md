# geekhub-homework-03

This is a set of classes that shows basic OOP principles.

Inheritance:
Band\KeyboardInstruments\Banjo inherits method makeSound() from Band\Instruments\MusicalInstrument

Encapsulation:
Band\Musicians\Band encapsulates $musicians property

Polymorphism:
Band\Musicians\Musician::__construct() we can pass here any class that extends Band\Instruments\MusicalInstrument.
For example: Band\StringInstruments\Banjo or Band\StringInstruments\Guitar.
