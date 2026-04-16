# Contexto do Projeto - Backend Acampamento São Miguel Arcanjo

## Escopo do Projeto

Backend de uma API REST para gestão do **Acampamento São Miguel Arcanjo**. O sistema gerencia usuários, inscrições em eventos, acampamentos, festivais e tutto relacionado à vida do acampamento.

### Stack Tecnológico

-   **Framework**: Laravel 13 (PHP 8.3)
-   **Autenticação**: Laravel Sanctum (Token-based)
-   **Banco de Dados**: MariaDB
-   **Testes**: PestPHP
-   **Padrão de Commits**: Conventional Commits

---

## Estrutura do Projeto

### Modelos e Entidades

| Modelo | Descrição |
|---|---|
| `User` | Usuários do sistema (campistas, coordenadores). CPF como identificador principal. |
| `Subscription` | Inscrições de usuários em eventos. |
| `Camping` | Acampamentos (datas, vagas, taxas, regras). |
| `Festival` | Festivais. |
| `Event` | Eventos genéricos (polimórfico - pode ser Camping ou Festival). |
| `MaritalStatus` | Estado civil. |
| `Role` | Papéis (Campista, Coordenador, etc). |
| `Sector` | Setores do acampamento. |
| `SelectionMethod` | Métodos de seleção (Sorteio, Forania, Conselho, Base). |

### API Endpoints

A API segue o padrão versionado em `api/v1/`:

**Rotas Públicas:**
-   `POST /api/v1/register` - Cadastro de usuário (CPF como identificador)
-   `POST /api/v1/login` - Login (autenticação via CPF)

**Rotas Protegidas (Sanctum):**
-   `POST /api/v1/logout` - Logout
-   `GET /api/v1/user` - Dados do usuário autenticado
-   `apiResource` completo para: `marital-statuses`, `roles`, `selection-methods`, `sectors`, `campings`, `festivals`, `events`, `subscriptions`, `users`

---

## Histórico de Commits

### Commit 1: `ef59be0`
**Data**: 7 dias atrás
**Mensagem**: `feat: initial project setup - Laravel API for Acampamento Sao Miguel Arcanjo`

**Descrição**: Setup inicial do projeto Laravel.
-   Configuração da estrutura base da API.
-   Criação de todos os modelos, factories, migrations e seeders.
-   Implementação dos controllers com resources e form requests.
-   Configuração de Soft Deletes nos modelos.
-   Uso de Enums para `Sex` e `SubscriptionType`.
-   Correção de problemas N+1.

### Commit 2: `74ed5a5`
**Data**: 6 dias atrás
**Mensagem**: `feat: add authentication endpoints (login/logout)`

**Descrição**: Adição do sistema de autenticação.
-   Criação do `AuthController` com métodos `login` e `logout`.
-   Configuração do Laravel Sanctum.
-   Criação das rotas públicas e protegidas.

### Commit 3: `a0879e6`
**Data**: 13 horas atrás
**Mensagem**: `feat: implement user registration and update login to use CPF`

**Descrição**: Implementação do cadastro e migração do login para usar CPF.
-   Alteração do login para usar CPF em vez de email.
-   Criação do `RegisterRequest` com validação de campos únicos.
-   Implementação do método `register` no `AuthController`.
-   Criação da rota `POST /api/v1/register`.
-   Merge realizado com sucesso para a branch `main`.

---

## Preferências de Trabalho

### Filosofia de Desenvolvimento

A IA deve atuar como **um professor experiente**, não como um desenvolvedor que entrega código pronto. O objetivo é que eu (o usuário) aprenda e cresça como desenvolvedor.

### Diretrizes de Interação

1.  **Análise Antecipada**: Antes de implementar qualquer funcionalidade, **SEMPRE** apresentar o plano de ação ao usuário e perguntar se pode prosseguir.
    -   Exemplo: "Vou criar a rota X, alterar o controller Y e validar com o request Z. Posso continuar?"

2.  **Explicação ao Invés de Entrega Direta**:
    -   NÃO entregar código de bandeja.
    -   Explicar o que cada alteração faz e perguntar se o usuário quer que continue.
    -   Quando possível, mostrar as alterações antes de aplicar (especialmente em arquivos sensíveis como controllers).

3.  **Commits com Conventional Commits**:
    -   Sempre seguir o padrão: `feat:`, `fix:`, `refactor:`, etc.
    -   Mensagens claras e concisas.

4.  **Validação Contínua**:
    -   Sempre que possível, testar endpoints via Insomnia/cURL antes de finalizar.
    -   Garantir que o banco de dados e migrations estejam em dia.

5.  **Ramificação (Branching)**:
    -   Criar novas branches para funcionalidades (ex: `feat/user-registration-cpf`).
    -   Fazer merge para `main` após validação.

---

## Próximos Passos Sugeridos

1.  Push para repositório remoto (pendente de configuração de SSH).
2.  Implementação de endpoints para gestão de setores e funções dentro do acampamento.
3.  Criação de testes automatizados com PestPHP.

---

*Este documento deve ser atualizado conforme o projeto evolui.*