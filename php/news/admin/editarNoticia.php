<?php
    session_start();
    include("../banco/conexao.php");

    if(isset($_POST['editarNoticia'])) {
        $noticia_id    = mysqli_real_escape_string($conexao, $_POST['idNoticia']);
        $tituloNoticia = mysqli_real_escape_string($conexao, trim($_POST['tituloNoticia']));
        $textoNoticia  = mysqli_real_escape_string($conexao, trim($_POST['textoNoticia']));

        $caminhoNovaFoto = '';
        $atualizarFoto = false;

        // verifica se o arquivo foi enviado e se o upload foi sem erros
        if(isset($_FILES['fotoNoticia']) && $_FILES['fotoNoticia']['error'] == UPLOAD_ERR_OK) {
            $fotoNoticia = $_FILES['fotoNoticia'];
            //separa o arquivo em partes: pasta + nome + extensão do arquivo
            $pasta = "../imagens/noticias/";
            $nomeDoArquivo = $fotoNoticia['name'];
            $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
            //gera um nome único para o arquivo
            $novoNomeDoArquivo = uniqid();
            $caminhoNovaFoto = $pasta.$novoNomeDoArquivo.".".$extensao;
            //move o arquivo para a pasta destino
            if(move_uploaded_file($fotoNoticia['tmp_name'], $caminhoNovaFoto)) {
                $atualizarFoto = true;

                //apagar a foto antiga para não ocupar espaço
                $sqlFotoAntiga = "SELECT fotoNoticia FROM noticias WHERE idNoticia = '$noticia_id'";
                $queryFotoAntiga = mysqli_query($conexao, $sqlFotoAntiga);
                if(mysqli_num_rows($queryFotoAntiga) > 0) {
                    $dadosNoticia = mysqli_fetch_assoc($queryFotoAntiga);
                    $caminhoFotoAntiga = $dadosNoticia['fotoNoticia'];
                    //verifica se o arquivo existe e se é um arquivo mesmo, não uma pasta
                    if(file_exists($caminhoFotoAntiga) && is_file($caminhoFotoAntiga)) {
                        unlink($caminhoFotoAntiga);
                    }
                }
            } else {
                $_SESSION['mensagem_erro'] = "Falha ao fazer upload da nova foto.";
                header("Location: frmEditarNoticia.php?idNoticia=".$noticia_id);
                exit();
            }
        }
        //atualização das fotos
        if($atualizarFoto) {
            $sql = "UPDATE noticias SET tituloNoticia = '$tituloNoticia', textoNoticia = '$textoNoticia', fotoNoticia = '$caminhoNovaFoto' WHERE idNoticia = '$noticia_id'";
        } else {
            $sql = "UPDATE noticias SET tituloNoticia = '$tituloNoticia', textoNoticia = '$textoNoticia' WHERE idNoticia = '$noticia_id'";
        }
        $queryAtualizar = mysqli_query($conexao, $sql);

        if($queryAtualizar) {
            $_SESSION['mensagem_sucesso'] = "Notícia atualizada com sucesso!";
            header('Location: listarNoticias.php');
            exit();
        } else {
            $_SESSION['mensagem_erro'] = "Erro ao atualizar a notícia no banco de dados.";
            header("Location: frmEditarNoticia.php?idNoticia=".$noticia_id);
            exit();
    }



    }

?>