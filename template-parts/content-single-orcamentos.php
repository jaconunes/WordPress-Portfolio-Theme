<div class="container-main">
        <div class="row no-gutters">
            <div class="bg-blue col-sm-12 col-md-6 text-center">
               <div class="col-logo d-flex flex-column align-items-center justify-content-center">
                   <img src="https://www.jackwebdesign.dev.br/wp-content/themes/jackwebdesign/assets/images/favicon.png" alt="" class="img-fluid">
               </div>               
            </div>
            
            <div class="col-sm-12 col-md-6 text-center">
               <div class="col-title d-flex flex-column align-items-center justify-content-center">
                   <h1 class="text-uppercase font-extra-bold">Orçamento</h1>
                   <h2><span class="text-right"><?php echo get_post_meta($post->ID, 'servico', true); ?></span></h2>
               </div>                
            </div>
            
           <div class="p-default w100 header-info">
               <div class="row">
                   
                   <div class="col-sm-12 col-md-6">
                        <div class="d-flex col-left">
                            <h6 class="pr-3">Proposta para:</h6>
                            <div class="txt">
                                <h5><?php the_title(); ?></h5>
                                
                                <span><strong>Válido até:</strong><?php echo get_post_meta($post->ID, 'data_validade', true); ?></span>
                                <span><strong>Disponibilidade:</strong> imediato</span>
                            </div>
                        </div>
                    </div>                   
                   
                   
                   
                   <div class="col-sm-12 col-md-6">
                <div class="col-right">
                    
                    <div class="d-flex align-items-center txt">
                        <h5>Orçamento#</h5>
                        <h6><?php the_ID(); ?></h6>
                    </div>
                    
                    <div class="d-flex align-items-center txt">
                        <h5>Data:</h5>
                        <h6><?php echo date('d/m/Y'); ?></h6>
                    </div>
                </div>
            </div>
                   
                   
               </div>
           </div> <!-- padding default -->
            
            
            
          <!-- TABELA -->
          <div class="col-12">
              <div class="table-responsive">
                   <table class="table">
                       <thead class="thead-dark">
                           <th class="pl-5">#</th>
                           <th width='56%'>Descrição do serviço</th>
                           <th>Prazo</th>
                           <th>Preço</th>
                       </thead>

                       <tbody>
                           <tr>
                               <td class="pl-5">1</td>
                               <td>
                              <h6>Layout - Design do Site</h6>
                               <div class="description">
                                   <ul>
                                       <li>
                                           <p>Desenho da(s) página(s) do site;</p>
                                       </li>

                                        <li>
                                           <p>Layout em HD (1920px de largura);</p>
                                       </li> 

                                        <li>
                                           <p>Layout para desenvolvimento de um site responsivo.</p>
                                       </li>
                                   </ul>
                               </div>                          
                               </td>
                               <td><h6><?php echo get_post_meta($post->ID, 'dias_prazo_layout', true) . ' dias'; ?></h6></td>
                               <td><h6><?php echo 'R$ ' . get_post_meta($post->ID, 'valor_layout', true); ?></h6></td>
                           </tr>


                           <tr>
                               <td class="pl-5">2</td>
                               <td>
                              <h6>Codificação do Layout</h6>
                               <div class="description">


                                   <ul>
                                       <li>
                                           <p>Código otimizado, estruturado com linguagens atuais;</p>
                                       </li>

                                        <li>
                                           <p>Site responsivo e funcional nos principais navegadores;</p>
                                       </li> 

                                        <li>
                                           <p>Animações e interações sem utilização de flash;</p>
                                       </li>


                                        <li>
                                           <p>Formulário de Contato e Orçamento com envio por e-mail;</p>
                                       </li>


                                       <li>
                                           <p>Criação de até 8 páginas, sugestões:</p>

                                           <ul class="d-block">
                                               <li><p>Início</p></li>
                                               <li><p>Sobre</p></li>
                                               <li><p>Serviços</p></li>
                                               <li><p>Clientes</p></li>
                                               <li><p>Contato</p></li>
                                           </ul>

                                       </li>


                                       <li>
                                           <p>Integração com Facebook e/ou Instagram;</p>
                                       </li>


                                   </ul>
                               </div>                          
                               </td>
                               <td><h6><?php echo get_post_meta($post->ID, 'dias_prazo_codificacao', true) . ' dias'; ?></h6></td>
                               <td><h6><?php echo 'R$ ' . get_post_meta($post->ID, 'valor_codificacao', true); ?></h6></td>
                           </tr>


                           <tr>
                               <td class="pl-5"><h6>3</h6></td>
                               <td>
                                  <h6> Otimização básica para o Google (SEO)</h6>
                                   <div class="description">
                                       <ul> 
                                       <li>
                                               <p>Aplicação de semântica na codificação;</p>
                                           </li>
                                           <li>
                                               <p>Otimização de imagens e arquivos para carregamento rápido;</p>
                                           </li>
                                           <li>
                                               <p>Aplicação de técnicas de SEO interna e externa ao site;</p>
                                           </li>
                                           <li>
                                               <p>Google Analytics - Acompanhar visitas e muito mais do site;</p>
                                           </li>
                                           <li>
                                               <p>Cadastro da empresa no Google Maps / Google Meu negócio.</p>
                                           </li>
                                       </ul>
                                   </div>
                               </td>


                               <td><h6><?php echo get_post_meta($post->ID, 'dias_prazo_otimizacao', true) . ' dias'; ?></h6></td>
                               <td><h6><?php echo 'R$ ' . get_post_meta($post->ID, 'valor_otimizacao', true); ?></h6></td>
                           </tr>




                            <tr>
                               <td class="pl-5">4</td>
                               <td>
                                  <h6> Gerenciador de Conteúdo</h6>
                                   <div class="description">
                                      <p><strong class="font-extra-bold">Criação de Sistema para gerenciamento de:</strong></p><br>
                                       <ul> 
                                       <li>
                                           <p>Todas as páginas do site;</p>
                                       </li>
                                       <li>
                                           <p>Formulários de contato e/ou orçamento;</p>
                                       </li>
                                       <li>
                                           <p>Sliders (banners animados para destaques);</p>
                                       </li>
                                       <li>
                                           <p>Informações da empresa (telefone, endereço, redes sociais...).</p>
                                       </li>
                                       </ul>
                                   </div>
                               </td>


                               <td><h6><?php echo get_post_meta($post->ID, 'dias_prazo_gerenciador', true) . ' dias'; ?></h6></td>
                               <td><h6><?php echo 'R$ ' . get_post_meta($post->ID, 'valor_gerenciador', true); ?></h6></td>
                           </tr>
                       </tbody>


                       <tfoot class="v-center">
                            <td class="bg-blue"></td>
                           <td class="bg-blue text-right shape d-flex align-items-center justify-content-end"><h6>TOTAL FINAL:</h6></td>
                            <?php 
                                $totalprazo = ( get_post_meta($post->ID, 'dias_prazo_layout', true) + get_post_meta($post->ID, 'dias_prazo_codificacao', true) + get_post_meta($post->ID, 'dias_prazo_otimizacao', true) + get_post_meta($post->ID, 'dias_prazo_gerenciador', true) );
                                $totalvalor = ( get_post_meta($post->ID, 'valor_layout', true) + get_post_meta($post->ID, 'valor_codificacao', true) + get_post_meta($post->ID, 'valor_otimizacao', true) + get_post_meta($post->ID, 'valor_gerenciador', true) );
                            ?>

                           <td class="bg-green-grad shape2"><strong class="dias"><?php echo $totalprazo; ?></strong><small>dias úteis</small></td>


                           <td class="bg-green-grad"><small>R$ </small><strong class="valor font-extra-bold"><?php echo $totalvalor; ?>,00</strong> <span class="em-ate">em até 12x s/ juros</span></td>
                       </tfoot>

                   </table>  
              </div>    
          </div> 
           
             
               
                 
        <!-- INFO FOOTER -->
        <div class="col-12 info-footer">
                        
            <div class="padding-default pt-5">
                <h5 class="text-center font-extra-bold">## FORMA DE PAGAMENTO ##</h5>
            </div> 
               
               
        <div class="row no-gutterss">

               <div class="col-sm-12 col-md-6 col-pay">           
                   <h6 class="font-extra-bold">Opção 01 - Via Cartão de Crédito</h6>
                   <div class="text">
                   <?php $valorparcela = ($totalvalor / 12 ); 
                         $valorparcelaformatado = number_format($valorparcela,2,",","."); ?>
                       <p>Parcelamento do total de <?php echo 'R$ ' . $totalvalor . ',00'; ?> em até <strong>12x de <?php echo 'R$ ' . $valorparcelaformatado; ?> (sem juros)</strong> no cartão de crédito, via link de pagamento Mercado Pago (sistema de pagamento online);</p>
                   </div>
               </div>      

              <div class="col-sm-12 col-md-6 col-pay">           
                   <h6 class="font-extra-bold">Opção 02 - Transferência Bancária</h6>
                   <div class="text">
                       <?php 
                             $valordesconto = ( ($totalvalor * 10) / 100);
                             $totalcomdesconto = ($totalvalor - $valordesconto);
                             $valorentrada = ( $totalcomdesconto / 2);
                             $valorentradaformatado =  number_format($valorentrada,2,",",".");  ?>
                       <p>Em 2x (<?php echo 'R$ ' . $valorentradaformatado . ' + R$ ' . $valorentradaformatado; ?>) via PIX. <br>
                       
        1ª parcela de entrada e 2ª após a entrega. <br>
        Há um <strong class="color-green">desconto de 10%</strong>, ficando <strong><?php echo 'R$ ' . $totalcomdesconto . ',00'; ?></strong>.</p>
                   </div>
               </div>                                                        
                                                                  
            </div><!-- row -->  
                                                                                                                                                                                                                                         

<!-- VEJA TAMBEM -->

<div class="padding-default pt-5">
                <h5 class="text-center font-extra-bold">## VEJA TAMBÉM... ##</h5>
            </div> 
               
               
        <div class="row no-gutterss">

               <div class="col-sm-12 col-md-6 col-veja">           
                   <h4 class="font-extra-bold color-green text-center">## DIFERENCIAIS ##</h4>
                   <div class="text">
                       <ul>
                           <li>
                               <p>Tecnologia e Programação em linguagens atuais;</p>
                           </li>
                           <li>
                               <p>Código limpo e seguro;</p>
                           </li>
                           <li>
                               <p>Layout personalizado;</p>
                           </li>
                           <li>
                               <p>Indexação do site no Google (em até 3 meses);</p>
                           </li>
                           <li>
                               <p>Indexação do site no Google (em até 3 meses);</p>
                           </li>
                           <li>
                               <p>Monitoramento completo de acesso ao site com 	 Google Analytics (contador de visitas, mapa geográfico de acesso, entre outros).</p>
                           </li>
                           <li>
                               <p>Criação de Fanpage e identidade visual da mesma (foto de perfil, capa e 2 artes para posts) - Opcional;</p>
                           </li>
                          
                       </ul>
                   </div>
               </div>      

              <div class="col-sm-12 col-md-6 col-veja">           
                   <h4 class="font-extra-bold color-green text-center">## INFORMAÇÕES EXTRAS ##</h4>
                   <div class="text">
                       <ul>
                           <li>
                               <p>Todo conteúdo fica responsável pelo contratante,</p>
                           </li>
                           <li>
                               <p>Contrato de prestação de serviços;</p>
                           </li>
                           <li>
                               <p>Nota Fiscal (opcional);</p>
                           </li>
                           <li>
                               <p>Nome de domínio não incluso;</p>
                           </li>
                           <li>
                               <p>1 mês de Hospedagem grátis (posteriormente R$35,00 mensal);</p>
                           </li>
                           <li>
                               <p>Cliente terá acesso em tempo real ao desenvolvimento das etapas do site;.</p>
                           </li>
                           <li>
                               <p>Site totalmente personalizado e 100% da posse do cliente após pagamento (*não é aluguel);</p>
                           </li>
                          
                       </ul>
                       
              </div>
               </div>                                                        
                                                                  
            </div><!-- row -->                                                                           


            <!-- MENSAGEM -->

            <div class="message-um text-center">
                <p><em>Não havendo pendências de ambos os lados, serão enviados os arquivos do site para o cliente após a finalização do projeto.</em></p>
            </div>
                                                                                                                                         
            <div class="thanks text-center">
                <h2 class="font-extra-bold">OBRIGADO (:</h2>
                <p><em>Agradeço o interesse pela cotação. Espero que possamos juntos firmar uma parceria de <strong>SUCESSO.</strong></em></p>
            </div>                                                                                                                                         
            
                                  