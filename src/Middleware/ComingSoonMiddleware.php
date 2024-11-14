
namespace ArnoldKouya\\LaraComingSoon\\Middleware;

use Closure;
use ArnoldKouya\\LaraComingSoon\\Models\\ComingSoon;

class ComingSoonMiddleware
{
    public function handle($request, Closure $next)
    {
        $comingSoon = ComingSoon::where('state', true)->first();

        if ($comingSoon && !in_array($request->ip(), explode(',', $comingSoon->allowed_ip))) {
            return response()->view('lara-coming-soon::coming-soon', [
                'message' => $comingSoon->message,
                'type' => $comingSoon->type,
                'image' => $comingSoon->image,
            ]);
        }

        return $next($request);
    }
}
