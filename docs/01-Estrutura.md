---
title: Estrutura de Diretórios
subtitle: 
author: Marcos de Lima Carlos
---

## Introdução

Este documento tem como objetivo explicar a estrutura de diretórios do projeto [Joomla - Skeleton](https://github.com/projetos-de-software/joomla-skeleton).

## Descrição

Todos os diretórios estarão explicados a partir da raiz do projeto. 

| Diretório |                           Descrição                           |
| :-------: | :-----------------------------------------------------------: |
|  .github  | Diretório de Configuração de software para o Github (Actions) |
|  .husky   |       Diretório de configuração do Husky para o projeto       |
|  .vscode  |              Diretório de Configuração do VScode              |
| document  |             Diretório de Documentação do Sistema              |
|  script   |                  Diretório de scripts (bash)                  |
|    src    |            Diretório Fonte do Projeto do Template             |
|  updates  |       Diretório Fonte do Arquivo de checagem de Updates       |

### Github

Este diretório tem a funcionalidade de programar as actions do github. Essas ações podem ser deploy ou podem ser outras a serem especificadas posteriormente. 


### Husky

O [Husky](https://typicode.github.io/husky/) faz parte do pacote de integra os [commits convencionais](03-Commits.md). Utiliza-se de NodeJS para executar os scripts de ação pré commit para que possam ser efetuados as validações semânticas e deixar os relatórios mais legíveis. Este pacote é um trigger de ações para validação de GIT através do [commitzen](https://www.npmjs.com/package/commitizen).  

### Vscode 

O diretório do VScode é um diretório que guarda as configurações de projeto para replicação posterior. Dentro do arquivo settings.json temos as opções de extensões e a opção de configuração: 

#### Extensões Recomendadas

| Número |                   Nome                    |                               Funcionalidade                               |
| :----: | :---------------------------------------: | :------------------------------------------------------------------------: |
|   01   | Brazilian Portuguese - Code Spell Checker |               Validação de digitação em português do Brasil                |
|   02   |            Code Spell Checker             |              Extensão necessária para instalação da Primeira               |
|   03   |            Insert Date String             | Extensão que insere data e hora no padrão configurado dentro de um arquivo |
|   04   |         Markdown Preview Enhanced         |    Extensão que faz visualização de arquivos markdown dentro do vscode     |
|   05   |              Markdown Kroki               |      Utiliza a visualização do [kroki](https://kroki.io/) no markdown      |
|   06   |                   TODO+                   |            Arquivos de catalogação de tarefas dentro do Vscode             |


### Document 

Este diretório encontra-se os documentos de todo o projeto. Eu optei por fazer neste formato para que ao baixar o repositório você possua tudo na máquina. 

### Script

Neste diretório você encontrará os scripts que foram feitos dentro do projeto. A lista abaixo de scripts: 

|  Nome   |                    Funcionalidade                     |
| :-----: | :---------------------------------------------------: |
| script  |        Gera a estrutura base de um repositório        |
| geraPKG | Gera o skeleton do template com opções personalizadas |

### Src

Diretório Padrão de código para um template em Joomla. Existem 3 subdiretórios: 

1. Language
   1. Arquivo de Idiomas do template
2. Media
   1. Arquivos de Imagens, CSS, SCSS e Javascript
3. Templates
   1. Arquivos de Templates propriamente ditos.

### Updates

Esse diretório refere-se ao arquivo de update que precisa ser atualizado para informar ao usuário que tem o template instalado que existe uma atualização. 


---

## Revisão 

| Número | Autor | Data  |
| :----: | :---: | :---: |