<?php 
/**
 * 
 * Rodapé padrão, traz todos os elementos contido na tag footer
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
        <footer class=" container-fluid bg-footer text-white">
            <div class="container">
                <?php wp_ion_request_snippet( 'nav', 'footer' );?>
                <div class="row text-center py-2">
                    <span class="cpy-text">
                        <i class="bi bi-c-circle"></i> 2024 . Todos os direitos reservados
                    </span>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>
