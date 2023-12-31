<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thanas = [
            ["district_id"=>1,"name"=>"Bagerhat Sadar"],
            ["district_id"=>1,"name"=>"Chitalmari"],
            ["district_id"=>1,"name"=>"Fakirhat"],
            ["district_id"=>1,"name"=>"Kachua"],
            ["district_id"=>1,"name"=>"Mollahat"],
            ["district_id"=>1,"name"=>"Mongla"],
            ["district_id"=>1,"name"=>"Morrelganj"],
            ["district_id"=>1,"name"=>"Rampal"],
            ["district_id"=>1,"name"=>"Sharankhola"],
            ["district_id"=>2,"name"=>"Alikadam"],
            ["district_id"=>2,"name"=>"Bandarban Sadar"],
            ["district_id"=>2,"name"=>"Lama"],
            ["district_id"=>2,"name"=>"Naikhongchhari"],
            ["district_id"=>2,"name"=>"Rowangchhari"],
            ["district_id"=>2,"name"=>"Ruma"],
            ["district_id"=>2,"name"=>"Thanchi"],
            ["district_id"=>3,"name"=>"Amtali"],
            ["district_id"=>3,"name"=>"Bamna"],
            ["district_id"=>3,"name"=>"Barguna Sadar"],
            ["district_id"=>3,"name"=>"Betagi"],
            ["district_id"=>3,"name"=>"Patharghata"],
            ["district_id"=>4,"name"=>"Agailjhara"],
            ["district_id"=>4,"name"=>"Babuganj"],
            ["district_id"=>4,"name"=>"Bakerganj"],
            ["district_id"=>4,"name"=>"Banaripara"],
            ["district_id"=>4,"name"=>"Barisal Sadar"],
            ["district_id"=>4,"name"=>"Gaurnadi"],
            ["district_id"=>4,"name"=>"Hizla"],
            ["district_id"=>4,"name"=>"Mehendiganj"],
            ["district_id"=>4,"name"=>"Muladi"],
            ["district_id"=>4,"name"=>"Wazirpur"],
            ["district_id"=>5,"name"=>"Bhola Sadar"],
            ["district_id"=>5,"name"=>"Burhanuddin"],
            ["district_id"=>5,"name"=>"Char Fasson"],
            ["district_id"=>5,"name"=>"Daulatkhan"],
            ["district_id"=>5,"name"=>"Lalmohan"],
            ["district_id"=>5,"name"=>"Manpura"],
            ["district_id"=>5,"name"=>"Tazumuddin"],
            ["district_id"=>6,"name"=>"Adamdighi"],
            ["district_id"=>6,"name"=>"Bogra Sadar"],
            ["district_id"=>6,"name"=>"Dhunat"],
            ["district_id"=>6,"name"=>"Dupchanchia"],
            ["district_id"=>6,"name"=>"Gabtali"],
            ["district_id"=>6,"name"=>"Kahaloo"],
            ["district_id"=>6,"name"=>"Nandigram"],
            ["district_id"=>6,"name"=>"Sariakandi"],
            ["district_id"=>6,"name"=>"Shajahanpur"],
            ["district_id"=>6,"name"=>"Sherpur"],
            ["district_id"=>6,"name"=>"Shibganj"],
            ["district_id"=>6,"name"=>"Sonatala"],
            ["district_id"=>7,"name"=>"Akhaura"],
            ["district_id"=>7,"name"=>"Ashuganj"],
            ["district_id"=>7,"name"=>"Bancharampur"],
            ["district_id"=>7,"name"=>"Bijoynagar"],
            ["district_id"=>7,"name"=>"Brahmanbaria Sadar"],
            ["district_id"=>7,"name"=>"Kasba"],
            ["district_id"=>7,"name"=>"Nabinagar"],
            ["district_id"=>7,"name"=>"Nasirnagar"],
            ["district_id"=>7,"name"=>"Sarail"],
            ["district_id"=>8,"name"=>"Chandpur Sadar"],
            ["district_id"=>8,"name"=>"Faridganj"],
            ["district_id"=>8,"name"=>"Haimchar"],
            ["district_id"=>8,"name"=>"Hajiganj"],
            ["district_id"=>8,"name"=>"Kachua"],
            ["district_id"=>8,"name"=>"Matlab Dakshin"],
            ["district_id"=>8,"name"=>"Matlab Uttar"],
            ["district_id"=>8,"name"=>"Shahrasti"],
            ["district_id"=>9,"name"=>"Bholahat"],
            ["district_id"=>9,"name"=>"Chapai Nawabganj Sadar"],
            ["district_id"=>9,"name"=>"Gomastapur"],
            ["district_id"=>9,"name"=>"Nachole"],
            ["district_id"=>9,"name"=>"Shibganj"],
            ["district_id"=>10,"name"=>"Anowara"],
            ["district_id"=>10,"name"=>"Bakalia"],
            ["district_id"=>10,"name"=>"Bandar"],
            ["district_id"=>10,"name"=>"Banshkhali"],
            ["district_id"=>10,"name"=>"Bayejid"],
            ["district_id"=>10,"name"=>"Boalkhali"],
            ["district_id"=>10,"name"=>"Chandanaish"],
            ["district_id"=>10,"name"=>"Chandgaon"],
            ["district_id"=>10,"name"=>"Double Mooring"],
            ["district_id"=>10,"name"=>"Fatikchhari"],
            ["district_id"=>10,"name"=>"Halishahar"],
            ["district_id"=>10,"name"=>"Hathazari"],
            ["district_id"=>10,"name"=>"Khulshi"],
            ["district_id"=>10,"name"=>"Kotwali"],
            ["district_id"=>10,"name"=>"Lohagara"],
            ["district_id"=>10,"name"=>"Mirsharai"],
            ["district_id"=>10,"name"=>"Pahartali"],
            ["district_id"=>10,"name"=>"Panchlaish"],
            ["district_id"=>10,"name"=>"Patenga"],
            ["district_id"=>10,"name"=>"Patiya "],
            ["district_id"=>10,"name"=>"Rangunia"],
            ["district_id"=>10,"name"=>"Raozan"],
            ["district_id"=>10,"name"=>"Sandwip"],
            ["district_id"=>10,"name"=>"Satkania"],
            ["district_id"=>10,"name"=>"Sitakunda"],
            ["district_id"=>10,"name"=>"Karnaphuli"],
            ["district_id"=>10,"name"=>"Akbar Shah"],
            ["district_id"=>10,"name"=>"Chawkbazar"],
            ["district_id"=>10,"name"=>"EPZ"],
            ["district_id"=>10,"name"=>"Karnaphuli"],
            ["district_id"=>10,"name"=>"Sadarghat"],
            ["district_id"=>10,"name"=>"Jorargonj "],
            ["district_id"=>11,"name"=>"Alamdanga"],
            ["district_id"=>11,"name"=>"Chuadanga Sadar"],
            ["district_id"=>11,"name"=>"Damurhuda"],
            ["district_id"=>11,"name"=>"Jibannagar"],
            ["district_id"=>12,"name"=>"Chakaria"],
            ["district_id"=>12,"name"=>"Cox's Bazar Sadar"],
            ["district_id" =>12, "name"=>"Kutubdia"],
            ["district_id" =>12, "name"=>"Maheshkhali"],
            ["district_id" =>12, "name"=>"Pekua"],
            ["district_id" =>12, "name"=>"Ramu"],
            ["district_id" =>12, "name"=>"Teknaf"],
            ["district_id" =>12, "name"=>"Ukhia"],
            ["district_id" =>13, "name"=>"Barura"],
            ["district_id" =>13, "name"=>"Brahmanpara"],
            ["district_id" =>13, "name"=>"Burichang"],
            ["district_id" =>13, "name"=>"Chandina"],
            ["district_id" =>13, "name"=>"Chauddagram"],
            ["district_id" =>13, "name"=>"Comilla Adarsha Sadar"],
            ["district_id" =>13, "name"=>"Comilla Sadar Dakshin"],
            ["district_id" =>13, "name"=>"Daudkandi"],
            ["district_id" =>13, "name"=>"Debidwar"],
            ["district_id" =>13, "name"=>"Homna"],
            ["district_id" =>13, "name"=>"Laksham"],
            ["district_id" =>13, "name"=>"Manoharganj"],
            ["district_id" =>13, "name"=>"Meghna"],
            ["district_id" =>13, "name"=>"Muradnagar"],
            ["district_id" =>13, "name"=>"Nangalkot"],
            ["district_id" =>13, "name"=>"Titas"],
            ["district_id" =>14, "name"=>"Adabor"],
            ["district_id" =>14, "name"=>"Badda"],
            ["district_id" =>14, "name"=>"Bangshal"],
            ["district_id" =>14, "name"=>"Biman Bandar"],
            ["district_id" =>14, "name"=>"Cantonment"],
            ["district_id" =>14, "name"=>"Chawkbazar"],
            ["district_id" =>14, "name"=>"Dakshinkhan"],
            ["district_id" =>14, "name"=>"Darus Salam"],
            ["district_id" =>14, "name"=>"Demra"],
            ["district_id" =>14, "name"=>"Dhamrai"],
            ["district_id" =>14, "name"=>"Dhanmondi"],
            ["district_id" =>14, "name"=>"Dohar"],
            ["district_id" =>14, "name"=>"Gendaria"],
            ["district_id" =>14, "name"=>"Gulshan"],
            ["district_id" =>14, "name"=>"Hazaribagh"],
            ["district_id" =>14, "name"=>"Jatrabari"],
            ["district_id" =>14, "name"=>"Kadamtali"],
            ["district_id" =>14, "name"=>"Kafrul"],
            ["district_id" =>14, "name"=>"Kalabagan"],
            ["district_id" =>14, "name"=>"Kamrangirchar"],
            ["district_id" =>14, "name"=>"Keraniganj"],
            ["district_id" =>14, "name"=>"Khilgaon"],
            ["district_id" =>14, "name"=>"Khilkhet"],
            ["district_id" =>14, "name"=>"Kotwali"],
            ["district_id" =>14, "name"=>"Lalbagh"],
            ["district_id" =>14, "name"=>"Mirpur"],
            ["district_id" =>14, "name"=>"Mohammadpur"],
            ["district_id" =>14, "name"=>"Motijheel"],
            ["district_id" =>14, "name"=>"Nawabganj"],
            ["district_id" =>14, "name"=>"New Market"],
            ["district_id" =>14, "name"=>"Pallabi"],
            ["district_id" =>14, "name"=>"Paltan"],
            ["district_id" =>14, "name"=>"Ramna"],
            ["district_id" =>14, "name"=>"Rampura"],
            ["district_id" =>14, "name"=>"Sabujbagh"],
            ["district_id" =>14, "name"=>"Savar"],
            ["district_id" =>14, "name"=>"Shah Ali"],
            ["district_id" =>14, "name"=>"Shahbagh"],
            ["district_id" =>14, "name"=>"Sher-e-Bangla Nagar"],
            ["district_id" =>14, "name"=>"Shyampur"],
            ["district_id" =>14, "name"=>"Sutrapur"],
            ["district_id" =>14, "name"=>"Tejgaon"],
            ["district_id" =>14, "name"=>"Tejgaon Industrial Area"],
            ["district_id" =>14, "name"=>"Turag"],
            ["district_id" =>14, "name"=>"Uttara"],
            ["district_id" =>14, "name"=>"Uttar Khan"],
            ["district_id" =>15, "name"=>"Biral"],
            ["district_id" =>15, "name"=>"Birampur"],
            ["district_id" =>15, "name"=>"Birganj"],
            ["district_id" =>15, "name"=>"Bochaganj"],
            ["district_id" =>15, "name"=>"Chirirbandar"],
            ["district_id" =>15, "name"=>"Dinajpur Sadar"],
            ["district_id" =>15, "name"=>"Ghoraghat"],
            ["district_id" =>15, "name"=>"Hakimpur"],
            ["district_id" =>15, "name"=>"Kaharole"],
            ["district_id" =>15, "name"=>"Khansama"],
            ["district_id" =>15, "name"=>"Nawabganj"],
            ["district_id" =>15, "name"=>"Parbatipur"],
            ["district_id" =>15, "name"=>"Phulbari"],
            ["district_id" =>16, "name"=>"Alfadanga"],
            ["district_id" =>16, "name"=>"Bhanga"],
            ["district_id" =>16, "name"=>"Boalmari"],
            ["district_id" =>16, "name"=>"Charbhadrasan"],
            ["district_id" =>16, "name"=>"Faridpur Sadar"],
            ["district_id" =>16, "name"=>"Madhukhali"],
            ["district_id" =>16, "name"=>"Nagarkanda"],
            ["district_id" =>16, "name"=>"Sadarpur"],
            ["district_id" =>16, "name"=>"Saltha"],
            ["district_id" =>17, "name"=>"Chhagalnaiya"],
            ["district_id" =>17, "name"=>"Daganbhuiyan"],
            ["district_id" =>17, "name"=>"Feni Sadar"],
            ["district_id" =>17, "name"=>"Fulgazi"],
            ["district_id" =>17, "name"=>"Parshuram"],
            ["district_id" =>17, "name"=>"Sonagazi"],
            ["district_id" =>18, "name"=>"Gaibandha Sadar"],
            ["district_id" =>18, "name"=>"Gobindaganj"],
            ["district_id" =>18, "name"=>"Palashbari"],
            ["district_id" =>18, "name"=>"Phulchhari"],
            ["district_id" =>18, "name"=>"Sadullapur"],
            ["district_id" =>18, "name"=>"Saghata"],
            ["district_id" =>18, "name"=>"Sundarganj"],
            ["district_id" =>19, "name"=>"Gazipur Sadar"],
            ["district_id" =>19, "name"=>"Kaliakair"],
            ["district_id" =>19, "name"=>"Kaliganj"],
            ["district_id" =>19, "name"=>"Kapasia"],
            ["district_id" =>19, "name"=>"Sripur"],
            ["district_id" =>20, "name"=>"Gopalganj Sadar"],
            ["district_id" =>20, "name"=>"Kashiani"],
            ["district_id" =>20, "name"=>"Kotalipara"],
            ["district_id" =>20, "name"=>"Muksudpur"],
            ["district_id" =>20, "name"=>"Tungipara"],
            ["district_id" =>21, "name"=>"Ajmiriganj"],
            ["district_id" =>21, "name"=>"Bahubal"],
            ["district_id" =>21, "name"=>"Baniachang"],
            ["district_id" =>21, "name"=>"Chunarughat"],
            ["district_id" =>21, "name"=>"Habiganj Sadar"],
            ["district_id" =>21, "name"=>"Lakhai"],
            ["district_id" =>21, "name"=>"Madhabpur"],
            ["district_id" =>21, "name"=>"Nabiganj"],
            ["district_id" =>22, "name"=>"Akkelpur"],
            ["district_id" =>22, "name"=>"Jaipurhat Sadar"],
            ["district_id" =>22, "name"=>"Kalai"],
            ["district_id" =>22, "name"=>"Khetlal"],
            ["district_id" =>22, "name"=>"Panchbibi"],
            ["district_id" =>23, "name"=>"Bakshiganj"],
            ["district_id" =>23, "name"=>"Dewanganj"],
            ["district_id" =>23, "name"=>"Islampur"],
            ["district_id" =>23, "name"=>"Jamalpur Sadar"],
            ["district_id" =>23, "name"=>"Madarganj"],
            ["district_id" =>23, "name"=>"Melandaha"],
            ["district_id" =>23, "name"=>"Sarishabari"],
            ["district_id" =>24, "name"=>"Abhaynagar"],
            ["district_id" =>24, "name"=>"Bagherpara"],
            ["district_id" =>24, "name"=>"Chaugachha"],
            ["district_id" =>24, "name"=>"Jessore Sadar"],
            ["district_id" =>24, "name"=>"Jhikargacha"],
            ["district_id" =>24, "name"=>"Keshabpur"],
            ["district_id" =>24, "name"=>"Manirampur"],
            ["district_id" =>24, "name"=>"Sharsha"],
            ["district_id" =>25, "name"=>"Jhalakati Sadar"],
            ["district_id" =>25, "name"=>"Kanthalia"],
            ["district_id" =>25, "name"=>"Nalchiti"],
            ["district_id" =>25, "name"=>"Rajapur"],
            ["district_id" =>26, "name"=>"Harinakundu"],
            ["district_id" =>26, "name"=>"Jhenaidah Sadar"],
            ["district_id" =>26, "name"=>"Kaliganj"],
            ["district_id" =>26, "name"=>"Kotchandpur"],
            ["district_id" =>26, "name"=>"Maheshpur"],
            ["district_id" =>26, "name"=>"Shailkupa"],
            ["district_id" =>27, "name"=>"Dighinala"],
            ["district_id" =>27, "name"=>"Khagrachhari Sadar"],
            ["district_id" =>27, "name"=>"Lakshmichhari"],
            ["district_id" =>27, "name"=>"Mahalchhari"],
            ["district_id" =>27, "name"=>"Manikchhari"],
            ["district_id" =>27, "name"=>"Matiranga"],
            ["district_id" =>27, "name"=>"Panchhari"],
            ["district_id" =>27, "name"=>"Ramgarh"],
            ["district_id" =>28, "name"=>"Batiaghata"],
            ["district_id" =>28, "name"=>"Dacope"],
            ["district_id" =>28, "name"=>"Daulatpur"],
            ["district_id" =>28, "name"=>"Dighalia"],
            ["district_id" =>28, "name"=>"Dumuria"],
            ["district_id" =>28, "name"=>"Khalishpur"],
            ["district_id" =>28, "name"=>"Khan Jahan Ali"],
            ["district_id" =>28, "name"=>"Khulna Sadar"],
            ["district_id" =>28, "name"=>"Koyra"],
            ["district_id" =>28, "name"=>"Paikgachha"],
            ["district_id" =>28, "name"=>"Phultala"],
            ["district_id" =>28, "name"=>"Rupsa"],
            ["district_id" =>28, "name"=>"Sonadanga"],
            ["district_id" =>28, "name"=>"Terokhada"],
            ["district_id" =>29, "name"=>"Austagram"],
            ["district_id" =>29, "name"=>"Bajitpur"],
            ["district_id" =>29, "name"=>"Bhairab"],
            ["district_id" =>29, "name"=>"Hossainpur"],
            ["district_id" =>29, "name"=>"Itna"],
            ["district_id" =>29, "name"=>"Karimganj"],
            ["district_id" =>29, "name"=>"Katiadi"],
            ["district_id" =>29, "name"=>"Kishoreganj Sadar"],
            ["district_id" =>29, "name"=>"Kuliarchar"],
            ["district_id" =>29, "name"=>"Mithamain"],
            ["district_id" =>29, "name"=>"Nikli"],
            ["district_id" =>29, "name"=>"Pakundia"],
            ["district_id" =>29, "name"=>"Tarail"],
            ["district_id" =>30, "name"=>"Bhurungamari"],
            ["district_id" =>30, "name"=>"Char Rajibpur"],
            ["district_id" =>30, "name"=>"Chilmari"],
            ["district_id" =>30, "name"=>"Kurigram Sadar"],
            ["district_id" =>30, "name"=>"Nageshwari"],
            ["district_id" =>30, "name"=>"Phulbari"],
            ["district_id" =>30, "name"=>"Rajarhat"],
            ["district_id" =>30, "name"=>"Raumari"],
            ["district_id" =>30, "name"=>"Ulipur"],
            ["district_id" =>31, "name"=>"Bheramara"],
            ["district_id" =>31, "name"=>"Daulatpur"],
            ["district_id" =>31, "name"=>"Khoksa"],
            ["district_id" =>31, "name"=>"Kumarkhali"],
            ["district_id" =>31, "name"=>"Kushtia Sadar"],
            ["district_id" =>31, "name"=>"Mirpur"],
            ["district_id" =>32, "name"=>"Kamalnagar"],
            ["district_id" =>32, "name"=>"Lakshmipur Sadar"],
            ["district_id" =>32, "name"=>"Raipur"],
            ["district_id" =>32, "name"=>"Ramganj"],
            ["district_id" =>32, "name"=>"Ramgati"],
            ["district_id" =>33, "name"=>"Aditmari"],
            ["district_id" =>33, "name"=>"Hatibandha"],
            ["district_id" =>33, "name"=>"Kaliganj"],
            ["district_id" =>33, "name"=>"Lalmonirhat Sadar"],
            ["district_id" =>33, "name"=>"Patgram"],
            ["district_id" =>34, "name"=>"Kalkini"],
            ["district_id" =>34, "name"=>"Madaripur Sadar"],
            ["district_id" =>34, "name"=>"Rajoir"],
            ["district_id" =>34, "name"=>"Shibchar"],
            ["district_id" =>35, "name"=>"Magura Sadar"],
            ["district_id" =>35, "name"=>"Mohammadpur"],
            ["district_id" =>35, "name"=>"Shalikha"],
            ["district_id" =>35, "name"=>"Sreepur"],
            ["district_id" =>36, "name"=>"Daulatpur"],
            ["district_id" =>36, "name"=>"Ghior"],
            ["district_id" =>36, "name"=>"Harirampur"],
            ["district_id" =>36, "name"=>"Manikganj Sadar"],
            ["district_id" =>36, "name"=>"Saturia"],
            ["district_id" =>36, "name"=>"Shibalaya"],
            ["district_id" =>36, "name"=>"Singair"],
            ["district_id" =>37, "name"=>"Gangni"],
            ["district_id" =>37, "name"=>"Meherpur Sadar"],
            ["district_id" =>37, "name"=>"Mujibnagar"],
            ["district_id" =>38, "name"=>"Barlekha"],
            ["district_id" =>38, "name"=>"Juri"],
            ["district_id" =>38, "name"=>"Kamalganj"],
            ["district_id" =>38, "name"=>"Kulaura"],
            ["district_id" =>38, "name"=>"Maulvi Bazar Sadar"],
            ["district_id" =>38, "name"=>"Rajnagar"],
            ["district_id" =>38, "name"=>"Sreemangal"],
            ["district_id" =>39, "name"=>"Gazaria"],
            ["district_id" =>39, "name"=>"Lohajang"],
            ["district_id" =>39, "name"=>"Munshiganj Sadar"],
            ["district_id" =>39, "name"=>"Sirajdikhan"],
            ["district_id" =>39, "name"=>"Sreenagar"],
            ["district_id" =>39, "name"=>"Tongibari"],
            ["district_id" =>40, "name"=>"Bhaluka"],
            ["district_id" =>40, "name"=>"Dhobaura"],
            ["district_id" =>40, "name"=>"Fulbaria"],
            ["district_id" =>40, "name"=>"Gaffargaon"],
            ["district_id" =>40, "name"=>"Gouripur"],
            ["district_id" =>40, "name"=>"Haluaghat"],
            ["district_id" =>40, "name"=>"Ishwarganj"],
            ["district_id" =>40, "name"=>"Muktagachha"],
            ["district_id" =>40, "name"=>"Mymensingh Sadar"],
            ["district_id" =>40, "name"=>"Nandail"],
            ["district_id" =>40, "name"=>"Phulpur"],
            ["district_id" =>40, "name"=>"Trishal"],
            ["district_id" =>41, "name"=>"Atrai"],
            ["district_id" =>41, "name"=>"Badalgachhi"],
            ["district_id" =>41, "name"=>"Dhamoirhat"],
            ["district_id" =>41, "name"=>"Mahadebpur"],
            ["district_id" =>41, "name"=>"Manda"],
            ["district_id" =>41, "name"=>"Naogaon Sadar"],
            ["district_id" =>41, "name"=>"Niamatpur"],
            ["district_id" =>41, "name"=>"Patnitala"],
            ["district_id" =>41, "name"=>"Porsha"],
            ["district_id" =>41, "name"=>"Raninagar"],
            ["district_id" =>41, "name"=>"Sapahar"],
            ["district_id" =>42, "name"=>"Kalia"],
            ["district_id" =>42, "name"=>"Lohagara"],
            ["district_id" =>42, "name"=>"Narail Sadar"],
            ["district_id" =>43, "name"=>"Araihazar"],
            ["district_id" =>43, "name"=>"Bandar"],
            ["district_id" =>43, "name"=>"Narayanganj Sadar"],
            ["district_id" =>43, "name"=>"Rupganj"],
            ["district_id" =>43, "name"=>"Sonargaon"],
            ["district_id" =>44, "name"=>"Belabo"],
            ["district_id" =>44, "name"=>"Manohardi"],
            ["district_id" =>44, "name"=>"Narsingdi Sadar"],
            ["district_id" =>44, "name"=>"Palash"],
            ["district_id" =>44, "name"=>"Raipura"],
            ["district_id" =>44, "name"=>"Shibpur"],
            ["district_id" =>45, "name"=>"Bagatipara"],
            ["district_id" =>45, "name"=>"Baraigram"],
            ["district_id" =>45, "name"=>"Gurudaspur"],
            ["district_id" =>45, "name"=>"Lalpur"],
            ["district_id" =>45, "name"=>"Natore Sadar"],
            ["district_id" =>45, "name"=>"Singra"],
            ["district_id" =>46, "name"=>"Atpara"],
            ["district_id" =>46, "name"=>"Barhatta"],
            ["district_id" =>46, "name"=>"Durgapur"],
            ["district_id" =>46, "name"=>"almakanda"],
            ["district_id" =>46, "name"=>"Kendua"],
            ["district_id" =>46, "name"=>"Khaliajuri"],
            ["district_id" =>46, "name"=>"Madan"],
            ["district_id" =>46, "name"=>"Mohanganj"],
            ["district_id" =>46, "name"=>"Netrakona Sadar"],
            ["district_id" =>46, "name"=>"Purbadhala"],
            ["district_id" =>47, "name"=>"Dimla"],
            ["district_id" =>47, "name"=>"Domar"],
            ["district_id" =>47, "name"=>"Jaldhaka"],
            ["district_id" =>47, "name"=>"Kishoreganj"],
            ["district_id" =>47, "name"=>"Nilphamari Sadar"],
            ["district_id" =>47, "name"=>"Saidpur"],
            ["district_id" =>48, "name"=>"Begumganj"],
            ["district_id" =>48, "name"=>"Chatkhil"],
            ["district_id" =>48, "name"=>"Companiganj"],
            ["district_id" =>48, "name"=>"Hatiya"],
            ["district_id" =>48, "name"=>"Kabirhat"],
            ["district_id" =>48, "name"=>"Noakhali Sadar"],
            ["district_id" =>48, "name"=>"Senbagh"],
            ["district_id" =>48, "name"=>"Sonaimuri"],
            ["district_id" =>48, "name"=>"Subarnachar"],
            ["district_id" =>49, "name"=>"Atgharia"],
            ["district_id" =>49, "name"=>"Bera"],
            ["district_id" =>49, "name"=>"Bhangura"],
            ["district_id" =>49, "name"=>"Chatmohar"],
            ["district_id" =>49, "name"=>"Faridpur"],
            ["district_id" =>49, "name"=>"Ishwardi"],
            ["district_id" =>49, "name"=>"Pabna Sadar"],
            ["district_id" =>49, "name"=>"Santhia"],
            ["district_id" =>49, "name"=>"Sujanagar"],
            ["district_id" =>50, "name"=>"Atwari"],
            ["district_id" =>50, "name"=>"Boda"],
            ["district_id" =>50, "name"=>"Debiganj"],
            ["district_id" =>50, "name"=>"Panchagarh Sadar"],
            ["district_id" =>50, "name"=>"Tetulia"],
            ["district_id" =>51, "name"=>"Bauphal"],
            ["district_id" =>51, "name"=>"Dashmina"],
            ["district_id" =>51, "name"=>"Dumki"],
            ["district_id" =>51, "name"=>"Galachipa"],
            ["district_id" =>51, "name"=>"Kalapara"],
            ["district_id" =>51, "name"=>"Mirzaganj"],
            ["district_id" =>51, "name"=>"Patuakhali Sadar"],
            ["district_id" =>52, "name"=>"Bhandaria"],
            ["district_id" =>52, "name"=>"Kawkhali"],
            ["district_id" =>52, "name"=>"Mathbaria"],
            ["district_id" =>52, "name"=>"Nazirpur"],
            ["district_id" =>52, "name"=>"Nesarabad"],
            ["district_id" =>52, "name"=>"Pirojpur Sadar"],
            ["district_id" =>52, "name"=>"Zianagar"],
            ["district_id" =>53, "name"=>"Baliakandi"],
            ["district_id" =>53, "name"=>"Goalanda"],
            ["district_id" =>53, "name"=>"Kalukhali"],
            ["district_id" =>53, "name"=>"Pangsha"],
            ["district_id" =>53, "name"=>"Rajbari Sadar"],
            ["district_id" =>54, "name"=>"Bagha"],
            ["district_id" =>54, "name"=>"Baghmara"],
            ["district_id" =>54, "name"=>"Boalia"],
            ["district_id" =>54, "name"=>"Charghat"],
            ["district_id" =>54, "name"=>"Durgapur"],
            ["district_id" =>54, "name"=>"Godagari"],
            ["district_id" =>54, "name"=>"Matihar"],
            ["district_id" =>54, "name"=>"Mohanpur"],
            ["district_id" =>54, "name"=>"Paba"],
            ["district_id" =>54, "name"=>"Puthia"],
            ["district_id" =>54, "name"=>"Rajpara"],
            ["district_id" =>54, "name"=>"Shah Makhdam"],
            ["district_id" =>54, "name"=>"Tanore"],
            ["district_id" =>55, "name"=>"Baghaichhari"],
            ["district_id" =>55, "name"=>"Barkal"],
            ["district_id" =>55, "name"=>"Belaichhari"],
            ["district_id" =>55, "name"=>"Juraichhari"],
            ["district_id" =>55, "name"=>"Kaptai"],
            ["district_id" =>55, "name"=>"Kawkhali"],
            ["district_id" =>55, "name"=>"Langadu"],
            ["district_id" =>55, "name"=>"Naniarchar"],
            ["district_id" =>55, "name"=>"Rajasthali"],
            ["district_id" =>55, "name"=>"Rangamati Sadar"],
            ["district_id" =>56, "name"=>"Badarganj"],
            ["district_id" =>56, "name"=>"Gangachara"],
            ["district_id" =>56, "name"=>"Kaunia"],
            ["district_id" =>56, "name"=>"Mithapukur"],
            ["district_id" =>56, "name"=>"Pirgachha"],
            ["district_id" =>56, "name"=>"Pirganj"],
            ["district_id" =>56, "name"=>"Rangpur Sadar"],
            ["district_id" =>56, "name"=>"Taraganj"],
            ["district_id" =>57, "name"=>"Assasuni"],
            ["district_id" =>57, "name"=>"Debhata"],
            ["district_id" =>57, "name"=>"Kalaroa"],
            ["district_id" =>57, "name"=>"Kaliganj"],
            ["district_id" =>57, "name"=>"Satkhira Sadar"],
            ["district_id" =>57, "name"=>"Shyamnagar"],
            ["district_id" =>57, "name"=>"Tala"],
            ["district_id" =>58, "name"=>"Bhedarganj"],
            ["district_id" =>58, "name"=>"Damudya"],
            ["district_id" =>58, "name"=>"Gosairhat"],
            ["district_id" =>58, "name"=>"Naria"],
            ["district_id" =>58, "name"=>"Shariatpur Sadar"],
            ["district_id" =>58, "name"=>"Zajira"],
            ["district_id" =>59, "name"=>"Jhenaigati"],
            ["district_id" =>59, "name"=>"Nakla"],
            ["district_id" =>59, "name"=>"Nalitabari"],
            ["district_id" =>59, "name"=>"Sherpur Sadar"],
            ["district_id" =>59, "name"=>"Sreebardi"],
            ["district_id" =>60, "name"=>"Belkuchi"],
            ["district_id" =>60, "name"=>"Chauhali"],
            ["district_id" =>60, "name"=>"Kamarkhanda"],
            ["district_id" =>60, "name"=>"Kazipur"],
            ["district_id" =>60, "name"=>"Raiganj"],
            ["district_id" =>60, "name"=>"Shahjadpur"],
            ["district_id" =>60, "name"=>"Sirajganj Sadar"],
            ["district_id" =>60, "name"=>"Tarash"],
            ["district_id" =>60, "name"=>"Ullahpara"],
            ["district_id" =>61, "name"=>"Bishwambarpur"],
            ["district_id" =>61, "name"=>"Chhatak"],
            ["district_id" =>61, "name"=>"Dakshin Sunamganj"],
            ["district_id" =>61, "name"=>"Derai"],
            ["district_id" =>61, "name"=>"Dharamapasha"],
            ["district_id" =>61, "name"=>"Dowarabazar"],
            ["district_id" =>61, "name"=>"Jagannathpur"],
            ["district_id" =>61, "name"=>"Jamalganj"],
            ["district_id" =>61, "name"=>"Shalla [Sulla]"],
            ["district_id" =>61, "name"=>"Sunamganj Sadar"],
            ["district_id" =>61, "name"=>"Tahirpur"],
            ["district_id" =>62, "name"=>"Balaganj"],
            ["district_id" =>62, "name"=>"Beani Bazar"],
            ["district_id" =>62, "name"=>"Bishwanath"],
            ["district_id" =>62, "name"=>"Companiganj"],
            ["district_id" =>62, "name"=>"Dakshin Surma"],
            ["district_id" =>62, "name"=>"Fenchuganj"],
            ["district_id" =>62, "name"=>"Golapganj"],
            ["district_id" =>62, "name"=>"Gowainghat"],
            ["district_id" =>62, "name"=>"Jaintiapur"],
            ["district_id" =>62, "name"=>"Kanaighat"],
            ["district_id" =>62, "name"=>"Sylhet Sadar"],
            ["district_id" =>62, "name"=>"Zakiganj"],
            ["district_id" =>63, "name"=>"Basail"],
            ["district_id" =>63, "name"=>"Bhuapur"],
            ["district_id" =>63, "name"=>"Delduar"],
            ["district_id" =>63, "name"=>"Dhanbari"],
            ["district_id" =>63, "name"=>"Ghatail"],
            ["district_id" =>63, "name"=>"Gopalpur"],
            ["district_id" =>63, "name"=>"Kalihati"],
            ["district_id" =>63, "name"=>"Madhupur"],
            ["district_id" =>63, "name"=>"Mirzapur"],
            ["district_id" =>63, "name"=>"Nagarpur"],
            ["district_id" =>63, "name"=>"Sakhipur"],
            ["district_id" =>63, "name"=>"Tangail Sadar"],
            ["district_id" =>64, "name"=>"Baliadangi"],
            ["district_id" =>64, "name"=>"Haripur"],
            ["district_id" =>64, "name"=>"Pirganj"],
            ["district_id" =>64, "name"=>"Ranisankail"],
            ["district_id" =>64, "name"=>"Thakurgaon Sadar"],
        ];
        foreach($thanas as $thana){
            \App\Models\Thana::create($thana);
        }
    }
}
