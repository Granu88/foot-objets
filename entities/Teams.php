<?php
namespace Entities;

class Teams extends Entity
{
  /**
   * @var int
   */
  protected $id;

  /**
   * @var int
   */
  protected $id_stadium;

  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $short_name;

  /**
   * @var \DateTime
   */
  protected $fundation_date;

  /**
   * @var string
   */
  protected $president;

  /**
   * @var string
   */
  protected $adress;

  /**
   * @var string
   */
  protected $website;

  /**
   * @var string
   */
  protected $logo;

  /**
   * @var string
   */
  protected $link;

    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Id Stadium
     *
     * @return int
     */
    public function getIdStadium()
    {
        return $this->id_stadium;
    }

    /**
     * Set the value of Id Stadium
     *
     * @param int $id_stadium
     *
     * @return self
     */
    public function setIdStadium($id_stadium)
    {
        $this->id_stadium = $id_stadium;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Short Name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * Set the value of Short Name
     *
     * @param string $short_name
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        $this->short_name = $short_name;

        return $this;
    }

    /**
     * Get the value of Fundation Date
     *
     * @return \DateTime
     */
    public function getFundationDate()
    {
        return new \DateTime($this->fundation_date);
    }

    /**
     * Set the value of Fundation Date
     *
     * @param \DateTime $fundation_date
     *
     * @return self
     */
    public function setFundationDate(\DateTime $fundation_date)
    {
        $this->fundation_date = $fundation_date;

        return $this;
    }

    /**
     * Get the value of President
     *
     * @return string
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set the value of President
     *
     * @param string $president
     *
     * @return self
     */
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get the value of Adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of Adress
     *
     * @param string $adress
     *
     * @return self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of Website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of Website
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of Logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of Logo
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of Link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of Link
     *
     * @param string $link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

}
