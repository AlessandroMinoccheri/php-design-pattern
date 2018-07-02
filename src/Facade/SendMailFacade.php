<?php

namespace Facade;

class SendMailFacade
{

    private $sendMail;

    public function __construct(SendMailInterface $sendMail)
    {
        $this->sendMail = $sendMail;
    }

    public function setTo($to)
    {
        $this->sendMail->setSendToEmailAddress($to);
        return $this;
    }

    public function setSubject($subject)
    {
        $this->sendMail->setSubjectName($subject);
        return $this;
    }

    public function setBody($body)
    {
        $this->sendMail->setTheEmailContents($body);
        return $this;
    }

    public function setHeaders($headers)
    {
        $this->sendMail->setTheHeaders($headers);
        return $this;
    }

    public function send()
    {
        $this->sendMail->sendTheEmailNow();
    }
}