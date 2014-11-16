<?php

class SETDB { 

  private static $db_host = 'db.ist.utl.pt';
  private static $db_name = 'g02480_settagus';
  private static $db_user = 'g02480_settagus';
  private static $db_pass = 'wiekieshei';

  private static $imagesPath = 'img/logoempresas/';
  private static $imagesChancesPath = 'gestaodeconteudos/img/oportunidades/';
  private static $imagesNewsPath = 'gestaodeconteudos/img/noticias/';
  private static $supportedImagesAsLogos = array('png', 'jpg', 'jpeg', 'gif', 'esp');
  private static $scheduleAllowedTypes = array('Apresentação Empresa' => 'Apresentação Empresa',
                                                'Coffee Break' => 'Coffee Break',
                                                'Almoço' => 'Almoço',
                                                'Orador' => 'Orador',
                                                'Workshop' => 'Workshop');

  public static function generateImageName($id) {
      return substr(hash("sha256", $id, false),0,15) . '.png';
  }

  // Retirado de http://www.davidgouveia.net/2010/06/algoritmo-para-validar-nif-numero-de-contribuinte/
  public static function isValidNif($nif){
    //Verificar se é um numero e se é composto exactamente por 9 digitos
    if(!is_numeric($nif) || strlen($nif) != 9) return false;
     
    $narray = str_split($nif);
     
    //verificar se o primeiro digito é valido. O primeiro digito indica o tipo de contribuinte.
    if($narray[0] != 1 && $narray[0] != 2  && $narray[0] != 5 && $narray[0] != 6 && $narray[0] != 8 && $narray[0] != 9)
            return false;
     
    $checkbit = $narray[0] * 9;
     
    for($i=2; $i <= 8; $i++){
            $checkbit += $nif[$i-1] * (10 - $i);
    }
     
    $checkbit = 11 - ($checkbit % 11);
     
    if($checkbit >= 10) $checkbit=0;
     
    if($nif[8] == $checkbit) return true;

    return false;
  }

  private $mysql_connection = null;

/**
 * Creates a connection to the mysql database
 */
  function __construct() {
    $this->mysql_connection = mysqli_connect(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);
    $this->mysql_connection->set_charset("utf8");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  } 

/**
 * For each row of the query the funcion passed as a parameter is executed.
 * @param  String $sqlquery          query to execute on the database
 * @param  function $functionToExecute function to execute on each row that if returns true its not called for more rows
 * @return void
 */
  public function forEachRowCall($sqlquery, $functionToExecute) {
    $news = mysqli_query($this->mysql_connection, $sqlquery);

    while($row = mysqli_fetch_array($news, MYSQLI_ASSOC)) {
      if($functionToExecute($row)) {
        break;
      }
    }
  }

/**
 * For each news execute the function passed as parameter
 * @param  boolean $carousel          if true calls the function only for carousel news, if false calls the function only for normal news
 * @param  function  $functionToExecute receives (title, description, imagePath) as parameter and its equal to the function received by forEachRowCall
 * @return void
 */
  public function forEachNewsCall($carousel, $functionToExecute) {
    $query = "SELECT * FROM " . ($carousel?"carousel_news":"noncarousel_news");
    $inst = $this;

    $this->forEachRowCall($query, function($row) use ($carousel, $functionToExecute, &$inst) {
      $imagePath = $inst->getImageFromPathWithId('gestaodeconteudos/img/noticias/', $row['id']);

      return $functionToExecute($row['titulo'], $row['descricao'], $imagePath);
    });
  }

  public function forEachCompanyCall($functionToExecute) {
    $query = "SELECT * FROM Empresa ORDER BY nome";

    $this->forEachRowCall($query, function($row) use ($functionToExecute) {
      return $functionToExecute($row['nif'], $row['nome'], $row['morada'], $row['localidade'], $row['cp'], $row['telefone'], $row['fax'], $row['email'], $row['site']);
    });
  }
  
    public function forEachContributionCall($functionToExecute) {
    $query = "SELECT * FROM Contribuicoes c, Empresa e  WHERE c.nif = e.nif ORDER BY ano, nome";

    $this->forEachRowCall($query, function($row) use ($functionToExecute) {
      return $functionToExecute($row['nif'], $row['nome'], $row['ano'], $row['montante']);
    });
  }

  public function forEachSpeakerCall($functionToExecute) {
    $query = "SELECT * FROM Oradores";
    $inst = $this;

    $this->forEachRowCall($query, function($row) use ($functionToExecute, &$inst) {
      $imagePath = $inst->getImageFromPathWithId('gestaodeconteudos/img/oradores/', $row['nome']);

      return $functionToExecute($row['nome'], $row['descricao'], $imagePath);
    });
  }

  public function forEachRoomCall($functionToExecute) {
    $query = "SELECT DISTINCT sala FROM Programa ORDER BY sala";

    $this->forEachRowCall($query, function($row) use ($functionToExecute) {
      return $functionToExecute($row['sala']);
    });
  }

  public function forEachChanceCall($functionToExecute) {
    $query = "SELECT * FROM chances ORDER BY id";

    $this->forEachRowCall($query, function($row) use ($functionToExecute) {
      return $functionToExecute($row['id'],$row['titulo'], $row['descricao'], $row['oportunidade']);
    });
  }

  public function forEachSlotOnDayCall($day, $functionToExecute, $showAll = false) {
    if($showAll) {
      $query = "SELECT * FROM Programa WHERE data='" . $day . "'";

      $this->forEachRowCall($query, function($row) use ($functionToExecute) {
        return $functionToExecute($row['nome'], $row['tipo'], $row['nomeorador'], $row['horainicio'], $row['horafim'], $row['sala'], $row['descricao']);
      });
    } else {
      $query = "SELECT * FROM schedule WHERE data='" . $day . "'";

      $this->forEachRowCall($query, function($row) use ($functionToExecute) {
        return $functionToExecute($row['nome'], $row['horainicio'], $row['horafim'], $row['descricao']);
      });
    }
  }

  public function setSlotNameOnDay($day, $room, $startTime, $endTime, $newName) {
    $query = "UPDATE Programa SET nome = '$newName'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotTypeOnDay($day, $room, $startTime, $endTime, $newType) {
    $query = "UPDATE Programa SET tipo = '$newType'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotSpeakerOnDay($day, $room, $startTime, $endTime, $newSpeaker) {
    $query = "UPDATE Programa SET nomeorador = '$newSpeaker'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotStartTimeOnDay($day, $room, $startTime, $endTime, $newStartTime) {
    $query = "UPDATE Programa SET horainicio = '$newStartTime'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotEndTimeOnDay($day, $room, $startTime, $endTime, $newEndTime) {
    $query = "UPDATE Programa SET horafim = '$newEndTime'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotRoomOnDay($day, $room, $startTime, $endTime, $newRoom) {
    $query = "UPDATE Programa SET sala = '$newRoom'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setSlotDescriptionOnDay($day, $room, $startTime, $endTime, $newDescription) {
    $query = "UPDATE Programa SET descricao = '$newDescription'
                              WHERE sala = '$room' AND
                                    data = '$day' AND
                                    horainicio = '$startTime' AND
                                    horafim = '$endTime'";
                                    
    mysqli_query($this->mysql_connection, $query);
  }

  public function setInfoOfCompanyWithNif($nif, $newNif, $nome, $morada, $localidade, $cp, $telefone, $fax, $email, $site, $logoFile) {
    $query = "UPDATE Empresa SET nif = '$newNif',
                                  morada = '$morada',
                                  nome = '$nome',
                                  localidade = '$localidade',
                                  cp = '$cp',
                                  telefone = '$telefone',
                                  fax = '$fax',
                                  email ='$email',
                                  site ='$site'
                                WHERE nif = '$nif'";

    if(!self::isValidNif($newNif)) throw new Exception('NIF inválido');

    if(isset($logoFile)) {
      if(!in_array(pathinfo($logoFile['name'], PATHINFO_EXTENSION), self::$supportedImagesAsLogos))
          throw new Exception('Only PNGs, JPEGs, and EPSs are supported');

      if(!move_uploaded_file($logoFile['tmp_name'], '../' . self::$imagesPath . self::generateImageName($newNif))) {
        if (!file_exists('../' . self::$imagesPath)) throw new Exception('The images folder doesn\'t exist');
        else if(!is_writable('../' . self::$imagesPath)) throw new Exception('The images folder doesn\'t have write permissions');
        else throw new Exception('Unknown error');
      }
    } elseif(strcmp($newNif, $nif)) rename('../' . $this->getLogoFileFromCompanyWithNif($nif), '../' . self::$imagesPath . self::generateImageName($newNif));
    mysqli_query($this->mysql_connection, $query);
  }

    public function registerNewCompany($newNif, $nome, $morada, $localidade, $cp, $telefone, $fax, $email, $site, $logoFile) {
    $query = "INSERT INTO Empresa VALUES('$newNif','$nome','$morada','$localidade','$cp','$telefone','$fax','$email','$site');";


    if(!self::isValidNif($newNif)) throw new Exception('NIF inválido');

    if(isset($logoFile)) {
      if(!in_array(pathinfo($logoFile['name'], PATHINFO_EXTENSION), self::$supportedImagesAsLogos))
          throw new Exception('Only PNGs, JPEGs, and EPSs are supported');

      if(!move_uploaded_file($logoFile['tmp_name'], '../' . self::$imagesPath . self::generateImageName($newNif))) {
        if (!file_exists('../' . self::$imagesPath)) throw new Exception('The images folder doesn\'t exist');
        else if(!is_writable('../' . self::$imagesPath)) throw new Exception('The images folder doesn\'t have write permissions');
        else throw new Exception('Unknown error');
      }
    }    mysqli_query($this->mysql_connection, $query);
  }

  function getScheduleAllowedTypes() {
    return self::$scheduleAllowedTypes;
  }

  public function getInfoFromCompanyWithNif($nif) {
    $query = "SELECT * FROM Empresa WHERE nif='" . $nif . "'";

    $return = array();

    $this->forEachRowCall($query, function($row) use (&$return) {
      $return = array('Nome' => $row['nome'], 
                      'Nif' => $row['nif'],
                      'Morada' => $row['morada'],
                      'Localidade' => $row['localidade'],
                      'Código-Postal' => $row['cp'],
                      'Telefone' => $row['telefone'],
                      'Fax' => $row['fax'],
                      'Email' => $row['email'],
                      'Site' => $row['site']
                      );
      return true;
    });

    return $return;
  }
    
public function getContributionFromCompanyWithNif($nif) {
    $query = "SELECT * FROM Contribuicoes c, Empresa e WHERE c.nif='" . $nif . "' and e.nif = c.nif";

    $return = null;

    $this->forEachRowCall($query, function($row) use (&$return) {
      $return = array('Nome' => $row['nome'],
                      'Ano' => $row['ano'],
                      'Montante' => $row['montante']
                      );
      return true;
    });

    return $return;
  }

  public function getInfoFromChanceWithId($id) {
    $query = "SELECT * FROM Oportunidades WHERE id='" . $id . "'";

    $return = null;

    $this->forEachRowCall($query, function($row) use (&$return) {
      $return = array('Title' => $row['titulo'],
                      'Description' => $row['oportunidade']
                      );
      return true;
    });

    return $return;
  }
    
  public function getImageFromPathWithId($path, $id) {
    $imagePath = $path . self::generateImageName($id);
    if(strcmp($path, self::$imagesChancesPath) != 0)
      return file_exists($imagePath)?$imagePath:"http://lorempixel.com/300/300/technics/" . rand(0, 10);
    else
       return file_exists($imagePath)?$imagePath:null;
  }

  public function getLogoFileFromCompanyWithNif($nif) {
    return $this->getImageFromPathWithId(self::$imagesPath, self::generateImageName($nif));
  }

  public function getImageFileFromChanceWithId($id) {
    return $this->getImageFromPathWithId(self::$imagesChancesPath, $id);
  }

  public function countNews($carousel) {
    $query = "SELECT COUNT(*) AS number FROM " . ($carousel?"carousel_news":"noncarousel_news");
    $result = null;

    $this->forEachRowCall($query, function($row) use (&$result) {
      $result = $row['number'];
      return true;
    });

    return $result;
  }

    public function RegisterContributionWithNif($nif, $ano, $montante){
     $query = "INSERT INTO Contribuicoes VALUES ('$nif', '$ano', '$montante')";

     if(!self::yearValidation($ano)) throw new Exception('Ano inválido');

     mysqli_query($this->mysql_connection, $query);
  }


  public static function yearValidation($year){

    if (!preg_match("/^(\d{4})$/", $year, $matches)) 
        return false;

    if ( $year > date('Y') ||  $year < 2003)
      return false;
    return true;
}

  function __destruct() {
       mysqli_close($this->mysql_connection);
  }
}

?>