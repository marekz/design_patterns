<?php
    
    abstract class ApptEncoder
    {
        abstract public function encode(): string;
    }
    
    class BloggsApptEncoder extends ApptEncoder
    {
        public function encode(): string
        {
            return "Dane spotkania zakodowane w formacie BlogsCall\n";
        }
    }
    
    class MegaApptEncoder extends ApptEncoder
    {
        public function encode(): string
        {
            return "Dane zakodowane w formacie MegaCal\n";
        }
    }
    
    class CommsManager
    {
        const BLOGS = 1;
        const MEGA = 2;
        private $mode = 1;
        
        public function __construct(int $mode)
        {
            $this->mode = $mode;
        }
    
        public function getApptEncoder(): ApptEncoder
        {
            switch ($this->mode) {
                case (self::MEGA):
                    return new MegaApptEncoder();
                default:
                    return new BloggsApptEncoder();
            
            }
        }
    
        public function getHeaderText(): ApptEncoder
        {
            switch ($this->mode) {
                case (self::MEGA):
                    return "Nagłówek MegaCal<br />";
                default:
                    return "Nagłówek BloggsCal<br />";
            
            }
        }
    }
    
    
    $man = new CommsManager(CommsManager::MEGA);
    print(get_class($man->getApptEncoder())) . "<br />";
    $man = new CommsManager(CommsManager::BLOGS);
    print(get_class($man->getApptEncoder())) . "<br />";