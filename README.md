# Projeto: Aplicação de Cadastro e Gerenciamento de Produtos
Este repositório contém a solução desenvolvida em PHP para um desafio. O objetivo do desafio foi criar uma aplicação que permitisse aos usuários cadastrar produtos e gerenciar sua disponibilidade para venda.


# Descrição do Projeto
A aplicação permite:

-Cadastro de Produtos: Os usuários podem cadastrar novos produtos, informando detalhes como nome e preço. Durante o cadastro, é possível indicar se o produto está disponível para venda.


-Listagem de Produtos: Após o cadastro, os produtos disponíveis para venda são exibidos em uma listagem organizada.


-Gerenciamento de Disponibilidade: Produtos marcados como indisponíveis não aparecem na listagem inicial, mas podem ser pesquisados. Após a pesquisa, o usuário pode editar a disponibilidade do produto, tornando-o visível na listagem principal.


# Funcionalidades:
-Cadastro de Produtos: Formulário simples e intuitivo para adicionar novos produtos.


-Indicação de Disponibilidade: Opção para marcar um produto como disponível ou indisponível no momento do cadastro.


-Pesquisa e Edição: Funcionalidade de pesquisa que permite encontrar produtos indisponíveis e editar suas informações.


-Listagem Dinâmica: Exibição de produtos com base em sua disponibilidade para venda.


# Tecnologias Utilizadas
-PHP: Linguagem principal utilizada para o desenvolvimento da aplicação.


-MySQL: Banco de dados para armazenar as informações dos produtos.


-HTML/CSS: Estruturação e estilização da interface do usuário.


# Requisitos
Para rodar o projeto localmente, você precisará de:

-PHP 7.x ou superior


-Servidor web (Apache ou Nginx)


-Banco de dados MySQL


# Instalação
1. Clone este repositório:
git clone https://github.com/Gabrieljose0/Listagem-de-Produtos.git


2. Navegue até o diretório do projeto:
cd Aplicação de Cadastro e Gerenciamento de Produtos

3. Configure as credenciais do banco de dados no arquivo config.php.

4. Importe o arquivo database.sql no seu banco de dados.

5. Inicie o servidor web e acesse o projeto pelo navegador:
php -S localhost:8000


# Licença
Este projeto está licenciado sob a MIT License.
