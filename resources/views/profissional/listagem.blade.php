@extends('profissional.pesquisa')

@section('resultado')



	<h1>Listagem de profissional</h1>

<?php foreach ($profissional as $p): ?>
<div class="team-member">
          <img src="img/1.jpg" class="img-responsive img-circle" alt="">
                <b><p class="p1"><?= $p->nome ?></p></b>
                <p class="p2"><?= $p->cargo ?></p>
                <p class="p3"><?= $p->cidade ?>/<?= $p->uf ?></p>
	</div>
<?php endforeach ?>


</div>

	
</div>
@yield('cadastro')
@stop

