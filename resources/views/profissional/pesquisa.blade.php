@extends('layout.principal')

@section('conteudo')

<form method ="post">
<fieldset> <table>
<legend><h2> Pesquisa <h2></legend>
<td> Profissão: </td> <td> <select name ="UF">
<option value ="administrador"> Administrador </option> 
<option value ="bombeiro"> Bombeiro </option> 
<option value ="carpinteiro"> Carpinteiro </option> 
<option value ="dentista"> Dentista </option> 
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
<option value ="zelador"> Zelador </option>
 
<td><td><td> Localidade: </td></td></td> <td> <select name ="UF">
<option value ="vilavelha"> Vila Velha - ES </option> 
<option value ="vitoria"> Vitoria - ES </option> 
<option value ="macae"> Macaé - RJ </option> 
<option value ="niteroi"> Niterói - RJ </option> 
<option value ="santos"> Santos - SP </option> 
<option value ="tatuape"> Tatuapé - SP </option> 
<option value ="belohorizonte"> Belo Horizonte - MG </option> 
<option value ="ouropreto"> Ouro Preto - MG </option> 
<option value ="feira"> Feira de Santana - BA </option> 
<option value ="itabuna"> Itabuna - BA </option> 
<option value ="recife"> Recife - PE </option> 
<option value ="caruaru"> Caruaru - PE </option> 
<option value ="fortaleza"> Fortaleza - CE </option> 
<option value ="jn"> Juazeiro do Norte - CE </option> 
<option value ="teresina"> Teresina - PI </option> 
<option value ="bj"> Bom Jesus - PI </option> 
<option value ="florianopolis"> Florianopolis - SC </option> 
<option value ="blumenau"> Blumenau - SC </option> 
<option value ="belem"> Belém - PA </option> 
<option value ="maraba"> Marabá - PA </option> </td>
</td> 

@yield('resultado')

@stop

