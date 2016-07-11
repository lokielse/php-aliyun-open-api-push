<?php namespace Aliyun\Push\Request;

use Aliyun\Core\RpcAcsRequest;

class PushMessageToAndroidRequest extends RpcAcsRequest
{

    private $appKey;

    private $target;

    private $targetValue;

    private $message;


    function __construct()
    {
        parent::__construct("Push", "2015-08-27", "PushMessageToAndroid");
    }


    public function getAppKey()
    {
        return $this->appKey;
    }


    public function setAppKey($appKey)
    {
        $this->appKey                    = $appKey;
        $this->queryParameters["AppKey"] = $appKey;
    }


    public function getTarget()
    {
        return $this->target;
    }


    public function setTarget($target)
    {
        $this->target                    = $target;
        $this->queryParameters["Target"] = $target;
    }


    public function getTargetValue()
    {
        return $this->targetValue;
    }


    public function setTargetValue($targetValue)
    {
        $this->targetValue                    = $targetValue;
        $this->queryParameters["TargetValue"] = $targetValue;
    }


    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message                    = $message;
        $this->queryParameters["Message"] = $message;
    }

}