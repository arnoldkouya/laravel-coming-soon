
if (!function_exists('isMaintenanceMode')) {
    function isMaintenanceMode()
    {
        return \ArnoldKouya\LaraComingSoon\Models\ComingSoon::where('state', true)->exists();
    }
}
