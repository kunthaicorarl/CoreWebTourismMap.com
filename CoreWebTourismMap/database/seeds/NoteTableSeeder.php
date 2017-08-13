<?php

use Illuminate\Database\Seeder;
use App\Note;
class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           Note::create([
        	'title'=>'New First Note',
        	'notebook_id'=>1,
        	'body'=>'Some random text blah blah'
        	]);
    }
}
