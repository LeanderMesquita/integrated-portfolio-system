<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projects;
use App\Models\Technologies;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    
        $path_img = 'public/seeds/projects';
        $path_storage  = 'storage/app/public/projects';
        $this->copy_recursive($path_img, $path_storage);
        
        $wuf_tech = Technologies::whereIn('id', [1, 2, 4])->get();
        $siga2040_tech = Technologies::whereIn('id', [1, 3, 4, 5, 8])->get();
        $redeObserva_tech = Technologies::whereIn('id', [1, 2, 4, 5])->get();
        $mapaColaborativo_tech = Technologies::whereIn('id', [1, 4, 6, 7])->get();

        $filename = ['wuf13.png', 'wuf-13-01.jpg', 'wuf-13-02.jpg', 'wuf-13-03.jpg'];
        
        $wuf13 = new Projects();
        $wuf13 ->name = 'WUF 13'; 
        $wuf13 ->description = '
        Website de divulgação da candidatura de Fortaleza no Fórum Urbano Mundial 
        (World Urban Forum), em sua 13ª edição, que ocorrerá em 2026'; 
        $wuf13 ->image = $filename; //storage_path('/'.$temporary_file_name);
        $wuf13 ->dtCreation = '20/04/2022';
        $wuf13 ->avaliable = true; 
        $wuf13 ->responsible_agency = ['IPLANFOR', 'SEPOG', 'SEUMA'];
        $wuf13 ->current_link = 'https://wufcampaign.fortaleza.ce.gov.br/';
        $wuf13 ->save();
        $wuf13 ->technologies()->attach($wuf_tech);

       
        $filename = ['siga2040.png', 'sistema_das_camaras1.png', 'sistema_das_camaras2.png', 'sistema_das_camaras3.png'];

        $siga2040 = new Projects();
        $siga2040 ->name = 'Siga 2040';
        $siga2040 ->description = '
        O sistema possibilita acompanhar o andamento do plano do Fortaleza 2040,
        através das 15 Siga 2040, de forma padronizada e automatizada, além de disponibilizar 
        as informações de andamento para população, gerando maior transparência
        no acompanhamento do projeto por todos.';
        $siga2040 ->image = $filename;
        $siga2040 ->dtCreation = '11/02/2022';
        $siga2040 ->avaliable = true;
        $siga2040 ->responsible_agency = ['IPLANFOR', 'SEPOG', 'SEUMA'];
        $siga2040 ->current_link = 'https://fortaleza2040.fortaleza.ce.gov.br/siga2040/dashboard';
        $siga2040 ->save();
        $siga2040 ->technologies()->attach($siga2040_tech);

        $filename = ['rede_observa.png', 'redeobserva-1.png', 'redeobserva-2.png', 'redeobserva-3.png'];
        
        $redeObserva = new Projects();
        $redeObserva ->name = 'Rede Observa';
        $redeObserva ->description = '
        A REDE OBSERVA-CE difunde, em um só endereço virtual, a produção de conhecimento feita pelos diversos 
        observatórios existentes no Estado do Ceará e uso desse conhecimento para a melhor gestão das cidades';
        $redeObserva ->image = $filename;
        $redeObserva ->dtCreation = '22/02/2019';
        $redeObserva ->avaliable = true;
        $redeObserva ->responsible_agency = ['IPLANFOR', 'SEPOG', 'SEUMA'];
        $redeObserva ->current_link = 'https://redeobservace.fortaleza.ce.gov.br/login';
        $redeObserva ->save();
        $redeObserva ->technologies()->attach($redeObserva_tech);

        $filename = ['mapa_pdp.png', 'mapacolaborativo-2.png', 'mapacolaborativo-3.png', 'mapacolaborativo-4.png'];

        $mapaColaborativo = new Projects();
        $mapaColaborativo ->name = 'Mapa Colaborativo';
        $mapaColaborativo ->description = '
        Plataforma criada para prover uma facilidade para o cidadão registrar suas 
        propostas de forma georreferenciada, permitindo também a moderação das propostas inseridas. 
        As propostas aprovadas contribuem para o planejamento do município, 
        considerando as necessidades coletivas de toda a população';
        $mapaColaborativo ->image = $filename;
        $mapaColaborativo ->dtCreation = '03/07/2023';
        $mapaColaborativo ->avaliable = true;
        $mapaColaborativo ->responsible_agency = ['IPLANFOR', 'SEPOG', 'SEUMA'];
        $mapaColaborativo ->current_link = 'https://mapapdpfor.fortaleza.ce.gov.br/';
        $mapaColaborativo ->save();
        $mapaColaborativo ->technologies()->attach($mapaColaborativo_tech);
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
