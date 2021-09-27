<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path =base_path("database/seeds/json/employees.json");
        $items = json_decode(file_get_contents($path),true);
        foreach ($items as $item){
            $d= \App\Direction::where('acronym','=',$item['direction'])->first();
            $u= \App\User::where('username','=',$item['user'])->first();

            if($d && $u){
                if(isset($item['sup'])){
                    $e= \App\Employee::where('first_name','=',$item['sup'])->first();
                    if($e){
                        $item['sup_id'] = $e->id;
                    }
                }
                $item['user_id'] = $u->id;
                $item['direction_id'] = $d->id;
                if(isset($item['image'])){
                    $fop =base_path("database/seeds/json/images/employee/".$item['image']);
                    if (Storage::has($fop))
                        Storage::delete($fop);
                    $fpath = "img/employee/" . uniqid() .'_'. $item['image'].'.png' ;
                    $item['image'] = $fpath;
                    Storage::put($fpath, File::get($fop));
                }
                unset($item['direction']);
                unset($item['user']);
                unset($item['sup']);
                \App\Employee::create($item);
            }
        }
    }
}
