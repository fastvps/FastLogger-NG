<?php

class CronCommand extends CConsoleCommand
{
    public function run()
    {
        $connection=Yii::app()->db;
        $commands = array(
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '1' DAY) AND (level = 'debug');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '2' DAY) AND (level = 'info');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '2' DAY) AND (level = 'notice');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '2' DAY) AND (level = 'warning');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '5' DAY) AND (level = 'err');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '5' DAY) AND (level = 'crit');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '5' DAY) AND (level = 'alert');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '5' DAY) AND (level = 'emerg');",
            "DELETE FROM logs_syslog_ng WHERE (inserted_at < CURRENT_TIMESTAMP - INTERVAL '5' DAY) AND (level = 'panic');",

        );

        foreach ($commands as $command)
        {
            $execute = $connection->createCommand($command)->execute();
            print_r($execute);
        }

        return 0;
    }
}
