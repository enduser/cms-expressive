<?php

return [
    'dependencies' => [
        'factories' => [
            'Cms\Doctrine\EntityManager' => \Cms\Doctrine\Factory\ContainerInteropFactory::class,
            'Cms\CurrentSite' => \Cms\Doctrine\Factory\CurrentSiteFactory::class,
            'Cms\CurrentDomain' => \Cms\Doctrine\Factory\CurrentDomainFactory::class,
        ]
    ]
];