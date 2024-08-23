<?php
/*
Template Name: Seja um Fornecedor - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Canal de<br> &ensp;&ensp; Denúncia</h1>
            </div>
        </div>
    </div>
</section>

</main>

<section class="container" id="somos-maximo" style="margin-bottom: 2rem !important;">
    <div class="container-btns-somos-maximo">
        <button class="btn-somos-maximo">PORTFÓLIO</button>
        <button class="btn-somos-maximo">NOSSOS CLIENTES</button>
        <button class="btn-somos-maximo">CERTIFICAÇÕES</button>
        <button class="btn-somos-maximo">ORCE SUA OBRA</button>
    </div>
    <div class="container-content-oportunidades">
        <h1 style="margin-bottom: 2rem;">Canal de Denúncia Máximo Aldana</h1>
        <h2>Mantenha a Integridade em Foco</h2>
        <h2 style="margin-bottom: 2rem;">Seu Canal Seguro para Denúncias e Transparência</h2>
        <p>Preencha e envie o formulário ao final da página para fazer uma denúncia.</p>
    </div>
    <div class="container-btns-denuncia-inc">
        <button>FAZER UMA DENÚNCIA <i class="fa-solid fa-arrow-right"></i></button>
        <button>POLÍTICA DE COMPLIANCE <i class="fa-solid fa-arrow-right"></i></button>
    </div>
</section>

<section id="content-denuncias-inc">
    <div class="container">
        <div>
            <p>O Canal de denúncias é voltado para registrar relatos sobre ações e condutas que não estão em conformidade com o Código de Ética e Conduta da Maximo Aldana, assim como com as Leis e regulamentos em vigor. </p>
            <p>A Maximo Aldana preza pela integridade, transparência e responsabilidade nas relações com todos os seus públicos e pela cultura ética e de valor dentro de nossa organização. </p>
            <p>Pensando em melhorar nossa comunicação, criamos nosso Canal de Denúncia, onde você poderá sinalizar qualquer conduta que esteja fora do que é ético e que possa prejudicar, você, seu colega ou até mesmo a própria organização</p>
        </div>
        <div class="content-tipos-denuncias-inc" style="margin: 2rem 0;">
            <h5>Este canal destina-se a receber denúncias sobre:</h5><br>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Situações ou suspeitas de atos de corrupção (conforme Lei Anticorrupção nº 12.846/2013). </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Desvios de conduta e assédio. • Descumprimento do Código de Ética e Políticas Corporativas. </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Indícios de ilicitudes que possam afetar a reputação da corporação.</div>
            <br>
            <p>A confidencialidade, independência, imparcialidade e não retaliação aos denunciantes de boa-fé são garantidas.</p>
        </div>
        <div class="content-tipos-denuncias-inc" style="margin: 2rem 0;">
            <h5>Requisitos para enquadramento de Denúncia:</h5><br>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Os fatos narrados serão apurados e submetidos à apreciação do Comitê de Conduta e Integridade que é composto pelo Time Jurídico. </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Para que sua denúncia seja atendida com agilidade e eficiência, ela deve vir acompanhada do maior número de informações, como: </div>
            <br>
            <p>Descrição clara do ocorrido;</p>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>A data e local do fato; </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Quem são as pessoas envolvidas (pertencentes ou não à organização);</div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Evidências: documentos ou informações relevantes sobre o ocorrido.</div>
        </div>
        <div class="content-tipos-denuncias-inc" style="margin: 2rem 0;">
            <h5>Como é tratada a Denúncia:</h5>
            <br>
            <p>Primeiro recebemos a denúncia pelo Canal de Denuncia;</p>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Em seguida a denúncia é avaliada pelo comitê; </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Após a avaliação é formulado um plano de ação para prosseguir com a investigação; </div>
            <div class="content-tipos-paragrafo-inc"><i class="fa-solid fa-check" style="color: #18354f;"></i>Após conclusão da investigação as ações serão tomadas para cessar a violação. </div>
            <br><br>
            <p>Este canal é totalmente confidencial e anônimo, então, não se sinta reprimido na hora de fazer sua denúncia. </p>
            <p>A ferramenta é segura e confidencial e as informações relatadas são recebidas de forma sigilosa. Em seguida, encaminhadas para avaliação dos responsáveis. Deseja relatar um desvio de conduta? Basta preencher o formulário abaixo:</p>
        </div>
        <div class="content-container-form-denuncia-inc" id="form-denuncia">
            <form method="POST" action="./mailCanalDenuncia-inc.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="login">Deseja se identificar? Se sim, escreva seu nome abaixo:</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" name="nome" aria-describedby="nome">
                </div>
                <div class="form-group">
                    <label for="produto">Natureza da Ocorrência:*</label>
                    <select class="form-control" id="natureza_ocorrencia" name="natureza_ocorrencia" required>
                        <option disabled selected style="color: #444744; opacity: 0.4;">Selecione uma opção</option>
                        <option value="ocorrencia1">Ocorrência 1</option>
                        <option value="ocorrencia2">Ocorrência 2</option>
                        <option value="ocorrencia3">Ocorrência 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="produto">Tipo do Envolvimento:*</label>
                    <select class="form-control" id="tipo_envolvimento" name="tipo_envolvimento" required>
                        <option disabled selected style="color: #444744; opacity: 0.4;">Selecione uma opção</option>
                        <option value="envolvimento1">Envolvimento 1</option>
                        <option value="envolvimento2">Envolvimento 2</option>
                        <option value="envolvimento3">Envolvimento 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Data do ocorrido:*</label>
                    <input type="date" class="form-control" placeholder="DIA/MÊS/ANO" id="data_ocorrido" name="data_ocorrido" required>
                </div>
                <div class="form-group">
                    <label for="login">Local do Ocorrido:*</label>
                    <input type="text" class="form-control" placeholder="Local" id="local_ocorrido" name="local_ocorrido" required>
                </div>
                <div class="form-group">
                    <label for="descricao_ocorrido">Descrição do Ocorrido:*</label>
                    <textarea class="form-control" id="descricao_ocorrido" name="descricao_ocorrido" placeholder="Descrição" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tempo_ocorrendo">Há quanto tempo ocorre?*</label>
                    <textarea class="form-control" id="tempo_ocorrendo" name="tempo_ocorrendo" placeholder="Se é algo que se repete, conte-nos há quanto tempo vem ocorrendo a ação." rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="quando_soube">Quando ficou sabendo?*</label>
                    <textarea class="form-control" id="quando_soube" name="quando_soube" placeholder="Como ficou ciente sobre a ocorrência deste evento?" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="sugestao_resolucao">Sugestão para resolver o problema?*</label>
                    <textarea class="form-control" id="sugestao_resolucao" name="sugestao_resolucao" placeholder="Se tiver alguma sugestão de como resolver o problema, descreva-a." rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="conteudo_relato">Quanto ao conteúdo do seu relato, você:*</label>
                    <select class="form-control" id="conteudo_relato" name="conteudo_relato" required>
                        <option disabled selected style="color: #444744; opacity: 0.4;">Selecione uma opção</option>
                        <option value="relato1">Relato 1</option>
                        <option value="relato2">Relato 2</option>
                        <option value="relato3">Relato 3</option>
                    </select>
                </div>
                <p style="padding: 0 2rem; color: white;">Caso queira enviar alguma evidência (ex: documento digitalizado, foto, vídeo, áudio ou outro documento) associado ao seu relato, utilize o campo abaixo para anexá-la.</p><br>
                <p style="padding: 0 2rem; color: white;">Neste acesso poderá ser enviado até 5 arquivos ou se preferir anexe todos os documentos em um único arquivo zipado. (Capacidade máxima de até 100 MB por arquivo anexado).</p><br>
                <div class="inputs-file-seu-terreno-inc">
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                </div>
                <div class="inputs-file-seu-terreno-inc">
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                </div>
                <button type="submit">Enviar</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="lembrarSenha">
                    <label class="form-check-label" for="lembrarSenha">Ao preencher e enviar este formulário, você concorda com o armazenamento e manuseio de seus dados pelo Máximo Aldana.</label>
                </div>
            </form>

        </div>
    </div>
</section>


<?php include('footer-inc.php'); ?>