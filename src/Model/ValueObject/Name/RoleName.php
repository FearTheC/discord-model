<?php
namespace FTC\Discord\Model\ValueObject\Name;


use FTC\Discord\Model\ValueObject\Name;

class RoleName extends Name
{
    
    const MAX_LENGTH = 32;

    const MIN_LENGTH = 2;
    
    const FORBIDDEN_CHARS = [];
    
    const FORBIDDEN_NAMES = [];
    
}
