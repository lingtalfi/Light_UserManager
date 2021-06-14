[Back to the Ling/Light_UserManager api](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager.md)



The LightUserManagerService class
================
2019-05-10 --> 2021-06-14






Introduction
============

The LightUserManagerService class.



Class synopsis
==============


class <span class="pl-k">LightUserManagerService</span> extends [AnyUserManager](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager.md) implements [LightUserManagerInterface](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/LightUserManagerInterface.md) {

- Inherited methods
    - public [AnyUserManager::__construct](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/__construct.md)() : void
    - public [AnyUserManager::getUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/getUser.md)() : [LightUserInterface](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightUserInterface.md)
    - public [AnyUserManager::destroyUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/destroyUser.md)() : void
    - public [AnyUserManager::setUserClass](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUserClass.md)(string $userClass) : void
    - public [AnyUserManager::getValidWebsiteUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/getValidWebsiteUser.md)() : [LightWebsiteUser](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightWebsiteUser.md)
    - public [AnyUserManager::setUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUser.md)([Ling\Light_User\LightUserInterface](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightUserInterface.md) $user) : void
    - public [AnyUserManager::setUserOnce](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUserOnce.md)([Ling\Light_User\LightUserInterface](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightUserInterface.md) $user) : void

}






Methods
==============

- [AnyUserManager::__construct](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/__construct.md) &ndash; Builds the WebsiteUserManager instance.
- [AnyUserManager::getUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/getUser.md) &ndash; Returns a light user instance, according to the settings of this instance.
- [AnyUserManager::destroyUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/destroyUser.md) &ndash; Destroys the current user, according to the settings of this instance.
- [AnyUserManager::setUserClass](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUserClass.md) &ndash; Sets the userClass.
- [AnyUserManager::getValidWebsiteUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/getValidWebsiteUser.md) &ndash; 
- [AnyUserManager::setUser](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUser.md) &ndash; Sets the user.
- [AnyUserManager::setUserOnce](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager/setUserOnce.md) &ndash; Sets the user only if there is no user in the session.





Location
=============
Ling\Light_UserManager\Service\LightUserManagerService<br>
See the source code of [Ling\Light_UserManager\Service\LightUserManagerService](https://github.com/lingtalfi/Light_UserManager/blob/master/Service/LightUserManagerService.php)



SeeAlso
==============
Previous class: [LightUserManagerException](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/Exception/LightUserManagerException.md)<br>Next class: [AnyUserManager](https://github.com/lingtalfi/Light_UserManager/blob/master/doc/api/Ling/Light_UserManager/UserManager/AnyUserManager.md)<br>
