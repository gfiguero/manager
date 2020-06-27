<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 *
 * @ORM\Table(name="l2j_gs.characters", indexes={@ORM\Index(name="account_name", columns={"account_name"}), @ORM\Index(name="online", columns={"online"}), @ORM\Index(name="char_name", columns={"char_name"}), @ORM\Index(name="clanid", columns={"clanid"})})
 * @ORM\Entity
 */
class Characters
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="account_name", type="string", length=45, nullable=true)
     */
    private $accountName;

    /**
     * @var int
     *
     * @ORM\Column(name="charId", type="integer", nullable=false, options={"unsigned"=true, "default" = 0})
     * @ORM\Id
     */
    private $charid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="char_name", type="string", length=35, nullable=false)
     */
    private $charName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="level", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $level;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxHp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $maxhp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curHp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $curhp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxCp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $maxcp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curCp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $curcp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxMp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $maxmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curMp", type="integer", length=8, nullable=true, options={"unsigned"=true})
     */
    private $curmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="face", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $face;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hairStyle", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $hairstyle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hairColor", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $haircolor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sex", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $sex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heading", type="integer", length=9, nullable=true)
     */
    private $heading;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", length=9, nullable=true)
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="integer", length=9, nullable=true)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="z", type="integer", length=9, nullable=true)
     */
    private $z;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp", type="bigint", length=20, nullable=true, options={"unsigned"=true, "default" = 0})
     */
    private $exp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="expBeforeDeath", type="bigint", length=20, nullable=true, options={"unsigned"=true, "default" = 0})
     */
    private $expbeforedeath = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sp", type="integer", nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $sp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="karma", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $karma;

    /**
     * @var int
     *
     * @ORM\Column(name="fame", type="integer", length=8, nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $fame = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="pvpkills", type="smallint", length=5, nullable=true, options={"unsigned"=true})
     */
    private $pvpkills;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pkkills", type="smallint", length=5, nullable=true, options={"unsigned"=true})
     */
    private $pkkills;

    /**
     * @var int|null
     *
     * @ORM\Column(name="clanid", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $clanid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="race", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $race;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="classid", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $classid;

    /**
     * @var bool
     *
     * @ORM\Column(name="base_class", type="boolean", length=3, nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $baseClass = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="transform_id", type="smallint", length=5, nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $transformId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deletetime", type="bigint", nullable=false, options={"unsigned"=true, "default" = 0})
     */
    private $deletetime = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cancraft", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $cancraft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=21, nullable=true)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="title_color", type="integer", nullable=false, options={"default"="15530402","unsigned"=true})
     */
    private $titleColor = '15530402';

    /**
     * @var int|null
     *
     * @ORM\Column(name="accesslevel", type="integer", nullable=true, options={"default" = 0})
     */
    private $accesslevel = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="online", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $online;

    /**
     * @var int|null
     *
     * @ORM\Column(name="onlinetime", type="integer", nullable=true)
     */
    private $onlinetime;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="char_slot", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $charSlot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="newbie", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $newbie = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="lastAccess", type="bigint", nullable=false, options={"default"="0","unsigned"=true})
     */
    private $lastaccess = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="clan_privs", type="integer", nullable=true, options={"default"="0","unsigned"=true})
     */
    private $clanPrivs = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="wantspeace", type="boolean", length=3, nullable=true, options={"default"="0","unsigned"=true})
     */
    private $wantspeace = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isin7sdungeon", type="boolean", length=3, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $isin7sdungeon = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="power_grade", type="boolean", length=3, nullable=true, options={"unsigned"=true})
     */
    private $powerGrade;

    /**
     * @var bool
     *
     * @ORM\Column(name="nobless", type="boolean", length=3, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $nobless = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subpledge", type="smallint", length=6, nullable=false, options={"default"="0"})
     */
    private $subpledge = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="lvl_joined_academy", type="boolean", length=3, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $lvlJoinedAcademy = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="apprentice", type="integer", nullable=false, options={"default"="0","unsigned"=true})
     */
    private $apprentice = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sponsor", type="integer", nullable=false, options={"default"="0","unsigned"=true})
     */
    private $sponsor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clan_join_expiry_time", type="bigint", nullable=false, options={"default"="0","unsigned"=true})
     */
    private $clanJoinExpiryTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clan_create_expiry_time", type="bigint", nullable=false, options={"default"="0","unsigned"=true})
     */
    private $clanCreateExpiryTime = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="death_penalty_level", type="smallint", length=5, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $deathPenaltyLevel = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bookmarkslot", type="smallint", length=5, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $bookmarkslot = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vitality_points", type="smallint", length=5, nullable=false, options={"default"="0","unsigned"=true})
     */
    private $vitalityPoints = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdate = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function getCharName(): ?string
    {
        return $this->charName;
    }

    public function setCharName(string $charName): self
    {
        $this->charName = $charName;

        return $this;
    }

    public function getLevel(): ?bool
    {
        return $this->level;
    }

    public function setLevel(?bool $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getMaxhp(): ?int
    {
        return $this->maxhp;
    }

    public function setMaxhp(?int $maxhp): self
    {
        $this->maxhp = $maxhp;

        return $this;
    }

    public function getCurhp(): ?int
    {
        return $this->curhp;
    }

    public function setCurhp(?int $curhp): self
    {
        $this->curhp = $curhp;

        return $this;
    }

    public function getMaxcp(): ?int
    {
        return $this->maxcp;
    }

    public function setMaxcp(?int $maxcp): self
    {
        $this->maxcp = $maxcp;

        return $this;
    }

    public function getCurcp(): ?int
    {
        return $this->curcp;
    }

    public function setCurcp(?int $curcp): self
    {
        $this->curcp = $curcp;

        return $this;
    }

    public function getMaxmp(): ?int
    {
        return $this->maxmp;
    }

    public function setMaxmp(?int $maxmp): self
    {
        $this->maxmp = $maxmp;

        return $this;
    }

    public function getCurmp(): ?int
    {
        return $this->curmp;
    }

    public function setCurmp(?int $curmp): self
    {
        $this->curmp = $curmp;

        return $this;
    }

    public function getFace(): ?bool
    {
        return $this->face;
    }

    public function setFace(?bool $face): self
    {
        $this->face = $face;

        return $this;
    }

    public function getHairstyle(): ?bool
    {
        return $this->hairstyle;
    }

    public function setHairstyle(?bool $hairstyle): self
    {
        $this->hairstyle = $hairstyle;

        return $this;
    }

    public function getHaircolor(): ?bool
    {
        return $this->haircolor;
    }

    public function setHaircolor(?bool $haircolor): self
    {
        $this->haircolor = $haircolor;

        return $this;
    }

    public function getSex(): ?bool
    {
        return $this->sex;
    }

    public function setSex(?bool $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function setHeading(?int $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function setZ(?int $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getExp(): ?string
    {
        return $this->exp;
    }

    public function setExp(?string $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getExpbeforedeath(): ?string
    {
        return $this->expbeforedeath;
    }

    public function setExpbeforedeath(?string $expbeforedeath): self
    {
        $this->expbeforedeath = $expbeforedeath;

        return $this;
    }

    public function getSp(): ?int
    {
        return $this->sp;
    }

    public function setSp(int $sp): self
    {
        $this->sp = $sp;

        return $this;
    }

    public function getKarma(): ?int
    {
        return $this->karma;
    }

    public function setKarma(?int $karma): self
    {
        $this->karma = $karma;

        return $this;
    }

    public function getFame(): ?int
    {
        return $this->fame;
    }

    public function setFame(int $fame): self
    {
        $this->fame = $fame;

        return $this;
    }

    public function getPvpkills(): ?int
    {
        return $this->pvpkills;
    }

    public function setPvpkills(?int $pvpkills): self
    {
        $this->pvpkills = $pvpkills;

        return $this;
    }

    public function getPkkills(): ?int
    {
        return $this->pkkills;
    }

    public function setPkkills(?int $pkkills): self
    {
        $this->pkkills = $pkkills;

        return $this;
    }

    public function getClanid(): ?int
    {
        return $this->clanid;
    }

    public function setClanid(?int $clanid): self
    {
        $this->clanid = $clanid;

        return $this;
    }

    public function getRace(): ?bool
    {
        return $this->race;
    }

    public function setRace(?bool $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getClassid(): ?bool
    {
        return $this->classid;
    }

    public function setClassid(?bool $classid): self
    {
        $this->classid = $classid;

        return $this;
    }

    public function getBaseClass(): ?bool
    {
        return $this->baseClass;
    }

    public function setBaseClass(bool $baseClass): self
    {
        $this->baseClass = $baseClass;

        return $this;
    }

    public function getTransformId(): ?int
    {
        return $this->transformId;
    }

    public function setTransformId(int $transformId): self
    {
        $this->transformId = $transformId;

        return $this;
    }

    public function getDeletetime(): ?string
    {
        return $this->deletetime;
    }

    public function setDeletetime(string $deletetime): self
    {
        $this->deletetime = $deletetime;

        return $this;
    }

    public function getCancraft(): ?bool
    {
        return $this->cancraft;
    }

    public function setCancraft(?bool $cancraft): self
    {
        $this->cancraft = $cancraft;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitleColor(): ?int
    {
        return $this->titleColor;
    }

    public function setTitleColor(int $titleColor): self
    {
        $this->titleColor = $titleColor;

        return $this;
    }

    public function getAccesslevel(): ?int
    {
        return $this->accesslevel;
    }

    public function setAccesslevel(?int $accesslevel): self
    {
        $this->accesslevel = $accesslevel;

        return $this;
    }

    public function getOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(?bool $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getOnlinetime(): ?int
    {
        return $this->onlinetime;
    }

    public function setOnlinetime(?int $onlinetime): self
    {
        $this->onlinetime = $onlinetime;

        return $this;
    }

    public function getCharSlot(): ?bool
    {
        return $this->charSlot;
    }

    public function setCharSlot(?bool $charSlot): self
    {
        $this->charSlot = $charSlot;

        return $this;
    }

    public function getNewbie(): ?int
    {
        return $this->newbie;
    }

    public function setNewbie(?int $newbie): self
    {
        $this->newbie = $newbie;

        return $this;
    }

    public function getLastaccess(): ?string
    {
        return $this->lastaccess;
    }

    public function setLastaccess(string $lastaccess): self
    {
        $this->lastaccess = $lastaccess;

        return $this;
    }

    public function getClanPrivs(): ?int
    {
        return $this->clanPrivs;
    }

    public function setClanPrivs(?int $clanPrivs): self
    {
        $this->clanPrivs = $clanPrivs;

        return $this;
    }

    public function getWantspeace(): ?bool
    {
        return $this->wantspeace;
    }

    public function setWantspeace(?bool $wantspeace): self
    {
        $this->wantspeace = $wantspeace;

        return $this;
    }

    public function getIsin7sdungeon(): ?bool
    {
        return $this->isin7sdungeon;
    }

    public function setIsin7sdungeon(bool $isin7sdungeon): self
    {
        $this->isin7sdungeon = $isin7sdungeon;

        return $this;
    }

    public function getPowerGrade(): ?bool
    {
        return $this->powerGrade;
    }

    public function setPowerGrade(?bool $powerGrade): self
    {
        $this->powerGrade = $powerGrade;

        return $this;
    }

    public function getNobless(): ?bool
    {
        return $this->nobless;
    }

    public function setNobless(bool $nobless): self
    {
        $this->nobless = $nobless;

        return $this;
    }

    public function getSubpledge(): ?int
    {
        return $this->subpledge;
    }

    public function setSubpledge(int $subpledge): self
    {
        $this->subpledge = $subpledge;

        return $this;
    }

    public function getLvlJoinedAcademy(): ?bool
    {
        return $this->lvlJoinedAcademy;
    }

    public function setLvlJoinedAcademy(bool $lvlJoinedAcademy): self
    {
        $this->lvlJoinedAcademy = $lvlJoinedAcademy;

        return $this;
    }

    public function getApprentice(): ?int
    {
        return $this->apprentice;
    }

    public function setApprentice(int $apprentice): self
    {
        $this->apprentice = $apprentice;

        return $this;
    }

    public function getSponsor(): ?int
    {
        return $this->sponsor;
    }

    public function setSponsor(int $sponsor): self
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    public function getClanJoinExpiryTime(): ?string
    {
        return $this->clanJoinExpiryTime;
    }

    public function setClanJoinExpiryTime(string $clanJoinExpiryTime): self
    {
        $this->clanJoinExpiryTime = $clanJoinExpiryTime;

        return $this;
    }

    public function getClanCreateExpiryTime(): ?string
    {
        return $this->clanCreateExpiryTime;
    }

    public function setClanCreateExpiryTime(string $clanCreateExpiryTime): self
    {
        $this->clanCreateExpiryTime = $clanCreateExpiryTime;

        return $this;
    }

    public function getDeathPenaltyLevel(): ?int
    {
        return $this->deathPenaltyLevel;
    }

    public function setDeathPenaltyLevel(int $deathPenaltyLevel): self
    {
        $this->deathPenaltyLevel = $deathPenaltyLevel;

        return $this;
    }

    public function getBookmarkslot(): ?int
    {
        return $this->bookmarkslot;
    }

    public function setBookmarkslot(int $bookmarkslot): self
    {
        $this->bookmarkslot = $bookmarkslot;

        return $this;
    }

    public function getVitalityPoints(): ?int
    {
        return $this->vitalityPoints;
    }

    public function setVitalityPoints(int $vitalityPoints): self
    {
        $this->vitalityPoints = $vitalityPoints;

        return $this;
    }

    public function getCreatedate(): ?\DateTimeInterface
    {
        return $this->createdate;
    }

    public function setCreatedate(\DateTimeInterface $createdate): self
    {
        $this->createdate = $createdate;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }


}
