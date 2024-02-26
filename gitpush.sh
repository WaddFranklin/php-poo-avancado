#!/bin/bash

# Verifica se há alterações para commit
if [[ -n $(git status -s) ]]; then
    # Adiciona todos os arquivos ao commit
    git add .

    # Pede uma mensagem de commit ao usuário
    echo "Digite a mensagem de commit:"
    read commit_message

    # Faz o commit com a mensagem fornecida
    git commit -m "$commit_message"

    # Realiza o push para o repositório remoto
    git push
else
    echo "Nenhuma alteração para commit."
fi
