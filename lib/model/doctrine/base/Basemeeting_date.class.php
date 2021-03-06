<?php

/**
 * Basemeeting_date
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $mid
 * @property timestamp $date
 * @property string $comment
 * @property meeting $meeting
 * @property Doctrine_Collection $meeting_polls
 * 
 * @method integer             getMid()           Returns the current record's "mid" value
 * @method timestamp           getDate()          Returns the current record's "date" value
 * @method string              getComment()       Returns the current record's "comment" value
 * @method meeting             getMeeting()       Returns the current record's "meeting" value
 * @method Doctrine_Collection getMeetingPolls()  Returns the current record's "meeting_polls" collection
 * @method meeting_date        setMid()           Sets the current record's "mid" value
 * @method meeting_date        setDate()          Sets the current record's "date" value
 * @method meeting_date        setComment()       Sets the current record's "comment" value
 * @method meeting_date        setMeeting()       Sets the current record's "meeting" value
 * @method meeting_date        setMeetingPolls()  Sets the current record's "meeting_polls" collection
 * 
 * @package    rdvz
 * @subpackage model
 * @author     Romain Deveaud <romain.deveaud@gmail.com>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class Basemeeting_date extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('meeting_date');
        $this->hasColumn('mid', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('date', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('comment', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('meeting', array(
             'local' => 'mid',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('meeting_poll as meeting_polls', array(
             'local' => 'id',
             'foreign' => 'date_id'));
    }
}