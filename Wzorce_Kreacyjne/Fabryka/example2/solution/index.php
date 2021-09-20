<?php

    abstract class ApptEncoder
    {
        abstract public function encode(): string;
    }
    
    class BloggsApptEncoder extends ApptEncoder
    {
        public function encode(): string
        {
            return "Dane spotkania w formacie BloggsCal<br />";
        }
    }
    
    abstract class CommsManager
    {
        abstract public function getHeaderText(): string;
        abstract public function getApptEncoder(): ApptEncoder;
        abstract public function getFooterText(): string;
    }
    
    class BloggsCommManager extends CommsManager
    {
        public function getHeaderText(): string
        {
            return "Nagłówek BloggsCal<br />";
        }
        
        public function getApptEncoder(): ApptEncoder
        {
            return new BloggsApptEncoder(); 
        }
        
        public function getFooterText(): string
        {
            return "Stopka BloggsCal<br />";
        }
    }
    
    $mgr = new BloggsCommManager();
    print $mgr->getFooterText();
    print $mgr->getApptEncoder()->encode();
    print $mgr->getFooterText();