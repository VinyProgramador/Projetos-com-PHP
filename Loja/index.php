<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loja dos Nerd´s</title>
    </head>
    <body bgcolor="gray">
        <form method="post" action="ler-categoria.php">
           <center>
		   Produtos:
            <select name='slcCategoria'> 
                <option value="1">Historias em Quadrinhos</option>
                <option value="2">Bonecos de Ação</option>
				<option value="3">Camisas de Herois</option>
				<option value="4">Jogos de Herois</option>
            </select>
            <input type="submit" value="Pesquisar">
        </form>
		<center>
        <h1>Loja dos Nerd´s</h1>
        <?php
            if(isset($_COOKIE['codcategoria'])){               
                if($_COOKIE['codcategoria'] == 1){ 
                    echo("
                        <table border='7'>
                            <tr>
                                <td>
                                    <img src='imagens/batman.jpg' width='200'> <br> Batman em: The botton <br> Categoria: Hq´s
                                </td>
                            </tr>
                            
							<tr>
                                <td>
                                    <img src='imagens/superman.jpg' width='200'> <br> Superman: O Homem de Aço <br> Categoria: Hq´s 
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <img src='imagens/homemaranha.jpg' width='200'> <br> homen aranha: A Teia! <br> Categoria: Hq´s
                                </td>
                            </tr>
                        </table>
                    ");
                }
					
				if(isset($_COOKIE['codcategoria'])){               
                if($_COOKIE['codcategoria'] == 2){ 
                    echo("
                        <table border='7'>
                            <tr>
                                <td>
                                    <img src='imagens/actBat.jpg' width='200'> <br> Action Figure Batman <br> Categoria: Boneco de Ação.
                                </td>
                            </tr>
                            
							<tr>
                                <td>
                                    <img src='imagens/actSuper.jpg' width='200'> <br> Action Figure Superman <br> Categoria: Bonecos de Ação
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <img src='imagens/actSpider.jpg' width='200'> <br> Action Figure Homem Aranha <br> Categoria: Bonecos de Ação
                                </td>
                            </tr>
                        </table>
                    ");
                }
				
				
			}
								
				if(isset($_COOKIE['codcategoria'])){                
                if($_COOKIE['codcategoria'] == 3){ 
                    echo("
                        <table border='7'>
                            <tr>
                                <td>
                                    <img src='imagens/batcamisa.jpg' width='200'> <br> Camisa Cinza Batman  <br> Categoria: Camisas
                                </td>
                            </tr>
                            
							<tr>
                                <td>
                                    <img src='imagens/capcamisa.jpg' width='200'> <br> Camisa Preta Capitão America <br> Categoria: Camisas
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <img src='imagens/deadcamisa.jpg' width='200'> <br> Camisa Branca Deadepool <br> Categoria: Camisas
                                </td>
                            </tr>
                        </table>
                    ");
                }
				
				
			}
			
				if(isset($_COOKIE['codcategoria'])){
                if($_COOKIE['codcategoria'] == 4){ 
                    echo("
                        <table border='7'>
                            <tr>
                                <td>
                                    <img src='imagens/spiderjogo.jpg' width='200'> <br> Spiderman: Miles Morales <br> Categoria: Jogos
                                </td>
                            </tr>
                            
							<tr>
                                <td>
                                    <img src='imagens/avengersjogo.jpg' width='200'> <br> Avengers The Game <br> Categoria: Jogos
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <img src='imagens/batjogo.jpg' width='200'> <br> Batman Arkham Knight <br> Categoria: Jogos
                                </td>
                            </tr>
                        </table>
                    ");
                }
				
				
			}
	
                else{ 
                    echo("
                        
                    ");
                }
            }
            else{
               
                echo("
                        <table border='7'>
                            <tr>
                                <td>
                                    <img src='imagens/spiderjogo.jpg' width='200'> <br> Spiderman: Miles Morales <br> Categoria: Jogos
                                </td>
                            </tr>
							 <tr>
                                <td>
                                    <img src='imagens/capcamisa.jpg' width='200'> <br> Camisa Preta Capitão America <br> Categoria:Camisas
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='imagens/actSuper.jpg' width='200'> <br> Action Figure Superman <br> Categoria: Bonecosde Ação
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <img src='imagens/batman.jpg' width='200'> <br> Batman em: The botton <br> Categoria: Hq´s
                                </td>
                            </tr>
                        </table>
                    ");
            }
        ?>
    </body>
</html>