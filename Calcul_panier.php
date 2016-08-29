 <?php

$panier = array(
array('nom'=>'sac', 'qte'=>4, 'prix'=>48.49, 'TVA'=>5.5),
array('nom'=>'short', 'qte'=>2, 'prix'=>34.99, 'TVA'=>5.5),
array('nom'=>'lunettes', 'qte'=>1, 'prix'=>25, 'TVA'=>20.20)
);

$supertotal = 0;
echo '<table>'."\r\n";
echo '<tr><th>Article</th><th>Qté</th><th>Prix</th><th>TVA</th><th>Total</th></tr>'."\r\n";

foreach ($panier as $article) { 
        $total = $article['qte'] * $article['prix'] * $article['TVA/100'];
        echo '<tr><td>' . $article['nom'] . '</td>
                  <td>' . $article['qte'] . '</td>
                  <td>' . $article['prix'] . ' €</td>
                  <td>' . $article['TVA'] . ' %</td>
                  <td>' . $total . ' €</td></tr>' . "\r\n";
        $supertotal += $total;
}
echo '<tr><td colspan="3">Total final :</td><td><strong>' . $supertotal . ' €</strong></td></tr>'."\r\n";
echo '</table>';

?> 