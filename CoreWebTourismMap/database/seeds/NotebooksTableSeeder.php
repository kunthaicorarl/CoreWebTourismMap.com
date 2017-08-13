<?php

use Illuminate\Database\Seeder;
use App\Notebook;
use App\User;
class NotebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
     //    $user=User::where('name', '=', 'admin')->take(1)->get();
        // // dd($user[0]->name);
        //  $obj=new Notebook();
        //  $obj->name='Create Tick';
        //  $obj->description='This is Test';
        //  $obj->users()->associate($user);
        //  $obj->save();
    //       $user=User::where('name', '=', 'admin')->get();
    //       $obj=new Notebook; 
    //       $obj->user_id=$user[0]->id;
    //       $obj->name='Hello';
    //       $obj->test('Helo World');
    //    //  dd($obj->test());
    //        $obj->save();
        // $user=User::where('name', '=', 'admin')->take(1)->get();
        // $note=new Notebook;
        // $note->name='Create Tick';
        // $note->description='This is Test';
        // $note->users()->associate($user[0],'notebooks','user_id','id');
        // $note->save();
        $user=User::where('name','=','admin')->first();
        // $note=Notebook::where('name','=','hello')->first();
        // $obj->account()->associate($account);
        // $obj->save();
        // $note
       // $obj->notebooks()->attach(note)  
        $note=new Notebook;
        $note->name='Admin';
        $note->description='HelloWorld';
        $note->users()->associate($user);
        $note->save();
        dd($note);
    }
}
