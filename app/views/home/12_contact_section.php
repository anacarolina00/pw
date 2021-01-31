<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
          <p>
            Deixe aqui sua critica, sugestão e dúvidas. Caso preferir entre em contato pelo e-mail 
            ou nós faça uma visita. Obrigada!
          </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Localização:</h4>
                <p>MG</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ana@email.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefone:</h4>
                <p>+55 (37) xxxx-xxxx</p>
              </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7748249.289614384!2d-49.949398541871396!3d-18.51421674086739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690a165324289%3A0x112170c9379de7b3!2sMinas%20Gerais!5e0!3m2!1spt-BR!2sbr!4v1606410748780!5m2!1spt-BR!2sbr"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Seu nome</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" 
                  data-msg="Insira pelo menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Seu Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" 
                  data-msg="Por favor, digite um email válido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" 
                data-msg=" Insira pelo menos 8 caracteres no assunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required"
                data-msg="Por favor escreva algo para nós"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigada!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensagem</button></div>
            </form>
          </div>

        </div>

      </div> 
    </section>
    
    <!-- End Contact Section -->