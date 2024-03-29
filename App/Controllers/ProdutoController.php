<?php 

	namespace App\Controllers;

	use Psr\Http\Message\ServerRequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;
	use App\DAO\GestaoVendas\ProdutosDAO;

final class ProdutoController extends Controller
	{
		/**
		 * Simulação de um ambiente de rotas voltado para parte de Produtos
		 * Aqui vamos utilizar somente o get, para exibir os produtos na tela.
		 */
		public function getProdutos(Request $request, Response $response, array $args)
		{
			$produtosDao = new ProdutosDAO();
			$produtos = $produtosDao->getAllProdutos();
			$response = $response->withJson($produtos);			
			return $response;
		}
		public function updateProdutos(Request $request, Response $response, array $args)
		{
			$produtosDao = new ProdutosDAO();
			$produtos = $produtosDao->getAllProdutos();
			$response = $response->withJson($produtos);			
			return $response;
		}		

	}

 ?>
