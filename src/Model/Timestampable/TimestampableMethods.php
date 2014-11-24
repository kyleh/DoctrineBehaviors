<?php

/*
 * This file is part of the KnpDoctrineBehaviors package.
 *
 * (c) KnpLabs <http://knplabs.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Knp\DoctrineBehaviors\Model\Timestampable;

/**
 * Timestampable trait.
 *
 * Should be used inside entity, that needs to be timestamped.
 */
trait TimestampableMethods
{
    /**
     * Returns created value.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created;
    }

    /**
     * Returns modified value.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->modified;
    }

    /**
     * @param \DateTime $created
     * @return $this
     */
    public function setCreatedAt(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @param \DateTime $modified
     * @return $this
     */
    public function setUpdatedAt(\DateTime $modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Updates created and modified timestamps.
     */
    public function updateTimestamps()
    {
        if (null === $this->created) {
            $this->created = new \DateTime('now');
        }

        $this->modified = new \DateTime('now');
    }
}
