<?php

namespace OC\PlatformBundle\Purger;


class OCPurger
{
    private $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function purge($days)
    {
        $repo = $this->em->getRepository('OCPlatformBundle:Advert');

        $date = date_sub(new \DateTime(), date_interval_create_from_date_string($days." days"));

        $repo->delOutdatedAdverts($date);
    }
}