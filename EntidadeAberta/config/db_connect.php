<?PHP
 
# PHP 7
$conexao = mysqli_connect('localhost','gpsoftco_user','Odlareg2930');
$banco = mysqli_select_db($conexao,'gpsoftco_way');
mysqli_set_charset($conexao,'utf8');
 
// $sql = mysqli_query($conexao,"select * from tb_pessoa") or die("Erro");
// while($dados=mysqli_fetch_assoc($sql))
//     {
//         echo $dados['nome'].'<br>';
//     }

?>