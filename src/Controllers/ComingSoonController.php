
namespace ArnoldKouya\\LaraComingSoon\\Controllers;

use Illuminate\\Http\\Request;
use ArnoldKouya\\LaraComingSoon\\Models\\ComingSoon;
use App\\Http\\Controllers\\Controller;

class ComingSoonController extends Controller
{
    public function index()
    {
        $settings = ComingSoon::first();
        return view('lara-coming-soon::config', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'image' => 'nullable|string',
            'message' => 'nullable|string',
            'allowed_ip' => 'nullable|string',
            'state' => 'required|boolean',
        ]);

        $settings = ComingSoon::firstOrCreate([]);
        $settings->update($data);

        return redirect()->back()->with('success', 'Configuration mise à jour avec succès.');
    }
}
