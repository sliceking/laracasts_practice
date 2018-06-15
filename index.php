<?php

function signUp(Subscription $subscription)
{
    $subscription->create();
}

function getSubscriptionType($type)
{
    if ($type == 'forever') {
        return new ForeverSubscription();
    }

    return new MonthlySubscription();
}

$subscription = getSubscriptionType($type);

signUp($subscription);
