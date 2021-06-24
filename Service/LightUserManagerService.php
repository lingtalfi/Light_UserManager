<?php


namespace Ling\Light_UserManager\Service;

use Ling\Light_User\LightUserInterface;
use Ling\Light_UserManager\UserManager\AnyUserManager;

/**
 * The LightUserManagerService class.
 */
class LightUserManagerService extends AnyUserManager
{

    /**
     * This property holds the prepareUserCallbacks for this instance.
     * Those callbacks are executed at the end of the getUser method.
     *
     * Thus, each callback gives you the opportunity to prepare the user.
     * For instance, you could connect the user automatically if he's got a valid remember_me token.
     *
     * Each callback takes the user instance as its sole argument.
     *
     * @var array
     */
    private array $prepareUserCallbacks;


    /**
     * Builds the LightUserManagerService instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->prepareUserCallbacks = [];
    }


    /**
     * Adds a prepareUser callback.
     *
     * @param callable $callback
     */
    public function addPrepareUseCallback(callable $callback)
    {
        $this->prepareUserCallbacks[] = $callback;
    }


    /**
     * @overrides
     */
    public function getUser(): LightUserInterface
    {
        $user = parent::getUser();
        foreach ($this->prepareUserCallbacks as $cb) {
            $cb($user);
        }
        return $user;
    }


}