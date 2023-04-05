<?php
class BMI
{
    public $beratBadan, $tinggiBadan;

    public function hitungBMI()
    {
        return $this->beratBadan / ($this->tinggiBadan ** 2);
    }

    public function cekStatusBeratBadan()
    {
        if($this->hitungBMI() < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($this->hitungBMI() >= 18.5 && $this->hitungBMI() <= 24.9){
            return "Normal";
        } elseif ($this->hitungBMI() >= 25 && $this->hitungBMI() <= 29){
            return "Kelebihan berat badan";
        } elseif ($this->hitungBMI() >= 30){
            return "Obesitas";
        }
    }
}
$objekBMI = new BMI;
$objekBMI->beratBadan = 66;
$objekBMI->tinggiBadan = 1.7;
echo round($objekBMI->hitungBMI());
echo "<br>";
echo $objekBMI->cekStatusBeratBadan();