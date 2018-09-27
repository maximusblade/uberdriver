<?php

namespace SocialiteProviders\UberDriver;

use SocialiteProviders\Manager\SocialiteWasCalled;

class UberDriverExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'uberdriver', __NAMESPACE__.'\Provider'
        );
    }
}
