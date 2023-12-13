<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class VisitorMiddleware
{
    public function handle($request, Closure $next)
    {
        $ipAddress = $request->ip();
        $currentTime = now();

        // Check if the visitor already exists for the current hour
        $existingVisitor = DB::table('visitors')
            ->where('ip_address', $ipAddress)
            ->where('visit_time', '>=', now()->startOfHour())
            ->where('visit_time', '<', now()->endOfHour())
            ->first();

        if (!$existingVisitor) {
            // If the visitor doesn't exist, create a new record
            DB::table('visitors')->insert([
                'ip_address' => $ipAddress,
                'visit_time' => $currentTime,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ]);
        }

        return $next($request);
    }
}
