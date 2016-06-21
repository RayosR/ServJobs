@extends('layout.principal')

@section('conteudo')

<a name="Pesquisa"></a>
<nav class="navbar navbar-default">
  <div class="container-fluid container"

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selecione a Profissão <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php foreach ($profissional as $p): ?>
            <li><a href="#"> <?= $p->cargo ?> </a></li>
            <?php endforeach ?>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selecione o Estado <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selecione a Cidade <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-default" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nome">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
        
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>







<!--<form method ="post" action="/profissional/busca">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<fieldset> <table>
<legend><h2> Pesquisa </h2></legend>
<td> Profissão: </td> <td> <select name ="profissao">
<option value =""> Profissão </option> 
<option value ="administrador"> Administrador </option> 
<option value ="bombeiro"> Bombeiro </option> 
<option value ="carpinteiro"> Carpinteiro </option> 
<option value ="dentista"> Dentista </option> 
<option value ="desenvolvedor"> Desenvolvedor </option> 
<option value ="eletricista"> Eletricista </option> 
<option value ="faxineira"> Faxineira </option> 
<option value ="ginecologista"> Ginecologista </option> 
<option value ="instalador"> Instalador </option> 
<option value ="jardineiro"> Jardineiro </option> 
<option value ="manicure"> Manicure </option> 
<option value ="nutricionista"> Nutricionista </option> 
<option value ="oftalmologista"> Oftalmologista </option> 
<option value ="professor"> Professor </option> 
<option value ="quimico"> Quimico </option> 
<option value ="radiologista"> Radiologista </option> 
<option value ="sapateiro"> Sapateiro </option> 
<option value ="terapeuta"> Terapeuta </option> 
<option value ="urologista"> Urologista </option> 
<option value ="veterinario"> Veterinário </option> 
<option value ="webDesigner"> Web Designer </option> 
<option value ="xilografo"> Xilografo </option> 
<option value ="zelador"> Zelador </option></select></td>
<!-- 
<td> Estado: </td> <td> <select name ="UF">
<option value ="">UF </option> 
<option value ="ac"> AC </option> 
<option value ="al"> AL </option> 
<option value ="am"> AM </option>
<option value ="ap"> AP </option> 
<option value ="ba"> BA </option>  
<option value ="ce"> CE </option> 
<option value ="df"> DF </option> 
<option value ="es"> ES </option> 
<option value ="go"> GO </option> 
<option value ="ma"> MA </option> 
<option value ="mg"> MG </option>
<option value ="ms"> MS </option> 
<option value ="mt"> MT </option> 
<option value ="pa"> PA </option>
<option value ="pb"> PB </option>
<option value ="pe"> PE </option>  
<option value ="pi"> PI </option>
<option value ="pr"> PR </option>  
<option value ="rj"> RJ </option>
<option value ="rn"> RN </option>
<option value ="ro"> RO </option>
<option value ="rr"> RR </option> 
<option value ="rs"> RS </option>
<option value ="sc"> SC </option>
<option value ="se"> SE </option>
<option value ="sp"> SP </option> 
<option value ="to"> TO </option> 
</td> </select></td>


<td> Cidade: </td> <td> <select name ="cidade">
<option value =""> Cidade </option> 
<option value ="vilavelha"> Vila Velha </option> 
<option value ="vitoria"> Vitoria </option> 
<option value ="macae"> Macaé </option> 
<option value ="niteroi"> Niterói</option> 
<option value ="santos"> Santos </option> 
<option value ="tatuape"> Tatuapé </option> 
<option value ="belohorizonte"> Belo Horizonte</option> 
<option value ="ouropreto"> Ouro Preto </option> 
<option value ="feira"> Feira de Santana</option> 
<option value ="itabuna"> Itabuna</option> 
<option value ="recife"> Recife</option> 
<option value ="caruaru"> Caruaru</option> 
<option value ="fortaleza"> Fortaleza</option> 
<option value ="jn"> Juazeiro do Norte</option> 
<option value ="teresina"> Teresina</option> 
<option value ="bj"> Bom Jesus - PI </option> 
<option value ="florianopolis"> Florianopolis</option> 
<option value ="blumenau"> Blumenau</option> 
<option value ="belem"> Belém</option> 
<option value ="maraba"> Marabá</option>
</td> </select> 
<td><button type="submit">Buscar</button></td>
</table>
</fieldset>
</form>-->

@yield('resultado')
@stop

