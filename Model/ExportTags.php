<?php
/**
 * PHP version 7
 *
 * LICENSE: This source file is subject to copyright
 *
 * @author      Florian Ajir <florian@tag-walk.com>
 * @copyright   2016-2018 TAGWALK
 * @license     proprietary
 */

namespace Tagwalk\ApiClientBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class ExportTags
{
    /**
     * @var string|null
     * @Assert\Type("string")
     */
    private $filename;

    /**
     * @var string|null
     * @Assert\Email
     */
    private $email;

    /**
     * @var string|null
     * @Assert\Length(min="1", max="1")
     */
    private $delimiter = ',';

    /**
     * @var bool|null
     * @Assert\Type("bool")
     */
    private $keepEmpty = false;

    /**
     * @var bool|null
     * @Assert\Type("bool")
     */
    private $splitCity = false;

    /**
     * @var bool|null
     * @Assert\Type("bool")
     */
    private $splitDesigner = false;

    /**
     * @var bool|null
     * @Assert\Type("bool")
     */
    private $splitSeason = false;

    /**
     * @var string|null
     * @Assert\Type("string")
     */
    private $type = 'woman';

    /**
     * @var string|null
     * @Assert\Type("string")
     */
    private $season;

    /**
     * @var string|null
     * @Assert\Type("string")
     */
    private $designer;

    /**
     * @var string|null
     * @Assert\Type("string")
     */
    private $city;

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getDelimiter(): string
    {
        return $this->delimiter;
    }

    /**
     * @param string|null $delimiter
     */
    public function setDelimiter(?string $delimiter): void
    {
        $this->delimiter = $delimiter;
    }

    /**
     * @return bool
     */
    public function isKeepEmpty(): bool
    {
        return $this->keepEmpty;
    }

    /**
     * @param bool $keepEmpty
     */
    public function setKeepEmpty(bool $keepEmpty): void
    {
        $this->keepEmpty = $keepEmpty;
    }

    /**
     * @return bool
     */
    public function isSplitCity(): bool
    {
        return $this->splitCity;
    }

    /**
     * @param bool $splitCity
     */
    public function setSplitCity(bool $splitCity): void
    {
        $this->splitCity = $splitCity;
    }

    /**
     * @return bool
     */
    public function isSplitDesigner(): bool
    {
        return $this->splitDesigner;
    }

    /**
     * @param bool $splitDesigner
     */
    public function setSplitDesigner(bool $splitDesigner): void
    {
        $this->splitDesigner = $splitDesigner;
    }

    /**
     * @return bool
     */
    public function isSplitSeason(): bool
    {
        return $this->splitSeason;
    }

    /**
     * @param bool $splitSeason
     */
    public function setSplitSeason(bool $splitSeason): void
    {
        $this->splitSeason = $splitSeason;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }

    /**
     * @param string|null $season
     */
    public function setSeason(?string $season): void
    {
        $this->season = $season;
    }

    /**
     * @return string|null
     */
    public function getDesigner(): ?string
    {
        return $this->designer;
    }

    /**
     * @param string|null $designer
     */
    public function setDesigner(?string $designer): void
    {
        $this->designer = $designer;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }
}