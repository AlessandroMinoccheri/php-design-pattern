<?php

namespace Facade;

class SendMail implements SendMailInterface
{
    public $to, $subject, $body;
    public $headers = array();

    public function setSendToEmailAddress($emailAddress)
    {
        $this->to = $emailAddress;
    }

    public function setSubjectName($subject)
    {
        $this->subject = $subject;
    }

    public function setTheEmailContents($body)
    {
        $this->body = $body;
    }

    public function setTheHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getTheHeaders()
    {
        return $this->headers;
    }

    public function getTheHeadersText()
    {
        $headers = "";
        foreach ($this->getTheHeaders() as $header) {
            $headers .= $header . "\r\n";
        }
    }

    public function sendTheEmailNow()
    {
        //send email
    }
}