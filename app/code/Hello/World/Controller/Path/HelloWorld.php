<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Hello\World\Controller\Path;

use Magento\Framework\App\Action\Action;

use Magento\Framework\App\ResponseInterface;

use Magento\Framework\View\Result\PageFactory;

use Magento\Framework\App\Action\Context;
class HelloWorld extends Action{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $page_factory;

    public function __construct(Context $context, PageFactory $page_factory) {
        $this->page_factory = $page_factory;
        parent::__construct($context);
    }

    public function execute() {
        return  $this->page_factory->create();
    }
}

