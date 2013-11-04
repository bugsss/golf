<?php

/**
 * Baseplayer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $player_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property char $gender
 * @property float $handicap
 * @property string $usga_index
 * @property integer $is_user
 * @property string $state
 * @property string $city
 * @property string $home_course
 * @property string $home_course_name
 * @property string $image
 * @property timestamp $created
 * @property Doctrine_Collection $Events
 * 
 * @method integer             getPlayerId()         Returns the current record's "player_id" value
 * @method string              getFirstName()        Returns the current record's "first_name" value
 * @method string              getLastName()         Returns the current record's "last_name" value
 * @method string              getEmail()            Returns the current record's "email" value
 * @method string              getPassword()         Returns the current record's "password" value
 * @method char                getGender()           Returns the current record's "gender" value
 * @method float               getHandicap()         Returns the current record's "handicap" value
 * @method string              getUsgaIndex()        Returns the current record's "usga_index" value
 * @method integer             getIsUser()           Returns the current record's "is_user" value
 * @method string              getState()            Returns the current record's "state" value
 * @method string              getCity()             Returns the current record's "city" value
 * @method string              getHomeCourse()       Returns the current record's "home_course" value
 * @method string              getHomeCourseName()   Returns the current record's "home_course_name" value
 * @method string              getImage()            Returns the current record's "image" value
 * @method timestamp           getCreated()          Returns the current record's "created" value
 * @method Doctrine_Collection getEvents()           Returns the current record's "Events" collection
 * @method player              setPlayerId()         Sets the current record's "player_id" value
 * @method player              setFirstName()        Sets the current record's "first_name" value
 * @method player              setLastName()         Sets the current record's "last_name" value
 * @method player              setEmail()            Sets the current record's "email" value
 * @method player              setPassword()         Sets the current record's "password" value
 * @method player              setGender()           Sets the current record's "gender" value
 * @method player              setHandicap()         Sets the current record's "handicap" value
 * @method player              setUsgaIndex()        Sets the current record's "usga_index" value
 * @method player              setIsUser()           Sets the current record's "is_user" value
 * @method player              setState()            Sets the current record's "state" value
 * @method player              setCity()             Sets the current record's "city" value
 * @method player              setHomeCourse()       Sets the current record's "home_course" value
 * @method player              setHomeCourseName()   Sets the current record's "home_course_name" value
 * @method player              setImage()            Sets the current record's "image" value
 * @method player              setCreated()          Sets the current record's "created" value
 * @method player              setEvents()           Sets the current record's "Events" collection
 * 
 * @package    Golf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseplayer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('player');
        $this->hasColumn('player_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('first as first_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('last as last_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('password', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('gender', 'char', 1, array(
             'type' => 'char',
             'length' => 1,
             ));
        $this->hasColumn('handicap', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('usga_index', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('is_user', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('state', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             ));
        $this->hasColumn('city', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             ));
        $this->hasColumn('home_course', 'string', 64, array(
             'type' => 'string',
             'length' => 64,
             ));
        $this->hasColumn('home_course_name', 'string', 164, array(
             'type' => 'string',
             'length' => 164,
             ));
        $this->hasColumn('image', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('created', 'timestamp', null, array(
             'type' => 'timestamp',
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('event as Events', array(
             'local' => 'player_id',
             'foreign' => 'player_id',
             'onDelete' => 'cascade',
             'cascade' => array(
             0 => 'delete',
             )));
    }
}