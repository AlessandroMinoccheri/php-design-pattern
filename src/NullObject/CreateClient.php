<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 08/08/18
 * Time: 07:24
 */

namespace NullObject;


class CreateClient
{
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClientType()
    {
        return $this->client->getType();
    }
}