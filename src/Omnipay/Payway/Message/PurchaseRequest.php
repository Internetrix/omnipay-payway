<?php

namespace Omnipay\Payway\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount');

        return $this->getParameters();
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
