<?php

namespace LTree\Repository;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface LTreeChildrenInterface
 * @package LTree\Repository
 */
interface LTreeChildrenInterface
{
    /**
     * @param object|LTreeEntityInterface $children
     * @return object
     */
    public function addChildren($children);

    /**
     * @param object|LTreeEntityInterface $children
     * @return object
     */
    public function removeChildren($children);

    /**
     * @return ArrayCollection|object[]|LTreeEntityInterface[]
     */
    public function getChildren();
}
