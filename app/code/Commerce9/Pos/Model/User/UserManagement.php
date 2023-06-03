<?php

namespace Commerce9\Pos\Model\User;

class UserManagement implements \Commerce9\Pos\Api\User\UserManagementInterface
{
    /**
     * @var \Magento\Framework\Session\SessionManagerInterface
     */
    protected $sessionManagerInterface;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManagerment;


    public function __construct(
        \Magento\Framework\Session\SessionManagerInterface $sessionManager,
        \Magento\Store\Model\StoreManagerInterface $storeManagerment

    ) {
        $this->storeManagerment = $storeManagerment;
        $this->sessionManagerInterface = $sessionManager;
    }

    public function login($user)
    {
        $token = $this->getAccessToken();
        $this->sessionManagerInterface->regenerateId();
        $sessionId = $this->sessionManagerInterface->getSessionId();
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }
}
