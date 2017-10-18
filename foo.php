<center style="margin-top: 150px;">

      <h1>KONVERSI USD TO IDR</h1>
      <form name="KONVERSI USD TO IDR" method="POST">
      <input type="number" name="input" style="padding: 10px;width: 25%;">
      <br/><br/>
      <button type="submit" name="proses" style="padding: 10px;width: 25%;">Konversi</button>
      </form>

      <?php

      $json = file_get_contents("http://api.fixer.io/latest?base=USD&symbols=IDR");
      $obj  = json_decode($json, TRUE);

      if (isset($_POST['proses']))
      {    
        $Data = $_POST['input'];

        if (!$Data)
        {
          echo "<br/><hr width='25%'/><br/><br/>";
          echo "<center>";
          echo "Data masih kosong";
          echo "</center>";
          echo "<br/><hr width='25%'/><br/>";
        }
        else
        {
          $result = $Data*$obj['rates']['IDR'];
          echo "<br/><hr width='25%'/><br/><br/>";
          echo "<center>";
          echo $Data." USD sama dengan ".$result." IDR";    
          echo "</center>";
          echo "<br/><hr width='25%'/><br/>";
        }
      }
      
      ?>
      
</center>