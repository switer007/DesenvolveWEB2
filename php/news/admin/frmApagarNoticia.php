<?php
    session_start();
    include ("../banco/conexao.php");

    if (isset($_POST['apagarNoticia'])) {
        $noticia_id = mysqli_real_escape_string($conexao, $_POST['apagarNoticia']);
        //consulta o id da Notícia e sua foto
        $queryFoto = "SELECT fotoNoticia FROM noticias WHERE idNoticia = '$noticia_id'";
        $resultadoFoto = mysqli_query($conexao, $queryFoto);

        //verifica se a consulta retornou um resultado e se a notícia foi encerrada
        if ($resultadoFoto && mysqli_num_rows($resultadoFoto) > 0) {
            $dadosNoticia = mysqli_fetch_assoc($resultadoFoto);
            $caminhoFoto = $dadosNoticia['fotoNoticia'];

            //apaga o arquivo se ele existir
            if(!empty($caminhoFoto) && file_exists($caminhoFoto) && is_file($caminhoFoto)){
                unlink($caminhoFoto);
            }
        }
        //apaga a notícia do banco de dados
        $sql = "DELETE FROM noticias WHERE idNoticia = '$noticia_id'";
        mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem_sucesso'] = 'Notícia apagada com sucesso!';
            header('Location: listarNoticias.php');
            exit();
        } else {
            $_SESSION['mensagem_sucesso'] = 'Erro ao apagar notícia. Verifique se ela já não foi removida.';
            header('Location: listarNoticias.php');
            exit();
        }
    }

?>