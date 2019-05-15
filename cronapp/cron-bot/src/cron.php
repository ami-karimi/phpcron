<?php
namespace cronapp\CronBot;


use Exception;

class Cron
{
    /**
     * Version
     *
     * @var string
     */
    protected $version = '0.1.1';

    /**
     * Group ID
     *
     * @var string
     */
    protected $group_id = '';

    /**
     * Game ID
     *
     * @var string
     */
    protected $game_id = '';

    /**
     * PDO object
     *
     * @var \PDO
     */
    protected $db;


    public function __construct($group_id, $game_id = '')
    {
        if(empty($group_id)){
            throw  Exception('Group ID Was Empty!');
        }
        return 1;

    }

}




