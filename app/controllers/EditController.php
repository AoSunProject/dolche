<?php
session_start();
class EditController extends Controller
{
public function action_index(){
    $v=new View("edit");
    $v->title="Електронний реєстр хворих сахарним діабетом";

if(isset($_POST['id_k'])){

    $v->karta=MainModel::Instance()->getkarta1($_POST['id_k']);
    $v->hist=MainModel::Instance()->gethist($_POST['id_k']);
$v->post=$_POST;
}
    $c=new EditController();
    $v->user=MainModel::Instance()->getuser1();

     $v->viewTemplate();
     $this->responce($v);
}


    public function action_save(){
$arr=$_POST;
       PacientModel::Instance()->save($this->post("id"),
           $this->apostr($this->post("name")), $this->apostr($this->post("fname")),
           $this->post("sname"), $this->apostr($this->post("ychas")), $this->post("nomIss"), $this->post("sex")
           , $this->post("datB"), $this->apostr($this->post("city")), $this->apostr($this->post("rajon")),
           $this->apostr($this->post("work")), $this->apostr($this->post("week")),
           $this->apostr($this->post("fnameO")), $this->apostr($this->post("nameO")),
           $this->apostr($this->post("snameO")), $this->apostr($this->post("ychasOtez")),
           $this->apostr($this->post("nomIssO")), $this->apostr($this->post("datBOtez")),
           $this->apostr($this->post("oblOtez")), $this->apostr($this->post("cityOtez")),
           $this->apostr($this->post("lechOtez")), $this->apostr($this->post("lechOtezKak")),
           $this->apostr($this->post("fnameM")), $this->apostr($this->post("nameM")),
           $this->apostr($this->post("snameM")), $this->apostr($this->post("ychasM")),
           $this->apostr($this->post("nomIssM")), $this->post("datBM"),
           $this->apostr($this->post("oblM")), $this->apostr($this->post("cityM")),
           $this->apostr($this->post("lechM")), $this->apostr($this->post("lechMKak")),
           $this->apostr($this->post("lechBS")), $this->apostr($this->post("lechBSKak")),
           $this->apostr($this->post("golodM")), $this->apostr($this->post("golodO")),
           $this->apostr($this->post("golodSister")), $this->apostr($this->post("death1")),
           $this->apostr($this->post("death2")), $this->apostr($this->post("ves")),
           $this->apostr($this->post("rost")), $this->apostr($this->post("tal")),
           $this->apostr($this->post("bed")), $this->apostr($this->post("index")),
           $this->apostr($this->post("art")), $this->apostr($this->post("smouk")),
           $this->apostr($this->post("smoukTime")), $this->apostr($this->post("smokeKol")),
           $this->apostr($this->post("alkogol")), $this->apostr($this->post("typeDiab")),
           $this->apostr($this->post("yearD")), $this->apostr($this->post("vekD")),
           $this->apostr($this->post("longD")), $this->apostr($this->post("inf")),
           $this->apostr($this->post("aut")), $this->apostr($this->post("porok")),
           $this->apostr($this->post("endoc")), $this->apostr($this->post("patol")),
           $this->apostr($this->post("DGR")), $this->apostr($this->post("infarkt")),
           $this->apostr($this->post("kolinf")), $this->apostr($this->post("datInf")),
           $this->apostr($this->post("insult")), $this->apostr($this->post("kolins")),
           $this->apostr($this->post("datIns")), $this->apostr($this->post("glaz")),
           $this->apostr($this->post("diabDiab")), $this->apostr($this->post("diabNep")),
           $this->apostr($this->post("diabPrep")), $this->apostr($this->post("diabPrep2")),
           $this->apostr($this->post("Slep")), $this->apostr($this->post("Lazer")),
           $this->apostr($this->post("Katar")), $this->apostr($this->post("Mal")),
           $this->apostr($this->post("Glauk")), $this->apostr($this->post("LechDR")),
           $this->apostr($this->post("datDiab")), $this->apostr($this->post("datNep")),
           $this->apostr($this->post("datPrep")), $this->apostr($this->post("datPrep2")),
           $this->apostr($this->post("datSlep")), $this->apostr($this->post("datLazer")),
           $this->apostr($this->post("datKatar")), $this->apostr($this->post("datMal")),
           $this->apostr($this->post("datGlauk")), $this->apostr($this->post("OST")),
           $this->apostr($this->post("pochki")), $this->apostr($this->post("diabNefro")),
           $this->apostr($this->post("datNefro")), $this->apostr($this->post("diabPochNEd")),
           $this->apostr($this->post("diabPochSt")), $this->apostr($this->post("datPochSt")),
           $this->apostr($this->post("diabDializ")), $this->apostr($this->post("datDializ")),
           $this->apostr($this->post("LechPoch")), $this->apostr($this->post("datPoli")),
           $this->apostr($this->post("Chyvs")), $this->apostr($this->post("NarVibr")),
           $this->apostr($this->post("Reflex")), $this->apostr($this->post("Jazv")),
           $this->apostr($this->post("GnojJazv")), $this->apostr($this->post("PylsStopa")),
           $this->apostr($this->post("Shynt")), $this->apostr($this->post("Hrom")),
           $this->apostr($this->post("Ampyt")), $this->apostr($this->post("kakAmput1")),
           $this->post("datAmput"), $this->post("datLab"),
           $this->apostr($this->post("Natosh")), $this->apostr($this->post("Pisha")),
           $this->apostr($this->post("nmol")), $this->apostr($this->post("Datnmol")),
           $this->apostr($this->post("vidsot")), $this->apostr($this->post("gemogl")),

           $this->post("Datgemogl"), $this->post("Datkrovi"),
           $this->apostr($this->post("eritr")), $this->apostr($this->post("gemogl2")),
           $this->apostr($this->post("lekoz")), $this->apostr($this->post("nejtrof")),
           $this->apostr($this->post("monozit")), $this->apostr($this->post("limfoz")),
           $this->apostr($this->post("tromb")), $this->apostr($this->post("mpv")),
           $this->post("dryg"), $this->post("kreat"),
           $this->apostr($this->post("datkreat")), $this->apostr($this->post("kreatMocha")),
           $this->apostr($this->post("datMocha")), $this->apostr($this->post("klirkreat")),
           $this->apostr($this->post("Protein")), $this->apostr($this->post("posIzm")),
           $this->post("datProtein"), $this->post("Mikroalmb"),
           $this->apostr($this->post("kakMikro")), $this->apostr($this->post("datMikro")),
           $this->apostr($this->post("Lipiddat")), $this->apostr($this->post("Holest")),
           $this->apostr($this->post("LipidVis")), $this->apostr($this->post("LipidNiz")),
           $this->apostr($this->post("Trigliz")), $this->apostr($this->post("Asparta")),
           $this->post("Alanin"), $this->post("BelocS"),

           $this->apostr($this->post("PeptidPmol")), $this->apostr($this->post("PeptidNmol")),
           $this->apostr($this->post("S_Pep")), $this->apostr($this->post("Sivor")),

           $this->post("Plazma"), $this->post("DNK"),
           $this->apostr($this->post("PHK")), $this->apostr($this->post("Sluna")),
           $this->apostr($this->post("Biopat")), $this->apostr($this->post("PrimZAbKrov")),
           $this->apostr($this->post("LechDIabet")), $this->apostr($this->post("LechInsul")),
           $this->apostr($this->post("datLechDiab")), $this->apostr($this->post("diabLechTab")),
           $this->post("LechGiper"), $this->post("LechLipidGiper"),
           $this->apostr($this->post("Onko")), $this->apostr($this->post("VidOnko")),
           $this->apostr($this->post("dateOnko")), $this->apostr($this->post("OnkoLek")),
           $this->apostr($this->post("hronSerd")),
           $this->apostr($this->post("bearn")), $this->apostr($this->post("vesR"))
           , $this->apostr($this->post("art1")), $this->apostr($this->post("datStad")),
           $this->apostr($this->post("diabAngin")),
           $this->apostr($this->post("datAngin")),
           $this->apostr($this->post("kakAngio")),
           $this->apostr($this->post("diabNejr")),
           $this->apostr($this->post("datNejr")),
           $this->apostr($this->post("diabStopp")),
           $this->apostr($this->post("Bol")),
           $this->apostr($this->post("Boltwo")),
           $this->apostr($this->post("BolInten")),
           $this->apostr($this->post("Bolkak")),
           $this->apostr($this->post("Preparat")),
           $this->apostr($this->post("PreparatKakie")),
           $this->apostr($this->post("datStopObsl")),
           $this->apostr($this->post("SnizhT")),
           $this->apostr($this->post("golodSem")),
           $this->apostr($this->post("datPochNEd")),$arr,$this->apostr($this->post("phone")),
           $this->apostr($this->post("email")),
           $this->post("vagaPN"),
           $this->apostr($this->post("gen")),
           $this->post("systisk"),
           $this->apostr($this->post("atGad")),
           $this->post("atGaddat"),
           $this->post("dieta"),
           $this->post("disttisk")

            );
$_SESSION['find']=$_POST['post1'];
            $this->redirect(Url::getAction("programm",'findR'));
        }

}