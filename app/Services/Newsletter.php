<?php

namespace app\Services;

interface Newsletter
{
    public function subscribe($email, string $list = null);

}