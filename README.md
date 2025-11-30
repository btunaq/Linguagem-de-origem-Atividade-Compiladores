# Validador Léxico de Formatos Monetários (Questão 4)

Este diretório contém a implementação da **Questão 4**, referente à construção de um analisador léxico para validar formatos de moedas fiduciárias.

O script utiliza **Expressões Regulares (Regex)** baseadas na construção teórica de Autômatos Finitos Determinísticos (AFD) para classificar valores como válidos ou inválidos segundo regras estritas de formatação.

## 📂 Arquivos

* **`verificador.py`**: Script em Python que contém a lógica de validação.
* **`moedas.txt`**: Arquivo de entrada contendo uma lista de valores monetários (casos de teste) para serem processados.

## ⚙️ Pré-requisitos

* Ter o **Python 3.x** instalado em sua máquina.

## 🚀 Como Rodar

Siga os passos abaixo para executar o verificador:

### 1. Preparação
Certifique-se de que o arquivo `moedas.txt` está criado na mesma pasta do script e contém os valores que você deseja testar (um por linha).

### 2. Execução via Terminal

Abra o seu terminal (CMD, PowerShell ou Terminal do Linux/Mac), navegue até esta pasta e execute o comando:

```bash
# Windows
python verificador.py
```
```bash
# Linux / Mac
python3 verificador.py
