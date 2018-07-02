<?php

namespace Facade;

interface SendMailInterface
{
    public function setSendToEmailAddress($emailAddress);

    public function setSubjectName($subject);

    public function setTheEmailContents($body);

    public function setTheHeaders($headers);

    public function getTheHeaders();

    public function getTheHeadersText();

    public function sendTheEmailNow();
}