<?php 

namespace Topxia\Service\System\Impl;

use Topxia\Service\Common\BaseService;
use Topxia\Service\System\SessionService;

class SessionServiceImpl extends BaseService implements SessionService
{
    public function get($id)
    {
    	return $this->getSessionDao()->get($id);
    }

    public function clear($id)
    {
    	return $this->getSessionDao()->delete($id);
    }

	public function clearByUserId($userId)
	{
    	return $this->getSessionDao()->deleteSessionByUserId($userId);
	}

    public function deleteInvalidSession($retentionTime)
    {
        return $this->getSessionDao()->deleteInvalidSession($retentionTime);
    }

	private function getSessionDao()
	{
		return $this->createDao('System.SessionDao');
	}
	
}