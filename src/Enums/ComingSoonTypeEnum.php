<?php

namespace Enums;

class ComingSoonTypeEnum
{
    const COMING_SOON_TYPE_MAINTENANCE = 'maintenance';
    const COMING_SOON_TYPE_COMING_SOON = 'coming_soon';
    const COMING_SOON_TYPE_UNDER_CONSTRUCTION = 'under_construction';
    const COMING_SOON_TYPE_LAUNCHING_SOON = 'launching_soon';
    const COMING_SOON_TYPE_SITE_OFFLINE = 'site_offline';
    const COMING_SOON_TYPE_SITE_DOWN = 'site_down';
    const COMING_SOON_TYPE_SITE_CLOSED = 'site_closed';

    /**
     * Get all the coming soon types
     *
     * @return array
     */
    public static function getComingSoonTypes()
    {
        return [
            self::COMING_SOON_TYPE_MAINTENANCE => 'Maintenance',
            self::COMING_SOON_TYPE_COMING_SOON => 'Coming Soon',
            self::COMING_SOON_TYPE_UNDER_CONSTRUCTION => 'Under Construction',
            self::COMING_SOON_TYPE_LAUNCHING_SOON => 'Launching Soon',
            self::COMING_SOON_TYPE_SITE_OFFLINE => 'Site Offline',
            self::COMING_SOON_TYPE_SITE_DOWN => 'Site Down',
            self::COMING_SOON_TYPE_SITE_CLOSED => 'Site Closed',
        ];
    }

    /**
     * Get the coming soon type
     *
     * @param string $type
     * */

    public static function getComingSoonType($type)
    {
        $types = self::getComingSoonTypes();
        return isset($types[$type]) ? $types[$type] : null;
    }

}