<?php

namespace MatthijsThoolen\Slacky\Model;

use Exception;

class User extends Model
{
    /** @var string */
    private $id;

    /** @var string */
    private $teamId;

    /** @var string */
    private $name;

    /** @var bool */
    private $deleted;

    /** @var string */
    private $color;

    /** @var string */
    private $realName;

    /** @var array */
    private $profile;

    /** @var string */
    protected $objectName = 'user';

    /** @var string */
    protected $endpointName = 'Users.Info';

    /** @var array */
    protected $allowedProperties = array(
        'id',
        'team_id',
        'name',
        'deleted',
        'color',
        'real_name',
        'profile'
    );

    /**
     * @param string $id
     * @return User
     */
    public function setId(string $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getTeamId(): string
    {
        parent::get();

        return $this->teamId;
    }

    /**
     * @param string $teamId
     * @return User
     */
    public function setTeamId(string $teamId)
    {
        $this->teamId = $teamId;
        return $this;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getName(): string
    {
        parent::get();

        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function isDeleted(): bool
    {
        parent::get();

        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return User
     */
    public function setDeleted(bool $deleted): User
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getColor(): string
    {
        parent::get();

        return $this->color;
    }

    /**
     * @param string $color
     * @return User
     */
    public function setColor(string $color): User
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getRealName(): string
    {
        parent::get();

        return $this->realName;
    }

    /**
     * @param string $realName
     * @return User
     */
    public function setRealName(string $realName): User
    {
        $this->realName = $realName;
        return $this;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getProfile(): array
    {
        parent::get();

        return $this->profile;
    }

    /**
     * @param array $profile
     * @return User
     */
    public function setProfile(array $profile): User
    {
        $this->profile = $profile;
        return $this;
    }

}
