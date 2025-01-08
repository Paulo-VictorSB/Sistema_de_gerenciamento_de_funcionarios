# Sistema de Gerenciamento de Funcionários

Um sistema web desenvolvido em PHP que permite gerenciar funcionários de diferentes categorias (CLT, PJ e Freelancer), utilizando conceitos avançados de **Programação Orientada a Objetos (POO)**. O sistema calcula automaticamente os salários de acordo com as regras de cada categoria e exibe os detalhes de cada funcionário em uma interface web.

## 📋 Funcionalidades

- **Cadastro de Funcionários**  
  Permite cadastrar funcionários de três categorias distintas:
  - **CLT**: Com salário base e desconto de benefícios.
  - **PJ**: Contrato com valor fixo.
  - **Freelancer**: Baseado em horas trabalhadas e valor por hora.

- **Listagem de Funcionários**  
  Exibe uma tabela com informações detalhadas de todos os funcionários, incluindo:
  - Nome, cargo, categoria e salário calculado.

- **Cálculo Automático de Salário**  
  Aplica regras específicas para cada categoria de contratação.

- **Modularidade e Escalabilidade**  
  Código organizado em classes reutilizáveis e fácil de expandir.

---

## 🛠️ Tecnologias Utilizadas

### Back-End:
- PHP 7+  
  - **Classes Abstratas**  
  - **Herança**  
  - **Polimorfismo**  
  - **Interfaces**  
  - **Constructors e Destructors**  
  - **Access Modifiers** (`public`, `protected`, `private`)

### Front-End:
- HTML5
- CSS3
- Tabela responsiva com layout simples

---

## 📂 Estrutura de Arquivos

```plaintext
sistema_de_gerenciamento_de_funcionarios/
├── index.php                # Página inicial com formulário e listagem
├── src/
│   ├── models/
│   │   ├── Funcionario.php   # Classe base abstrata
│   │   ├── CLT.php           # Classe derivada
│   │   ├── PJ.php            # Classe derivada
│   │   ├── Freelancer.php    # Classe derivada
│   │   ├── SalarioCalculavel.php # Interface
│   └── helpers/
│       └── Database.php      # Simulação de banco de dados
├── assets/
│   ├── css/
│   │   └── styles.css        # Estilos do projeto
└── README.md                 # Documentação do projeto

