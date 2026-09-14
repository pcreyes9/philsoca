<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;


use Livewire\Component;

class PbldProgram extends Component
{
    public $topic, $speaker, $desc, $obj;

    public function render()
    {
        $day2 = DB::table('pbld_sessions as ps')
        ->leftJoin('users as u', 'ps.speaker_id', '=', 'u.id')
        ->select(
            'ps.id',
            'ps.topic',
            'ps.speaker_id',
            'ps.speaker',
            'ps.desc',
            'ps.obj',
            'ps.count',
            'u.photo as photo' // ✅ directly select from users table
        )
        ->where('ps.count', 2)
        ->get();


        // dd($day2);
        // $schedule = DB::table('speakers_schedule')->get();
        return view('livewire.pbld-program', ['day2' => $day2]);
    }

    public function modalShow ($speaker, $id){
        // dd($id);
        $this->speaker = $speaker;
        $this->topic = DB::table('pbld_sessions')->where('id', $id)->value('topic');
        $this->desc = DB::table('pbld_sessions')->where('id', $id)->value('desc');
        $this->obj = DB::table('pbld_sessions')->where('id', $id)->value('obj');

        // dd($this->desc);

        // dd($this->schedule->toArray());
        
    }
}
