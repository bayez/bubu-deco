<?php /*%%SmartyHeaderCode:5205499556daba8f86a108-96858162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7dadf03a8cb264fde54af551c5ea090359bf1e' => 
    array (
      0 => '/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/prestashop_1/prestashop/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5205499556daba8f86a108-96858162',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56daba8f9d5b13_42485099',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56daba8f9d5b13_42485099')) {function content_56daba8f9d5b13_42485099($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:8888/prestashop/promotions" title="Promotions">
            Promotions
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:8888/prestashop/robes-ete/7-robe-mousseline-imprimee.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:8888/prestashop/20-small_default/robe-mousseline-imprimee.jpg" 
                    alt="" 
                    title="Robe en mousseline imprimée" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:8888/prestashop/robes-ete/7-robe-mousseline-imprimee.html" title="Robe en mousseline imprimée">
                            Robe en mousseline imprimée
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Robe en mousseline imprimée à...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,68 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    24,60 €                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:8888/prestashop/promotions" 
            title="Toutes les promos">
                <span>Toutes les promos<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
