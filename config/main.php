<?php

class Config
{
    public static $hostname = "API_Manager >>> ";
    public static $current = array(
        "Cmd" => "",
        "arg" => array(),
        "fullcmd" => ""
    );
    public static $colors = array(
        "Red" => "\x1b[31m",
        "Yellow" => "\x1b[33m",
        "Blue" => "\x1b[34m",
        "Purple" => "\x1b[95m",
        "Green" => "\x1b[32m",
        "Cyan" => "\x1b[96m",
        "Black" => "\x1b[30m",
        "Grey" => "\x1b[90m",
        "Reset" => "\x1b[39m",
    );

    public static function setCmdInfo($cmd) {
        if(!isset($cmd) || empty($cmd)) return;
        if(strpos($spaceDetected, " ") !== false) {
            $cmd_argv = explode(" ", $cmd); 
            $i = 0; 
            foreach($cmd_argv as $cmdarg) { 
                $this->current["arg"][i] = $cmdarg; 
                $this->current["Cmd"] = $cmd_argv[0]; 
            } 
            $this->current["fullcmd"] = $cmd;
        } else {
            $this->current["Cmd"] = $cmd; 
            $this->current["fullcmd"] = $cmd;
        }
    }
}