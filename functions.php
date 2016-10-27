<?php 

  function statutToHtmlClass($wstatut)
  {
    if (isset($wstatut)) {
        switch ($wstatut){
            case 0: return "unavailable";
            case 1: return "available";
            case 2: return "booked";
            default: return "unavailable";
        }
    } 
    else {
      return "unavailable";
    }
  }
  
  function codeJourToLibJour($pcodeJour)
  {
    if (isset($pcodeJour)) {
        switch ($pcodeJour){
            case 1: return " Lundi";
            case 2: return " Mardi";
            case 3: return " Mercredi";
            case 4: return " Jeudi";
            case 5: return " Vendredi";
            default: return " Jour ?";
        }
    } 
    else {
      return " Jour ?";
    }
  }
  
  function creneauToHTML($pstatut,$plib,$pcodejour,$pcodecreneau)
  {
    if (isset($pstatut)) {
        switch ($pstatut){
            case 0: return "<td class='unavailable'>". $plib . "</td>"; 
            case 1: return 
                "<td class='available'>".
                    "<button type='button' class='btn btn-default btn-sm btn-success' id='".codeJourToLibJour($pcodejour)." à ".$plib."' style='width:100%;' onClick='reply_click(this.id)' data-toggle='modal' data-target='#myModal'>".
                        $plib .
                    "</button>".
                "</td>";
            case 2: return "<td class='booked'>". $plib . "</td>";
            default: return "<td class='unavailable'>". $plib . "</td>";
        }
    }
    else {
      return "<td class='unavailable'>". $plib ."</td>";
    }
  }