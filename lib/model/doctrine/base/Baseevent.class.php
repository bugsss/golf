<?php

/**
 * Baseevent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $event_id
 * @property integer $player_id
 * @property string $course_id
 * @property string $event_name
 * @property datetime $event_date
 * @property integer $start_hole
 * @property integer $status
 * @property player $Player
 * @property course $Course
 * @property Doctrine_Collection $Rounds
 * 
 * @method integer             getEventId()    Returns the current record's "event_id" value
 * @method integer             getPlayerId()   Returns the current record's "player_id" value
 * @method string              getCourseId()   Returns the current record's "course_id" value
 * @method string              getEventName()  Returns the current record's "event_name" value
 * @method datetime            getEventDate()  Returns the current record's "event_date" value
 * @method integer             getStartHole()  Returns the current record's "start_hole" value
 * @method integer             getStatus()     Returns the current record's "status" value
 * @method player              getPlayer()     Returns the current record's "Player" value
 * @method course              getCourse()     Returns the current record's "Course" value
 * @method Doctrine_Collection getRounds()     Returns the current record's "Rounds" collection
 * @method event               setEventId()    Sets the current record's "event_id" value
 * @method event               setPlayerId()   Sets the current record's "player_id" value
 * @method event               setCourseId()   Sets the current record's "course_id" value
 * @method event               setEventName()  Sets the current record's "event_name" value
 * @method event               setEventDate()  Sets the current record's "event_date" value
 * @method event               setStartHole()  Sets the current record's "start_hole" value
 * @method event               setStatus()     Sets the current record's "status" value
 * @method event               setPlayer()     Sets the current record's "Player" value
 * @method event               setCourse()     Sets the current record's "Course" value
 * @method event               setRounds()     Sets the current record's "Rounds" collection
 * 
 * @package    Golf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseevent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('event');
        $this->hasColumn('event_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('player_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('course_id', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('event_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('event_date', 'datetime', null, array(
             'type' => 'datetime',
             'notnull' => true,
             ));
        $this->hasColumn('start_hole', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('player as Player', array(
             'local' => 'player_id',
             'foreign' => 'player_id'));

        $this->hasOne('course as Course', array(
             'local' => 'course_id',
             'foreign' => 'course_id'));

        $this->hasMany('round as Rounds', array(
             'local' => 'event_id',
             'foreign' => 'event_id'));
    }
}