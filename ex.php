<?php

use Acme\Business;
use Acme\Staff;
use Acme\Users\Person;

$stan = new Person('stan');

$staff = new Staff([$stan]);

$biz = new Business($staff);

$biz->hire(new Person('jackie'));

var_dump($biz->getStaffMembers());
