<?php

interface DocManager {
    public function authenticate($user, $pwd);
    public function getDocuments($folderid);
    public function getDocumentByType($folderid, $type);
    public function getFoleders($folderid=null);
    public function saveDocument($document);
}
