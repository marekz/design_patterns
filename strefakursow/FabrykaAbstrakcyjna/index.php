<?php

/**
 * Abstrakcyjan fabryka
 */
abstract class UIFactory {

    abstract function createButton();

    abstract function createMenu();
}

/**
 * Klasa fabryki Windows
 */
class WindowsUIFactory extends UIFactory {

    function createButton() {
        return new WindowsButtons();
    }

    public function createMenu() {
        return new WindowsMenu();
    }

}

/**
 * Klasa fabryki Linux
 */
class LinuxUIFactory extends UIFactory {

    function createButton() {
        return new LinuxButtons();
    }

    public function createMenu() {
        return new LinuxMenu();
    }

}

/**
 * Klasa Button
 */
abstract class Button {

    abstract function getName();
}

/**
 * Klasa Windows Button
 */
class WindowsButtons extends Button {

    public function getName() {
        return 'Przycisk Windows';
    }

}

/**
 * Klasa Linux Button
 */
class LinuxButtons extends Button {

    public function getName() {
        return 'Przycisk Linux';
    }

}

/**
 * Klasa Menu
 */
abstract class Menu {

    abstract function getName();
}

/**
 * Klasa Windows Menu
 */
class WindowsMenu extends Menu {

    public function getName() {
        return 'Menu Windows';
    }

}

/**
 * Klasa Linux Menu
 */
class LinuxMenu extends Menu {

    public function getName() {
        return 'Menu Linux';
    }

}

$os = 'Linux';
$uiFactory = null;

if ($os == 'Windows') {
    $uiFactory = new WindowsUIFactory();
} else {
    $uiFactory = new LinuxUIFactory();
}

$button = $uiFactory->createButton();
$menu = $uiFactory->createMenu();

print_r($button->getName());
echo '<br />';
print_r($menu->getName());
