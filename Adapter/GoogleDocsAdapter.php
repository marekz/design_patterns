<?php

class GoogleDocsAdapter implements DocManager {

    private $GD;
    public function __construct() {
        $this->GD  = new GoogleDocs();
    }

    public function authenticate($user, $pwd) {
        $this->GD->setUser($user);
        $this->GD->setPwd($pwd);
        $this->GD->authenticateByClientLogin();
    }

    public function getDocumentByType($folderid, $type) {
        
    }

    public function getDocuments($folderid) {
        return $this->GD->getAllDocuments();
    }

    public function getFoleders($folderid = null) {
        
    }

    public function saveDocument($document) {
        
    }

}
