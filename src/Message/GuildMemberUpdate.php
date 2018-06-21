<?php declare(strict_types=1);

namespace FTC\Discord\Message;

use FTC\Discord\Message;

class GuildMemberUpdate extends Message
{
    
    const EVENT_NAME = 'GUILD_MEMBER_UPDATE';
    
    public function getUserRoles()
    {
        if (isset($this->data['roles'])) {
            return $this->data['roles'];
        }
    }
    
}