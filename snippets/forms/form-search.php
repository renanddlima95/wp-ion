<?php 
/**
 * 
 * Modelo de formulário de busca interna
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<form action="<?php echo esc_url( home_url( '/' ) );?>" class="d-flex form-search mb-2" method="get" role="search">
    <input type="search" name="s" id="s" placeholder="Pesquisar" class="form-control rouded-0" value="<?php get_search_query();?>"/>
    <button type="submit" class="btn-ion-search" value="Search">
        <i class="bi bi-search px-2"></i>
    </button>
</form>
