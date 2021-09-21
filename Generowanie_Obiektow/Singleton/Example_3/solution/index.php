<?php

    class Preferences
    {
        private $props = [];
        private static $instance;

        private function __construct()
        {
        }

        public static function getInstance()
        {
            if (empty(self::$instance)) {
                self::$instance = new Preferences();
            }
            return self::$instance;
        }

        public function setProperty(string $key, string $val)
        {
            $this->props[$key] = $val;
        }

        public function getProperty(string $key)
        {
            return $this->props[$key];
        }
    }

    $pref = Preferences::getInstance();
    $pref->setProperty("imie", "Jacek");
    print $pref->getProperty("imie") . "<br />";
    unset($pref);
    $pref2 = Preferences::getInstance();
    print $pref2->getProperty("imie");
