
<style>
   .pt {
     width: 40px;
    height: 40px;
    text-align: center;
    font-size: 21px;
    font-weight: bold;
   }
</style>
<?php
error_reporting(0);
//aka
$Elementos = array(
  array(
    array("H",5),"","","","","","","","","","","","","","","","",array("HE",7)
  ),
  array(
    array("Li",1 ),array("Be",2),"","","","","","","","","","",array("B",4),array("C",5),array("N",5),
     array("O",5),array("F",6),array("NE",7)
  ),
  array(
    array("Na",1 ),array("Mg",2),"","","","","","","","","","",array("AL",1),array("Si",4),array("P",5),
     array("S",5),array("CI",6),array("Ar",7)
  ),
  array(
    array("K",1 ),array("Ca",2),array("Sc",3),array("Ti",3),array("V",3),array("Cr",3),array("Mn",3),
    array("Fe",3),array("Co",3),array("Ni",3),array("Cu",3),array("Zn",3),array("Ga",6),array("GE",4),
    array("As",4),array("Se",5),array("Br",6),array("Kr",7)
  ),
  array(
    array("Rb",1 ),array("Sr",2),array("Y",3),array("Zr",3),array("Nb",3),array("Mo",3),array("Tc",3),
    array("Ru",3),array("Rh",3),array("Pd",3),array("Ag",3),array("Cd",3),array("In",6),array("Sn",6),
    array("Sb",4),array("Te",4),array("I",6),array("Xe",7)
  ),
   array(
    array("Cs",1 ),array("Ba",2),array(".",9),array("Hf",3),array("Ta",3),array("W",3),array("Re",3),
    array("Os",3),array("Ir",3),array("Pt",3),array("Au",3),array("Hg",3),array("Ti",6),array("Pb",6),
    array("Bi",6),array("Po",4),array("At",6),array("Rn",7)
  ),
   array(
    array("Fr",1 ),array("Ra",2),array(".",10),array("Rf",3),array("Db",3),array("Sg",3),array("Bh",3),
    array("Hs",3),array("Mt",3),array("Ds",3),array("Rg",3),array("Cn",3),array("Uut",6),array("FI",6),
    array("Uup",6),array("Lv",6),array("Uus",6),array("Uuo",7)
  ),
   "","","","","","","","","","","","","","","","","","","","","","",
   array(
    "",array("Ra",8),array(".",8),array("Rf",8),array("Db",8),array("Sg",8),array("Bh",8),
    array("Hs",8),array("Mt",8),array("Ds",8),array("Rg",8),array("Cn",8),array("Uut",8),array("FI",8),
    array("Uup",8),array("Lv",8),"",""
  ),
   array(
    "",array("Ra",9),array(".",9),array("Rf",9),array("Db",9),array("Sg",9),array("Bh",9),
    array("Hs",9),array("Mt",9),array("Ds",9),array("Rg",9),array("Cn",9),array("Uut",9),array("FI",9),
    array("Uup",9),array("Lv",9),"",""
  )
);
echo '<table  style="width:100%">';
foreach($Elementos as $var1){
  echo "<tr>";
  foreach($var1 as $var2){
    if(empty($var2)){
     echo "<td class='pt'>.</td>";
    }else{
      foreach($var2 as $var3){
         if(is_string($var3)){
           if($var2[1]==1){
              echo "<td class='pt' style='background: #ea6171;'>".$var3."</td>";
           }else if($var2[1]==2){
              echo "<td class='pt' style='background: #f79e1f;'>".$var3."</td>";
           }else if($var2[1]==3){
               echo "<td class='pt' style='background: #fadb4b;'>".$var3."</td>";
           }else if($var2[1]==4){
               echo "<td class='pt' style='background: #ebeb51;'>".$var3."</td>";
           }else if($var2[1]==5){
               echo "<td class='pt' style='background: #a6d5ac;'>".$var3."</td>";
           }else if($var2[1]==6){
               echo "<td class='pt' style='background: #72b8d9;'>".$var3."</td>";
           }else if($var2[1]==7){
               echo "<td class='pt' style='background: #6cc8d2;'>".$var3."</td>";
           }else if($var2[1]==8){
               echo "<td class='pt' style='background: #9cacd9;'>".$var3."</td>";
           }else if($var2[1]==9){
               echo "<td class='pt' style='background: #b26ea0;'>".$var3."</td>";
           }else if($var2[1]==10){
               echo "<td class='pt' style='background: #d75ea5;'>".$var3."</td>";
           }
         }
      }
    }
  }
  echo "</tr>";
}
echo '</table>';
?>