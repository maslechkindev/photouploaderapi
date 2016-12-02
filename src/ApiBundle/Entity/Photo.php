<?php

namespace ApiBundle\Entity;

class Photo
{
    /** @var  integer */
    private $id;

    /** @var  integer */
    private $id_img;

    /** @var  integer */
    private $id_tag;

    /**
     * @var \ApiBundle\Entity\Image
     */
    private $image;

    /**
     * @var \ApiBundle\Entity\Tag
     */
    private $tag;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param \ApiBundle\Entity\Image $image
     *
     * @return Photo
     */
    public function setImage(\ApiBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ApiBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
