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
     * Returns updated value.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated;
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
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Updates created and updated timestamps.
     */
    public function updateTimestamps()
    {
        if (null === $this->created) {
            $this->created = new \DateTime('now');
        }

        $this->updated = new \DateTime('now');
    }
}
