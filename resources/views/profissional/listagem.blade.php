@extends('profissional.pesquisa')

@section('resultado')

<h1>Listagem de profissional</h1>
	<table>
	<?php foreach ($profissional as $p): ?>
			<tr>
				<td><?= $p->nome ?> </td>
				<td><?= $p->cargo ?> </td>
				<td><?= $p->cidade ?> </td>
				<td><?= $p->uf ?> </td>
				
			</tr>
		<?php endforeach ?>
	</table>

</form>

@stop