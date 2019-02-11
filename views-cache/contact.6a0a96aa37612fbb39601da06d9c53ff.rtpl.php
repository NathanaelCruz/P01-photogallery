<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-fluid" id="center-list-site">

    <div id="contact">
        <h1>Contato</h1>
        <form action="/photogallery/contato" onSubmit="return validar(this);" name="frm-contact" id="frm-contact" method="POST">
            
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Seu nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu E-mail Para Contato">
                <small id="emailHelp" class="form-text text-muted">* Nunca iremos compartilhar seu e-mail.</small>
            </div>
            <div class="form-group">
                <label for="subject">Assunto</label>
                <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" placeholder="Assunto de interesse">
            </div>
            <div class="form-group">
                <label for="menssage">Mensagem</label>
                <textarea name="menssage" class="form-control" id="menssage" cols="58" rows="10" aria-describedby="menssageHelp" placeholder="Sua Mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar E-mail</button>
            
        </form>
    </div>

</div>