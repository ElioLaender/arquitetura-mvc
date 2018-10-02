# arquitetura-mvc
Estrutura de diretórios para projetos no padrão MVC em PHP

	arquitetura-mvc/
			config/
				-Auto_load_config.php
				-Controller_config.php
				-Request_config.php
				-Route_config.php
				-View_config.php

			controller/
				-Home_controller.php

			dao/
				access_object/
					 -Base_dao.php
		        connection_factory/
					 -Connection_factory.php

			model/
				-Base_model.php

			vendor/
			view/
			   assets/
				   css/
				   img/
				   js/
			pages/
				home/
				   -home.php
	-index.php

--------------------------------------------------------------

Descrição de arquivos e diretórios:

* <b>congif</b>: Arquivos de configuração do sistema, tais como as dependências que as classes do projeto possui para funcionar.

	- Auto_load_config.php: Inclui as classes no momento em que as mesmas são intânciadas. 
  	- Controller_config.php: Compartilha código entre todos os controles.
	- Request_config.php: Obtém requisições.
	- Route_config.php: Possui todas as rotas utilizadas no projeto.
	- View_config.php: Renderiza as páginas e armazena informações para serem impressas na mesma.

* <b>controller:</b> Possui classes de controle, sendo a camada Controller do MVC. 
	
	- Home_controller.php: Realiza o controle de requisições da view, analisando e retornando resultados. 

* <b>dao:</b> Essa camada é responsável por realizar consultas na base de dados, onde será escrito as consultas SQL e executadas posteriormente na camada Model.
	
	- Base_dao.php: Responsável por gerar o SQL de consultas na base de dados
	- Connection_factory.php: Possui dados de acesso ao banco de dados, sendo acessado via classe PDO.

* <b>model:</b> Possui a referência da respectiva tabela na base de dados e também coneção com a classe PDO. 

	- Base_model.php: classe espelho da respectiva tabela no banco de dados. 

* <b>vendor:</b> Responsável por armazenar todos os arquivos externos, servindo de exemplo bibliotecas e partes de outros frameworks. 

* <b>view:</b> Possui todos os arquivos responsáveis por compor a parte gráfica do projeto, sendo dividida em duas partes, tais como a pasta assets, na qual armazena o css, imagens e o javaScript. A pasta pages armazena outras pastas, no caso temos a pasta home, responsável por armazenar arquivos html referente a tela inicial do projeto.  

	- home.php: Exibe informações na tela. 

- <b>index.php:</b> Direciona requisições. 


				   		

				
		 
