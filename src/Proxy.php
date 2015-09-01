<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 9/1/2015
 * Time: 3:53 PM
 */

namespace HideMyAssAPI;


class Proxy
{
    /**
     * Proxy constructor.
     * @param $ip
     * @param $port
     */
    public function __construct($ip = '', $port = '', $type = '')
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function toString(){
        return sprintf('%1$s:%2$s', $this->getIp(), $this->getPort());
    }
    protected $ip;
    protected $port;
    protected $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}