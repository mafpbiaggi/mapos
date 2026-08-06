# MapOS

Sistema web de gerenciamento de ordens de serviço. Permite controlar OS, clientes, produtos, serviços, vendas, lançamentos financeiros, relatórios e permissões de usuários.

> **Atenção:** este é um projeto legado em processo de refatoração. A infraestrutura Docker foi adicionada posteriormente ao desenvolvimento original. Consulte a seção [Notas sobre o projeto legado](#notas-sobre-o-projeto-legado) para mais detalhes.

## Requisitos

- Docker
- Docker Compose

## Stack

- **Framework:** CodeIgniter (PHP 5.6)
- **Banco de dados:** MariaDB
- **Frontend:** Bootstrap 2, jQuery, DataTables
- **Relatórios:** mPDF

## Estrutura do projeto

```
mapos/
├── application/
│   ├── config/               # Configurações do CodeIgniter
│   ├── controllers/          # Controllers da aplicação
│   ├── helpers/              # Helpers customizados e mPDF
│   ├── language/             # Arquivos de idioma
│   ├── libraries/            # Biblioteca de permissões
│   ├── models/               # Models da aplicação
│   └── views/                # Views organizadas por módulo
├── assets/                   # CSS, JS, imagens e uploads
├── docker/
│   ├── .env.example          # Modelo de variáveis de ambiente
│   ├── Dockerfile
│   ├── docker-compose.yaml
│   └── init/                 # Configurações de inicialização do container
├── docs/                     # Documentação e modelagem do banco
├── schema/                   # Schema SQL do banco de dados
├── system/                   # Core do CodeIgniter (não editar)
└── index.php                 # Ponto de entrada da aplicação
```

## Instalação

**1. Clone o repositório:**

```bash
git clone https://github.com/mafpbiaggi/mapos.git
cd mapos
```

**2. Configure as variáveis de ambiente:**

```bash
cp docker/.env.example docker/.env
```

Edite o arquivo `docker/.env` com os valores do seu ambiente:

```env
# Credenciais de acesso ao banco de dados
MYSQL_ROOT_PASSWORD=
MYSQL_HOST=db_mapos
MYSQL_DATABASE=
MYSQL_USER=
MYSQL_PASSWORD=

# Caminho absoluto para a raiz do projeto
ROOT_DIR=

# Porta que a aplicação vai expor
PORT_MAPPING=

# Chave de criptografia de sessão (string aleatória segura)
ENCRYPTION_KEY=
```

**3. Execute os containers:**

```bash
cd docker
docker compose up -d --build
```

A aplicação estará disponível em `http://IP_HOST_DOCKER:{PORT_MAPPING}`.

**4. Importe o schema do banco de dados:**

```bash
docker exec -i db_mapos mariadb -u<MYSQL_USER> -p<MYSQL_PASSWORD> <MYSQL_DATABASE> < schema/schema.sql
```

**5. Acesse o sistema:**

```
URL:   http://IP_HOST_DOCKER:{PORT_MAPPING}
Login: 
Senha: 
```

> **Importante:** altere a senha do usuário administrador imediatamente após o primeiro acesso.

## Módulos

| Módulo | Descrição |
|--------|-----------|
| Ordens de Serviço | Criação e gerenciamento de OS, com produtos, serviços e anexos |
| Clientes | Cadastro completo de clientes |
| Produtos | Controle de estoque e preços |
| Serviços | Catálogo de serviços com preços |
| Vendas | Registro de vendas com controle de estoque |
| Financeiro | Lançamentos de receitas e despesas |
| Relatórios | Geração de relatórios em PDF por módulo |
| Usuários | Gerenciamento de usuários do sistema |
| Permissões | Controle granular de acesso por perfil |
| Configurações | Dados do emitente e logomarca |

## Notas sobre o projeto legado

Este projeto foi desenvolvido originalmente por um terceiro e está sendo mantido e refatorado. O código original foi construído sobre o CodeIgniter com PHP 5.6 e passou por evoluções incrementais.

O único contato disponível do desenvolvedor original é: **silva018-mg@yahoo.com.br**

## Dados do Desenvolvedor

**Nome:** Marco Aurélio Biaggi ([@mafpbiaggi](https://github.com/mafpbiaggi))
