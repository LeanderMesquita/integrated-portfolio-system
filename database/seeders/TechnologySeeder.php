<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technologies;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path_img = 'public/seeds/technologies';
        $path_storage  = 'storage/app/public/technologies';
        $this->copy_recursive($path_img, $path_storage);

        $filename = "javascript.svg";

        $javascript = new Technologies();
        $javascript ->name = 'JavaScript';
        $javascript ->icon = "$filename";
        $javascript ->save();

        $filename = "bootstrap.svg";

        $bootstrap = new Technologies();
        $bootstrap ->name = 'Bootstrap';
        $bootstrap ->icon = "$filename";
        $bootstrap ->save();
        
        $filename = "materialize.svg";

        $materialize = new Technologies();
        $materialize ->name= 'Materialize';
        $materialize ->icon= "$filename";
        $materialize ->save();

        $filename = "laravel.svg";

        $laravel = new Technologies();
        $laravel ->name = 'Laravel';
        $laravel ->icon = "$filename";
        $laravel ->save();

        $filename = "jquery.svg";

        $jquery = new Technologies();
        $jquery ->name = 'JQuery';
        $jquery ->icon = "$filename";
        $jquery ->save();

        $filename = "leaflet.svg";

        $leaflet = new Technologies();
        $leaflet ->name = 'Leaflet';
        $leaflet ->icon = "$filename";
        $leaflet ->save();

        $filename = "geoserver.svg";

        $geoserver = new Technologies();
        $geoserver ->name = 'Geoserver';
        $geoserver ->icon = "$filename";
        $geoserver ->save();

        $filename = "pentaho.svg";

        $pentaho = new Technologies();
        $pentaho ->name = 'Pentaho';
        $pentaho ->icon = "$filename";
        $pentaho ->save();
    }

    function copy_recursive($src, $dst, $except=[]) {  
        $dir = opendir($src);  
        @mkdir($dst);  
        foreach (scandir($src) as $file) {  
            if (( $file != '.' ) && ( $file != '..' )) {  
                if ( is_dir($src . '/' . $file) )  
                {  
                    $this->copy_recursive($src . '/' . $file, $dst . '/' . $file, $except);  
                }  
                else {  
                    if(in_array($src . '/' . $file, $except)){
                        // echo "except ".$src . '/' . $file;
                        
                    }else{
                        if(copy($src . '/' . $file, $dst . '/' . $file)){
                           
                        } else{
                           
                        }
                    }
                }  
            }  
        }  
        closedir($dir); 
        }   
}
