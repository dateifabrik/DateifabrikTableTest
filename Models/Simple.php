<?php

namespace DateifabrikTableTest\Models;

use Shopware\Components\Model\ModelEntity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="dfbk_simple")
 */

class Simple extends ModelEntity
{

    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $simple
     *
     * @ORM\Column(type="string")
     */
    private $simple;

    /**
     * @var \DateTime $added
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $createDate = null;

}