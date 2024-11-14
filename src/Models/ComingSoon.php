
namespace ArnoldKouya\\LaraComingSoon\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class ComingSoon extends Model
{
    protected $fillable = ['type', 'image', 'message', 'allowed_ip', 'state'];
}
