<?php
namespace Hebotek\HeboFeManager\Controller;

use In2code\Femanager\Controller\NewController as FemanagerNewController;
use Hebotek\HeboFeManager\Domain\Model\User;

class NewController extends FemanagerNewController
{

    /**
    * action create
    *
    * @param IHebotek\HeboFeManager\Domain\Model\User $user
    */
    public function createAction($user): void
    {
        parent::createAction($user);
    }
}