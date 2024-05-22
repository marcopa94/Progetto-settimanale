<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::with('activities')->where('user_id', '=', Auth::user()->id);

        if($request->has('id')){
            $query->where('id', '=', $request->get('id'));
            return view('projectsdetail', ['projects' => $query->get()]);
        }

        return view('projects', ['projects' => $query->get()]);
    }

    public function create()
    {
        return view('newproject');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'type', 'language', 'expiration_date']);
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        $project = Project::create($data);

        if ($project) {
            return redirect()->action([ProjectController::class, 'index']);
        } else {
            return back()->withErrors(['error' => 'Errore inserimento record']);
        }
    }

    public function show(Project $project)
    {
        return view('projectdetail', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        return view('projectedit', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->only(['name', 'description', 'type', 'language', 'expiration_date']) + ['updated_at' => Carbon::now()]);

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
