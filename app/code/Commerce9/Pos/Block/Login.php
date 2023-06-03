<?php

namespace Commerce9\Pos\Block;
use Magento\Framework\View\Element\Template;

class Login extends Template
{

    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function goToDashboard(){
        return $this->getUrl("c9pos/pos/dashboard");
    }

}
