<?php

/**
 * Baseround
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $round_id
 * @property integer $player_id
 * @property string $tees_id
 * @property integer $event_id
 * @property float $rating
 * @property integer $slope
 * @property string $holes_score
 * @property string $holes_hcp
 * @property integer $total_score
 * @property float $round_hcp
 * @property integer $bet_hcp
 * @property boolean $saved
 * @property event $Event
 * @property Doctrine_Collection $Course
 * 
 * @method integer             getRoundId()     Returns the current record's "round_id" value
 * @method integer             getPlayerId()    Returns the current record's "player_id" value
 * @method string              getTeesId()      Returns the current record's "tees_id" value
 * @method integer             getEventId()     Returns the current record's "event_id" value
 * @method float               getRating()      Returns the current record's "rating" value
 * @method integer             getSlope()       Returns the current record's "slope" value
 * @method string              getHolesScore()  Returns the current record's "holes_score" value
 * @method string              getHolesHcp()    Returns the current record's "holes_hcp" value
 * @method integer             getTotalScore()  Returns the current record's "total_score" value
 * @method float               getRoundHcp()    Returns the current record's "round_hcp" value
 * @method integer             getBetHcp()      Returns the current record's "bet_hcp" value
 * @method boolean             getSaved()       Returns the current record's "saved" value
 * @method event               getEvent()       Returns the current record's "Event" value
 * @method Doctrine_Collection getCourse()      Returns the current record's "Course" collection
 * @method round               setRoundId()     Sets the current record's "round_id" value
 * @method round               setPlayerId()    Sets the current record's "player_id" value
 * @method round               setTeesId()      Sets the current record's "tees_id" value
 * @method round               setEventId()     Sets the current record's "event_id" value
 * @method round               setRating()      Sets the current record's "rating" value
 * @method round               setSlope()       Sets the current record's "slope" value
 * @method round               setHolesScore()  Sets the current record's "holes_score" value
 * @method round               setHolesHcp()    Sets the current record's "holes_hcp" value
 * @method round               setTotalScore()  Sets the current record's "total_score" value
 * @method round               setRoundHcp()    Sets the current record's "round_hcp" value
 * @method round               setBetHcp()      Sets the current record's "bet_hcp" value
 * @method round               setSaved()       Sets the current record's "saved" value
 * @method round               setEvent()       Sets the current record's "Event" value
 * @method round               setCourse()      Sets the current record's "Course" collection
 * 
 * @package    Golf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseround extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('round');
        $this->hasColumn('round_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('player_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tees_id', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('event_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('rating', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('slope', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('holes_score', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0',
             'length' => 50,
             ));
        $this->hasColumn('holes_hcp', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0',
             'length' => 50,
             ));
        $this->hasColumn('total_score', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('round_hcp', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('bet_hcp', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('saved', 'boolean', null, array(
             'type' => 'boolean',
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('event as Event', array(
             'local' => 'event_id',
             'foreign' => 'event_id'));

        $this->hasMany('course as Course', array(
             'local' => 'tees_id',
             'foreign' => 'tees_id'));
    }
}