<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $obats = collect([
      ["nama" => "3M A3 2:250", "satuan" => "Pc", "harga" => 47600],
      ["nama" => "3M Es Pe A 3,5", "satuan" => "Tube", "harga" => 99900],
      ["nama" => "3M Es Pe A2", "satuan" => "Tube", "harga" => 393200],
      ["nama" => "3M Es Pe A4", "satuan" => "Tube", "harga" => 99900],
      ["nama" => "3m Es pe B2", "satuan" => "Tube", "harga" => 430100],
      ["nama" => "3M Es Pe C3", "satuan" => "Tube", "harga" => 107600],
      ["nama" => "3M Es Pe Z 250, A3", "satuan" => "Box", "harga" => 99900],
      ["nama" => "3M Es Pe Z 250, A3,5", "satuan" => "Pc", "harga" => 516100],
      ["nama" => "3m Es Pe Z.250 C2", "satuan" => "Tube", "harga" => 430100],
      ["nama" => "3m Es Pe Z.250 D3", "satuan" => "Tube", "harga" => 430100],
      ["nama" => "3-Way Stopcock", "satuan" => "pcs", "harga" => 20700],
      ["nama" => "A2 (Helio)", "satuan" => "Tube", "harga" => 430100],
      ["nama" => "A3 (Helio)", "satuan" => "Tube", "harga" => 225300],
      ["nama" => "A3 Tetric N Ceram", "satuan" => "Tube", "harga" => 107600],
      ["nama" => "A3.5 Tetric Cream", "satuan" => "Tube", "harga" => 107600],
      ["nama" => "Abbocath No. 14", "satuan" => "pcs", "harga" => 27300],
      ["nama" => "Abbocath No. 16", "satuan" => "pcs", "harga" => 27300],
      ["nama" => "Abbocath No. 18", "satuan" => "pcs", "harga" => 27300],
      ["nama" => "Abbocath No. 20", "satuan" => "pcs", "harga" => 27300],
      ["nama" => "Abbocath No. 22", "satuan" => "pcs", "harga" => 19700],
      ["nama" => "Abbocath No. 24", "satuan" => "pcs", "harga" => 27300],
      ["nama" => "Abbocath No. 26", "satuan" => "pcs", "harga" => 22200],
      ["nama" => "Achbar", "satuan" => "pcs", "harga" => 399400],
      ["nama" => "Acticulating Paper (lmbr)", "satuan" => "Pack", "harga" => 147500],
      ["nama" => "Advantime 1", "satuan" => "pcs", "harga" => 121100],
      ["nama" => "Advantime 3/0", "satuan" => "pcs", "harga" => 121100],
      ["nama" => "Advantime 4/0", "satuan" => "pcs", "harga" => 110600],
      ["nama" => "Agaat Spantula", "satuan" => "pcs", "harga" => 61500],
      ["nama" => "Agaat Spatula", "satuan" => "pcs", "harga" => 61500],
      ["nama" => "Ah 26 Liquid", "satuan" => "Botol", "harga" => 40000],
      ["nama" => "AH 26 Powder", "satuan" => "Botol", "harga" => 50000],
      ["nama" => "Alginat", "satuan" => "Gr", "harga" => 300],
      ["nama" => "Alkohol 70%", "satuan" => "ml", "harga" => 100],
      ["nama" => "Alkohol 96 %", "satuan" => "ml", "harga" => 100],
      ["nama" => "Alvogyl 12 gr", "satuan" => "Botol", "harga" => 282700],
      ["nama" => "Amalgam (Powder Liquid)", "satuan" => "Botol", "harga" => 264200],
      ["nama" => "Anesthesia Minikit", "satuan" => "Unit", "harga" => 196600],
      ["nama" => "Anios special DJP", "satuan" => "ml", "harga" => 400],
      ["nama" => "Anios Spray", "satuan" => "ml", "harga" => 400],
      ["nama" => "Anios Spray 29", "satuan" => "ml", "harga" => 400],
      ["nama" => "Aniosyme DD1", "satuan" => "ml", "harga" => 400],
      ["nama" => "Arsen (btl)", "satuan" => "Botol", "harga" => 476200],
      ["nama" => "Aseptanios terminal HPH", "satuan" => "ml", "harga" => 400],
      ["nama" => "Aseptanios terminal spare", "satuan" => "Galon", "harga" => 1591200],
      ["nama" => "Atramat 0 atrom", "satuan" => "pcs", "harga" => 110600],
      ["nama" => "Atramat 1 atrom", "satuan" => "pcs", "harga" => 118000],
      ["nama" => "Atramat 2 atrom", "satuan" => "pcs", "harga" => 68900],
      ["nama" => "Atramat 2/0 atrom", "satuan" => "pcs", "harga" => 106200],
      ["nama" => "Atramat 3/0 atrom", "satuan" => "pcs", "harga" => 121700],
      ["nama" => "Atraucan", "satuan" => "pcs", "harga" => 122900],
      ["nama" => "Autoclave tp.3/4", "satuan" => "Rol", "harga" => 154900],
      ["nama" => "Avolgil", "satuan" => "pcs", "harga" => 344100],
      ["nama" => "Baju operasi", "satuan" => "pcs", "harga" => 64600],
      ["nama" => "Bekker Glass 1 L", "satuan" => "pcs", "harga" => 104500],
      ["nama" => "Betadine", "satuan" => "ml", "harga" => 100],
      ["nama" => "Betadine Plester", "satuan" => "pcs", "harga" => 400],
      ["nama" => "Bisturi No. 11", "satuan" => "pcs", "harga" => 2600],
      ["nama" => "Bisturi No. 15", "satuan" => "pcs", "harga" => 2600],
      ["nama" => "Bisturi No. 21", "satuan" => "pcs", "harga" => 2600],
      ["nama" => "Bisturi No. 22", "satuan" => "pcs", "harga" => 2600],
      ["nama" => "Bisturi No. 23", "satuan" => "pcs", "harga" => 2600],
      ["nama" => "Blood Lancet", "satuan" => "pcs", "harga" => 600],
      ["nama" => "Blood tranf.set type OB-1", "satuan" => "pcs", "harga" => 26000],
      ["nama" => "Blue Tips", "satuan" => "pcs", "harga" => 300],
      ["nama" => "Bonding 3M", "satuan" => "pcs", "harga" => 1029100],
      ["nama" => "Bone Plate Mini 2,0 (Mini Implant Sel)", "satuan" => "pcs", "harga" => 637400],
      ["nama" => "Bone Plate Narrow 2,0 (Basic Implant Sel)", "satuan" => "pcs", "harga" => 1520600],
      ["nama" => "Bone Plate Small (Small Implant Sel)", "satuan" => "pcs", "harga" => 637400],
      ["nama" => "Bone Screw 2,0 (Mini Implant Sel)", "satuan" => "pcs", "harga" => 108400],
      ["nama" => "Bone Screw 3,4 (Small Implant Sel)", "satuan" => "pcs", "harga" => 150800],
      ["nama" => "Bone Screw 4,5 (Basic Implant Sel)", "satuan" => "pcs", "harga" => 251500],
      ["nama" => "Bone Screw 4.5", "satuan" => "pcs", "harga" => 249000],
      ["nama" => "Bone Wax", "satuan" => "pcs", "harga" => 66400],
      ["nama" => "Botol Plastik 10 ml", "satuan" => "pcs", "harga" => 900],
      ["nama" => "Botol Plastik 100 ml", "satuan" => "pcs", "harga" => 600],
      ["nama" => "Botol Plastik 100 ml ttp hijau", "satuan" => "pcs", "harga" => 2000],
      ["nama" => "Botol Plastik 200 ml", "satuan" => "pcs", "harga" => 900],
      ["nama" => "Botol Plastik 50 ml", "satuan" => "pcs", "harga" => 500],
      ["nama" => "Botol Plastik 60 ml", "satuan" => "pcs", "harga" => 300],
      ["nama" => "Botol Tetes", "satuan" => "pcs", "harga" => 92200],
      ["nama" => "Bowl & Spatula", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 10 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 11 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 12 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 13 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 14 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 15 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 16 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 17 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 18 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 19 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 20 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 5 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 6 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 7 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 8 hole", "satuan" => "pcs", "harga" => 2010600],
      ["nama" => "Broad Plate ACP 9 hole", "satuan" => "pcs", "harga" => 184400],
      ["nama" => "Bur Belimbing/Zekrya", "satuan" => "pcs", "harga" => 184400],
      ["nama" => "Bur Belimbing/Zekrya E0151", "satuan" => "pcs", "harga" => 30800],
      ["nama" => "Bur Fissur Cutting", "satuan" => "pcs", "harga" => 36900],
      ["nama" => "Bur Polish Fissur", "satuan" => "pcs", "harga" => 30800],
      ["nama" => "Bur Round Fissur", "satuan" => "pcs", "harga" => 30800],
      ["nama" => "Bur SS White", "satuan" => "pcs", "harga" => 24600],
      ["nama" => "Paracetamol ", "satuan" => "pcs", "harga" => 6000],
    ]);
    $obats->each(function ($obat) {
      Obat::create([
        "kode" => getLastId(new Obat(), "kode", "OB-" . date("Ymd") . "-"),
        "nama" => $obat["nama"],
        "harga" => $obat["harga"],
        "satuan" => $obat["satuan"]
      ]);
    });
  }
}
