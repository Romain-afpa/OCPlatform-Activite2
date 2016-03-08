<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PurgeController extends Controller
{
    /**
     * @param $days
     */
    public function purgeAction($days)
    {
       $purger = $this->container->get('oc_platform.advert_purger');

      echo $purger->purge($days);

        return new Response("<body>entités purgées</body>");
    }
}
