<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;
use Symfony\Component\Mime\Message;

class ProjectsTasksController extends Controller
{
    //
    public function update(Task $task)
    {
        $task->update([

            'completed' => request()->has('completed')

        ]);
        return back();
    }
    public function store(Project $project)
    {

        request()->validate(['description' => 'required']);

        Task::create([

            'project_id' => $project->id,

            'body' => request('description')

        ]);

        return back();
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
