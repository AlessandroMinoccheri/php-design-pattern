<?php

namespace Facade\Tests;

use Facade\SendMail;
use Facade\SendMailFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testSendMailWithFacade()
    {
        $to = 'foo@bar.com';
        $subject = 'Foo Bar';
        $body = 'Foo Bar Baz';
        $headers = [
            'From: baz@bar.com'
        ];

        $sendMail = new SendMail();
        $sendMailFacade = new SendMailFacade($sendMail);
        $sendMailFacade
            ->setTo($to)
            ->setSubject($subject)
            ->setBody($body)
            ->setHeaders($headers)
            ->send();

        $this->assertEquals($headers, $sendMail->getTheHeaders());
    }
}