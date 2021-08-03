<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\Section;
use App\Models\Lesson;

class CoursesLesson extends Component
{
    public $section, $lesson;

    //regla de validacion

    protected $rules = [
            'lesson.name' => 'required',
            'lesson.platform_id' => 'required',
            'lesson.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x']
    ];


    public function mouny(Section $section){
        $this->section = $section;

        $this->lesson = new Lesson();
    }

    public function render()
    {
        return view('livewire.instructor.courses-lesson');
    }
 
    public function edit(Lesson $lesson){
        $this->lesson = $lesson;
    }
}
