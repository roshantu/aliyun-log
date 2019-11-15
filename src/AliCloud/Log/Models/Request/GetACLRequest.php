<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace AliCloud\Log\Models\Request;
use AliCloud\Log\Models\Request\Request;

/**
 * 
 *
 * @author log service dev
 */
class GetACLRequest extends Request {
    
    private $aclId;
    /**
     * Aliyun_Log_Models_GetACLRequest Constructor
     *
     */
    public function __construct($aclId=null) {
        $this->aclId = $aclId;
    }
    public function getAclId(){
        return $this->aclId;
    } 
    public function setAclId($aclId){
        $this->aclId = $aclId;
    }
}
