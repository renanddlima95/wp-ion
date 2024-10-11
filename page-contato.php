<?php 
/**
 * 
 * Template Name: Página de Contato
 * Template Post Type: page
 * 
 * Modelo de página de contato
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<?php wp_ion_request_part( 'header', 'default' );?>
<header class="container-fluid ion-bg-gradient py-5 mb-5" role="banner">
    <div class="container py-5 text-center text-white">
        <h1 class="header-title pt-3">
            Entre em Contato Conosco
        </h1>
        <p class="header-text pb-3">
            Atraia mais clientes com uma solução realmente eficaz
        </p>
    </div>
</header>
<main class="container ion-bg-gradient text-white my-5 py-5 px-md-5">
    <div class="row my-5 px-md-5">
        <div class="col px-md-5">
            <h2 class="contact-title py-5 text-center">
                Preencha o formulário abaixo
            </h2>
            <form action="<?php echo esc_url( home_url( '/' ) );?>" method="get" class="py-1 px-5 form-contact" name="contat_form">
                <div class="row">
                    <div class="form-group col-md-7">
                        <label for="name">
                            Digite seu nome completo <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" id="name" class="form-control mb-3 border-0" placeholder="Nome Completo" autocomplete="on" required/>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="business">
                            Digite o nome da sua empresa <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="business" id="business" class="form-control mb-3 border-0" placeholder="Empresa" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="servico">
                            Qual serviço está buscando <span class="text-danger">*</span>
                        </label>
                        <select name="servico" id="servico" class="form-control mb-3" required>
                            <option disable selected>
                                Selecione
                            </option>
                            <option value="Site Comercial">
                                Site Comercial
                            </option>
                            <option value="Loja Virtual">
                                Loja Virtual
                            </option>
                            <option value="App Mobile">
                                App Mobile
                            </option>
                            <option value="Integração">
                                Integração
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="empsize">
                            Qual o tamanho da sua empresa? <span class="text-danger">*</span>
                        </label>
                        <select id="empsize" name="empsize" id="empsize" class="form-control mb-3 border-0" required>
                            <option disable selected>
                                Selecione
                            </option>
                            <option value="Micro Empresa">
                                Micro empresa, com até 1 funcionário
                            </option>
                            <option value="Pequena">
                                Empresa pequena, com até 9 funcionários
                            </option>
                            <option value="Média">
                                Empresa média, com até 19 funcionários
                            </option>
                            <option value="Grande">
                                Empresa grande, acima de 19 funcionários
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">
                            Digite seu número WhatsApp <span class="text-danger">*</span>
                        </label>
                        <input type="tel" name="phone" id="phone" class="form-control mb-3 border-0" placeholder="(99) 99999-9999" pattern="([0-9]{2})[0-9]{5}-[0-9]{4}" autocomplete="on" required/>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">
                            Digite seu melhor e-mail <span class="text-danger">*</span>
                        </label>
                        <input type="email" name="email" id="email" Class="form-control mb-3 border-0" placeholder="E-mail" autocomplete="on" required/>
                    </div>
                    <div class="form-group">
                        <label for="message">
                            Escreva uma mensagem
                        </label>
                        <textarea name="message" id="message" class="form-control mb-3 border-0" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="button-group">
                    <button type="submit" class="btn-contact my-3 mx-auto py-1">
                        Solicitar Contato
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php wp_ion_request_part( 'footer', 'default' );