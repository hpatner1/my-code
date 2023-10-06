<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TextController extends Controller
{
    

    public function test()

    {
        
        Collection::macro('toUpper', function () {
            return $this->map(function (string $value) {
                return Str::upper($value);
            });
        });
         
# arrey = all()
//$collection = collect(['first', 'second', 'Hassan', 'Muhammad'])->all();
 
//$upper = $collection;
 
 //['FIRST', 'SECOND']

# avg()
 $average = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->avg('foo');
 
// 20
 
$average = collect([1, 1, 1, 4])->avg();
 
// 2

# chunk()
$collection = collect([1, 2, 3, 4, 5, 6, 7]);
 
$chunks = $collection->chunk(2);
 
$chunks->all();
 
// [[1, 2, 3, 4], [5, 6, 7]]

#combine()
$collection = collect(['name', 'age']);
 
$combined = $collection->combine(['George', 29]);
 
$combined->all();
 
// ['name' => 'George', 'age' => 29]
       dd($combined);
       

        return view("test");
    }
}
