<?php

class MultiCollections_MultiCollectionsController extends Omeka_Controller_AbstractActionController
{
    public function init()
    {
        $this->_helper->db->setDefaultModelName('Collection');
    }   
}