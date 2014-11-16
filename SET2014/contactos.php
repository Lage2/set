<!DOCTYPE html>
<html>
  <head>
    <?php include "comp/head.php" ?>
  </head>
  <body id="contactos">

    <section class="container">
      <div class="content row">
        <?php include "comp/header.php"; ?>
        
        <section class="col col-sm-2 col-md-2 col-lg-2">
          <?php include "comp/oportunidades.php"; ?>
        </section>

        <section class="main col-sm-7 col-md-7 col-lg-7">
          <div id="contactos">    
            <p>A 11ª edição da Semana Empresarial e Tecnológica terá lugar no <em>campus</em> do Instituto Superior Técnico no Taguspark, Parque da Ciência e Tecnologia, em Oeiras.</p><br/>
            
            <table>                
                <tr>
                   <td><img id="taguspark" src="img/Taguspark.jpg"/>
                   </td>
                    
                    <td style="padding-left: 20px;"><strong>Morada</strong> <br/>
                        Av. Prof. Doutor Aníbal Cavaco Silva <br/>
                        2744-016 Porto Salvo <br/><br/>
                        <strong>Telefone</strong> <br/>
                        (+351) 214 233 579 <br/> Extensão: 5179 <br/><br/>
                        <strong><em>Email</strong> <br/>
                        <a href="mailto:set@lage2.tecnico.ulisboa.pt">set@lage2.tecnico.ulisboa.pt</a></em> 
                    </td>
                </tr>
                
                <tr> 
                    <td id="visita-virtual"> Faça uma <a href="https://tecnico.ulisboa.pt/misc/vv-taguspark/tour.swf">visita virtual ao <em>campus</em></a>.
                    </td>
                </tr>
            </table>
            <br/>
            <h1 class="titulospaginas">
                Como chegar
            </h1>
            
               <ul class="nav nav-pills nav-justified" id="tabs">
                <li class="active"><a href="#carreiras" data-toggle="tab">Autocarro</a>
                </li>
                
                <li><a href="#viatura" data-toggle="tab">Viatura própria </a>
                </li>
                
                <li><a href="#shuttle" data-toggle="tab">Shuttle IST </a>
                </li>
                
                <li><a href="#taxi" data-toggle="tab">Táxi</a>
                </li>
            </ul>
            
            <div id="tab-content-contactos" class="tab-content">
                <div class="tab-pane active" id="carreiras">
                    <p>   Algumas carreiras que interligam o <em>campus</em> do Taguspark a Lisboa e às estações ferroviárias de Oeiras (linha de Cascais) e Cacém (linha de Sintra):</p><br/>
                        <li class="list-item"><a href="http://www.vimeca.pt/script/www/?p=horarios&id=15"> Carreira Nº 15 (Marquês de Pombal - Universidade Católica)</a>;</li><br/>
                        <li class="list-item"><a href="http://www.vimeca.pt/script/www/?p=horarios&id=23"> Carreira Nº 23 (Casal do Cotão - Circulação via Tercena, São Marcos e Taguspark)</a>;</li><br/>
                        <li class="list-item"><a href="http://www.vimeca.pt/script/www/?p=horarios&id=112"> Carreira Nº 112 (Belas - Oeiras)</a>;</li><br/>
                        <li class="list-item"><a href="http://www.vimeca.pt/script/www/?p=horarios&id=119"> Carreira Nº 119 (Paço de Arcos, Estação Norte - Talaíde, Largo)</a>;</li><br/>
                        <li class="list-item"><a href="http://www.vimeca.pt/script/www/?p=horarios&id=125"> Carreira Nº 125 (Paço de Arcos, Estação Norte - Talaíde)</a>;</li>
                </div>
                
                <div class="tab-pane" id="viatura">
                    <p> <li><strong>Pela A5 - Auto-estrada Lisboa-Cascais: </strong> saída em Cacém/Porto Salvo. A via rápida (Porto Salvo) entre a A5 e o Cacém permite um acesso mais directo ao campus. </li></p>
                            <li><strong>Pelo IC 19 : </strong>saída no Cacém, em direção a Paço d'Arcos, e ligação ao Campus do IST. </li><br/><br/>
                           <p id="consulte">
                               Consulte os <a href="https://maps.google.pt/maps?f=d&source=s_d&saddr=Av.+Rovisco+Pais,+Lisboa&daddr=R.+Prof.+Dr.+Cavaco+Silva&hl=pt-PT&geocode=FTcOTwIdE490_ymDwydBojMZDTGF0-q7ptWfJA%3BFZIUTwIdygly_w&mra=pe&sll=38.710222,-8.98256&sspn=0.474717,1.234589&ie=UTF8&ll=38.732661,-9.221992&spn=0.118643,0.439453&t=h&z=12"> percursos possíveis</a>.
                    </p>
                </div>
                
                <div class="tab-pane" id="shuttle">
                    <p> O acesso ao <em>campus</em> do Taguspark é assegurado gratuitamente para todos os alunos, docentes e funcionários do IST por autocarros regulares ao serviço da faculdade, que proporcionam a mobilidade entre os dois <em>campi</em> e as estações de Sete Rios, Oeiras e Cacém. 
                        </p><br/><br/>
                    
                    <p id="consulte">
                        Consulte os <a href="https://tecnico.ulisboa.pt/files/localizacao/HorariosAutocarros_2013-14.pdf"> horários e percursos</a>.
                    </p>
                </div> 
                
                <div class="tab-pane" id="taxi">
                    <p> Os táxis permitem chegar ao Taguspark a partir de qualquer ponto da cidade, mas os custos também aumentam de acordo com a distância, trânsito e hora. Uma viagem do centro de Lisboa até ao Taguspark tem uma duração de cerca de 30 minutos.
                    </p>
                </div> 
            </div>
        </div>
        </section>

        <section class="col col-sm-3 col-md-3 col-lg-3">
          <?php include "comp/sidebar.php"; ?>
        </section>
      </div>
      <?php include("comp/footer.php"); ?>
    </section>
    <?php include "comp/scripts.php" ?>
  </body>
</html>