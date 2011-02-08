<?php

class myUser extends sfBasicSecurityUser
{
    public function removeAttribute($name) {
        $this->getAttributeHolder()->remove($name);
    }
}
