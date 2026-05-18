# 🐋 Meu Site WordPress Local

Este é um projeto de desenvolvimento web focado em estruturar um ambiente isolado e profissional para rodar o WordPress localmente utilizando containers.

## 🛠️ Tecnologias Utilizadas

* **Docker & Docker Compose:** Para criação e gerenciamento dos containers do servidor e banco de dados.
* **Apache:** Servidor web para processar as páginas do site.
* **MySQL 8.0:** Banco de dados relacional para armazenar as informações do WordPress.
* **Git & GitHub:** Para controle de versão e versionamento seguro do código.

## 🚀 Como Executar o Projeto

Para rodar este projeto na sua máquina local, você precisará ter o **Docker** instalado.

1. Clone este repositório no seu computador.
2. Crie um arquivo chamado `.env` na raiz do projeto e configure as suas credenciais (ex: `DB_ROOT_PASSWORD` e `DB_NAME`).
3. Abra o terminal na raiz do projeto e execute o comando:
   ```bash
   docker compose up -d