<?php
    $accounts = array();
    $file = "accounts.csv";
    $fileHandler = fopen($file, "r");
    
    while(!feof($fileHandler)){
        $line = fgetcsv($fileHandler);
        if($line !== FALSE){
            $accounts[] = $line;
        }
    }
    
    fclose($fileHandler);
    var_dump($accounts);
?>
<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php
            foreach($accounts as $account){ ?>
            <tr>
                <?php 
                    foreach($account as $value){
                        echo "<td>$value</td>"; 
                    }  
                ?>
            </tr>
        <?php } ?>
    </tbody>
  </table>