import re
import os

def validar_moedas():
    S = r"(?:[a-zA-Z]+\$?|\$)"
    
    I = r"(?:0|[1-9][0-9]{0,2}|[1-9][0-9]?(?:\.[0-9]{3})+)"
    
    F = r",[0-9]{2,}"
    
    Num = f"{I}{F}"
    regex_final = f"^{S}(-?{Num}|\\({Num}\\))$"
    
    padrao = re.compile(regex_final)

    arquivo_nome = "analise-lexica/moedas.txt"

    if not os.path.exists(arquivo_nome):
        print(f"ERRO: O arquivo '{arquivo_nome}' não foi encontrado.")
        print("Por favor, crie este arquivo na mesma pasta do script com os valores a serem testados.")
        return

    print(f"{'VALOR LIDO':<20} | {'STATUS':<10}")
    print("-" * 35)

    try:
        with open(arquivo_nome, "r", encoding="utf-8") as arquivo:
            for linha in arquivo:
                valor = linha.strip()
                
                if not valor: continue
                
                if padrao.match(valor):
                    status = "VÁLIDO"
                else:
                    status = "INVÁLIDO"
                
                print(f"{valor:<20} | {status}")
                
    except Exception as e:
        print(f"Ocorreu um erro ao ler o arquivo: {e}")

if __name__ == "__main__":
    validar_moedas()